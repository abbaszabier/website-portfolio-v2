@extends('layouts.sidebar')
@section('main')
<div class="portfolio-main">
    <div class="row mt-5 mb-3">
        <div class="col-md-12 text-center">
            <h1 class="fs-3">All Project</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/portfolio">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" autocomplete="off" id="searchtext" value="{{ request('search') }}" placeholder="Search...">
                </div>
            </form>
        </div>
    </div>
    <div class="row align-items-center  ps-3 pe-3" id="searchResult" style="margin-bottom: 100px">
        @foreach ($posts as $post)
        <div class="col-md-4">
            <div class="card shadow-sm mt-4">
                @if($post->image)
                    <a href="/portfolio/{{ $post->slug }}">
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
                    </a>
                @else
                <a href="/portfolio/{{ $post->slug }}">
                    <img src="/img/bg.jpg" class="card-img-top" alt="...">
                </a>
                @endif
                <div class="card-body">
                    <span class="badge mb-2 p-2"><a class="text-decoration-none" href="/services/{{ $post->category->slug }}">{{ $post->category->name }}</a></span>
                    <h5 class="card-title"><a href="/portfolio/{{ $post->slug }}">{{ $post->title }}</a></h5>
                    <small><small><p>{{ $post->user->name }} - {{ date('j F Y', strtotime($post->created_at)) }}</p></small></small>
                    @if ($post->category->name == "UI Design")
                        <a href="/portfolio/{{ $post->slug }}" class="text-decoration-none"> <i class="bi bi-journal-text me-2"></i>View More</a>
                    @else
                        <a href="{{ $post->web }}" target="_blank" class="text-decoration-none"><i class="bi bi-link-45deg"></i> Visit Web</a>
                    @endif
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function () {
        function Contains(sub_text, main_text) {
            if (sub_text.indexOf(main_text) != -1)
                return true;
        }
        $("#searchtext").keyup(function () {
            var searchText = $("#searchtext").val().toLowerCase();
            $(".col-md-4").each(function () {
                if (!Contains($(this).text().toLowerCase(), searchText)) {
                    $(this).hide();
                }
                else {
                    $(this).show();
                }
            })
        })
    });
</script>
@endsection

