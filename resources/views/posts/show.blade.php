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
            <dd>{{ $post->created_at->format('M j, Y h:i A') }}</dd>
            <dt>Última Actualización:</dt>
            <dd>{{ $post->updated_at->format('M j, Y h:i A') }}</dd>
          </dl>
          <hr>
          <div class="row">
            <div class="col-sm-6">
              <form method="POST" action="{{ route('posts.edit', $post->id) }}">
                <input type="submit" value="Modificar" class="btn btn-primary btn-block">
                {{ csrf_field() }}
              </form>
            </div>
            <div class="col-sm-6">
              <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                <input type="submit" value="Eliminar" class="btn btn-danger btn-block">
                {{ csrf_field() }}
              </form>
            </div>﻿
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
