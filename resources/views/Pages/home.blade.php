@extends('main')

@section('stylesheets')
  <link rel="stylesheet" href="/css/home.css">
@endsection

@section('jumbotron')
  <section class="jumbotron">
    <div class="container">
      <h1>Blog de Luis Molina</h1>
      <p>En este sitio encontrarás todos los proyectos que hago para aprender.</p>
      <p><a href="#" class="btn btn-primary btn-lg" role="button">Ver más...</a></p>
    </div>
  </section>
@endsection

@section('content')
  <div class="row">
    <section class="col-sm-8">
      <div class="card">
        <div class="content">
          @foreach ($posts as $post)
            <article class="post">
              <a href="#" class="img-container thumbnail pull-left">
                <img src="http://lorempixel.com/800/450/technics/" alt="ImagePlaceholder">
              </a>
              <h2 class="post-title">
                <a href="{{ route('blog.single', $post->slug) }}">{{ $post->title }}</a>
              </h2>
              <p><span class="post-date">{{ $post->created_at->diffForHumans() }} por </span><a href="#">Luis Molina</a></p>
              <p class="post-content text-justify">{{ $post->body }}</p>
              <div class="button-container">
                <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Leer Más</a>
                <a href="#" class="btn btn-success">Comentarios <span class="badge">20</span></a>
              </div>
            </article>
            <hr>
          @endforeach
          <div class="text-center">
            {!! $posts->links() !!}
          </div>
        </div>
      </div>
    </section>
    <aside class="col-sm-4 hidden-xs">
      <div class="card">
        <div class="content">
          <h2>Sidebar</h2>
        </div>
      </div>
    </aside>
  </div>
@endsection
