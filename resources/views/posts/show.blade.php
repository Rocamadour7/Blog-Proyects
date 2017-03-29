@extends('main')

@section('title', '| View Post')

@section('content')

  <div class="row">
    <div class="col-md-8">
      <h1>{{ $post->title }}</h1>
      <p class="lead">{{ $post->body }}</p>
    </div>
    <div class="col-md-4">
      <div class="card card-raised">
        <div class="content">
          <dl class="dl-horizontal">
            <dt>Creado:</dt>
            <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
            <dt>Última Actualización:</dt>
            <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
          </dl>
          <hr>
          <div class="row">
            <div class="col-sm-6">
              <form method="POST" action="{{ route('posts.edit', $post->id) }}">
                <input type="submit" value="Edit" class="btn btn-primary btn-block">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
              </form>
            </div>
            <div class="col-sm-6">
              <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                <input type="submit" value="Delete" class="btn btn-danger btn-block">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
              </form>
            </div>﻿
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
