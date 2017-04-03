@extends('main')

@section('title', '| '.$post->title)

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="content">
          <h1>{{ $post->title }}</h1>
          <p class="lead">{{ $post->body }}</p>
        </div>
      </div>
    </div>
  </div>
@endsection
