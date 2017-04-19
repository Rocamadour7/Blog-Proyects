@extends('main')

@section('title', '| '.$post->title)

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="content">
          <img src="http://lorempixel.com/1110/500/technics" alt="ImageName" class="img-responsive">
          <div class="row post-info">
            <div class="col-xs-6">
              <span class="label label-warning text-left">{{ $post->category->name }}</span>
            </div>
            <div class="col-xs-6">
              <p class="text-muted text-right">{{ $post->created_at->diffForHumans() }}</p>
            </div>
          </div>
          <hr>
          <h3>{{ $post->title }}</h3>
          <p class="text-justify">{{ $post->body }}</p>
        </div>
      </div>
      <div class="card">
        <div class="content">
          <h4>Comentarios ({{ $post->comments->count() }})</h4>
          <hr>
          @foreach ($post->comments as $comment)
            <div class="media">
              <div class="media-left">
                <img src="http://www.sessionlogs.com/media/icons/defaultIcon.png" alt="Avatar" class="media-object">
              </div>
              <div class="media-body">
                <div class="media-heading">
                  <h6>{{ $comment->user->name }}</h6>
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
