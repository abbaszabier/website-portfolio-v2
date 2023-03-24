@extends('layouts.sidebar')
@section('main')
    <div class="portfolio-main">
        <div class="row align-items-center  ps-3 pe-3 mt-4" style="margin-bottom: 100px">
            <div class="col-md-12 mb-1">
                <h2 class="text-center">Projects {{ $category }}</h2>
            </div>
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
@endsection
