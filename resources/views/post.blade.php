@extends('layouts.sidebar')
@section('main')
<div class="container">
    <div class="row justify-content-center mt-4 mb-5">
        <div class="col-md-11">
            <h1 class="mb-4">{{ $post->title }}</h1>
            <article>
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection