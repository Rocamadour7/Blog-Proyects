@extends('main')

@section('title', '| New Post')

@section('stylesheets')
  <link rel="stylesheet" href="/css/form.css">
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="form-container card">
        <div class="header header-primary text-center">
          <h4>Nueva Publicación</h4>
        </div>
        <form method="POST" action="{{ route('posts.store') }}" data-toggle="validator" role="form">
          <div class="form-group label-floating">
            <label for="title" class="control-label">Título:</label>
            <input type="text" id="title" name="title" class="form-control" required maxlength="255">
          </div>
          <div class="form-group label-floating">
            <label for="body" class="control-label">Contenido:</label>
            <textarea id="body" name="body" rows="10" class="form-control" required></textarea>
          </div>
          <input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block btn-simple">
          <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
      </div>
    </div>
  </div>﻿
@endsection

@section('scripts')
  <script src="/js/validator.min.js"></script>
@endsection
