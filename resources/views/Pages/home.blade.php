@extends('main')

@section('stylesheets')
  <link rel="stylesheet" href="/css/home.css">
@endsection

@section('content')
  @foreach ($posts as $post)
    <div class="col-md-4">
      <div class="card card-raised">
        <div class="content">
          <a href="{{ route('blog.single', $post->slug) }}">
            <img src="http://lorempixel.com/1280/1080/technics" alt="ImageName" class="img-responsive img-container">
          </a>
          <h4>{{ $post->title }}</h4>
          <p><span class="post-date">{{ $post->created_at->diffForHumans() }} por </span>Luis Molina</p>
          <p class="post-content text-justify">{{ str_limit(strip_tags($post->body), 50) }}</p>
          <div class="button-container">
            <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Leer Más</a>
            <a href="#" class="btn btn-success">Comentarios <span class="badge">{{ $post->comments->count() }}</span></a>
          </div>
        </div>
      </div>
    </div>
  @endforeach
  <div class="row">
    <div class="col-md-12">
      {!! $posts->links() !!}
    </div>
  </div>
@endsection
