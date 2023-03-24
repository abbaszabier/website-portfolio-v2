@extends("dashboard.main")
@section("container")

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">
    <form action="/dashboard/posts" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title">
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug">
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Category</label>
        <select class="form-select" name="category_id">
          <option selected>Open this select menu</option>
          @foreach ($categories as $item)
          <option value="{{ $item->id }}">{{ $item->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="d-flex justify-content-between mb-3">
        <div class="col-lg-5">
          <label for="web" class="form-label">Github</label>
          <input type="text" class="form-control" id="github" name="github">
        </div>
        <div class="col-lg-6">
          <label for="web" class="form-label">Web</label>
          <input type="text" class="form-control" id="web" name="web">
        </div>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Post Image</label>
        <input class="form-control" type="file" id="image" name="image">
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Body</label>
        <textarea class="form-control" id="body" name="body"></textarea>
      </div>
      <button type="submit" class="btn btn-primary mb-5">Submit</button>
    </form>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
<script>
      //Define an adapter to upload the files
    class MyUploadAdapter {
       constructor(loader) {
          // The file loader instance to use during the upload. It sounds scary but do not
          // worry — the loader will be passed into the adapter later on in this guide.
          this.loader = loader;

          // URL where to send files.
          this.url = '{{ route('ckeditor.upload') }}';

          //
       }
       // Starts the upload process.
       upload() {
          return this.loader.file.then(
             (file) =>
                new Promise((resolve, reject) => {
                   this._initRequest();
                   this._initListeners(resolve, reject, file);
                   this._sendRequest(file);
                })
          );
       }
       // Aborts the upload process.
       abort() {
          if (this.xhr) {
             this.xhr.abort();
          }
       }
       // Initializes the XMLHttpRequest object using the URL passed to the constructor.
       _initRequest() {
          const xhr = (this.xhr = new XMLHttpRequest());
          // Note that your request may look different. It is up to you and your editor
          // integration to choose the right communication channel. This example uses
          // a POST request with JSON as a data structure but your configuration
          // could be different.
          // xhr.open('POST', this.url, true);
          xhr.open("POST", this.url, true);
          xhr.setRequestHeader("x-csrf-token", "{{ csrf_token() }}");
          xhr.responseType = "json";
       }
       // Initializes XMLHttpRequest listeners.
       _initListeners(resolve, reject, file) {
          const xhr = this.xhr;
          const loader = this.loader;
          const genericErrorText = `Couldn't upload file: ${file.name}.`;
          xhr.addEventListener("error", () => reject(genericErrorText));
          xhr.addEventListener("abort", () => reject());
          xhr.addEventListener("load", () => {
             const response = xhr.response;
             // This example assumes the XHR server's "response" object will come with
             // an "error" which has its own "message" that can be passed to reject()
             // in the upload promise.
             //
             // Your integration may handle upload errors in a different way so make sure
             // it is done properly. The reject() function must be called when the upload fails.
             if (!response || response.error) {
                return reject(response && response.error ? response.error.message : genericErrorText);
             }
             // If the upload is successful, resolve the upload promise with an object containing
             // at least the "default" URL, pointing to the image on the server.
             // This URL will be used to display the image in the content. Learn more in the
             // UploadAdapter#upload documentation.
             resolve({
                default: response.url,
             });
          });
          // Upload progress when it is supported. The file loader has the #uploadTotal and #uploaded
          // properties which are used e.g. to display the upload progress bar in the editor
          // user interface.
          if (xhr.upload) {
             xhr.upload.addEventListener("progress", (evt) => {
                if (evt.lengthComputable) {
                   loader.uploadTotal = evt.total;
                   loader.uploaded = evt.loaded;
                }
             });
          }
       }
       // Prepares the data and sends the request.
       _sendRequest(file) {
          // Prepare the form data.
          const data = new FormData();
          data.append("upload", file);
          // Important note: This is the right place to implement security mechanisms
          // like authentication and CSRF protection. For instance, you can use
          // XMLHttpRequest.setRequestHeader() to set the request headers containing
          // the CSRF token generated earlier by your application.
          // Send the request.
          this.xhr.send(data);
       }
       // ...
    }

    function SimpleUploadAdapterPlugin(editor) {
       editor.plugins.get("FileRepository").createUploadAdapter = (loader) => {
          // Configure the URL to the upload script in your back-end here!
          return new MyUploadAdapter(loader);
       };
    }
  ClassicEditor.create(document.querySelector("#body"), {
       extraPlugins: [SimpleUploadAdapterPlugin],
    }).catch((error) => {
       console.error(error);
    });
</script>
<script>
  const title = document.querySelector("#title");
  const slug = document.querySelector("#slug");

  title.addEventListener("change", function() {
    fetch("/dashboard/posts/createSlug?title=" + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  })
</script>
@endsection