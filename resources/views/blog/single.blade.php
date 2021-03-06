@extends('main')

@section('title', '| '.$post->title)

@section('stylesheets')
  <link rel="stylesheet" href="/css/single.css">
@endsection

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="content">
          <img src="{{ asset('/images/posts/'.$post->imagePath) }}" alt="{{ $post->title }}" class="img-responsive">
          <div class="row post-info">
            <div class="col-xs-6">
              <span class="label label-info text-left">{{ $post->category->name }}</span>
            </div>
            <div class="col-xs-6">
              <p class="text-muted text-right">{{ $post->created_at->diffForHumans() }}</p>
            </div>
          </div>
          <hr>
          <h3>{{ $post->title }}</h3>
          <p class="text-justify">{!! $post->body !!}</p>
          <hr>
          @foreach ($post->tags as $tag)
            <span class="label label-danger text-left">{{ $tag->name }}</span>
          @endforeach
        </div>
      </div>
      <div class="card">
        <div class="content" id="comments">
          <h4><span class="glyphicon glyphicon-comment"></span> Comentarios ({{ $post->comments->count() }})</h4>
          <hr>
          @foreach ($post->comments as $comment)
            <div class="media">
              <div class="media-left">
                <img src="{{ $comment->user->avatar }}" alt="Avatar" class="media-object">
              </div>
              <div class="media-body">
                <div class="media-heading">
                  <h6>{{ $comment->user->name }}</h6>
                  <span class="text-muted">{{ $comment->created_at->diffForHumans() }}</span>
                  <p>{{ $comment->content }}</p>
                </div>
              </div>
            </div>
            <hr>
          @endforeach
          @if (Auth::guest())
            <p class="text-center lead"><a href="{{ route('register') }}">Regístrate</a> o <a href="{{ route('login') }}">inicia sesión</a> para comentar...</p>
          @else
            <form action="{{ route('comments.store', [$post->id, Auth::user()->id]) }}" method="POST" data-toggle="validator" role="form">
              <div class="form-group label-floating is-empty">
                <label for="content" class="control-label">Nuevo:</label>
                <textarea type="text" name="content" class="form-control" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-block btn-simple">Enviar</button>
              {{ csrf_field() }}
            </form>
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection
