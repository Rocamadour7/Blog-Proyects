@extends('dashboard')

@section('title', 'Publicaciones')

@section('content')
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" data-background-color="purple">
          <h4 class="title">{{ $post->title }}</h4>
        </div>
        <div class="card-content">
          <p class="lead">{!! $post->body !!}</p>
          <hr>
          <div class="labels">
            @foreach ($post->tags as $tag)
              <span class="label label-info">{{ $tag->name }}</span>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-content">
          <dl>
            <label>URL:</label>
            <p><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p>
            <label>Categoría:</label>
            <p>{{ $post->category->name }}</p>
            <label>Creado en:</label>
            <p>{{ $post->created_at->format('M j, Y h:i A') }}</p>
            <label>Última Actualización:</label>
            <p>{{ $post->updated_at->format('M j, Y h:i A') }}</p>
          </dl>
          <hr>
          <div class="row">
            <div class="col-sm-6">
              <form method="POST" action="{{ route('posts.edit', $post->id) }}">
                <input type="submit" value="Modificar" class="btn btn-primary btn-block">
                {{ csrf_field() }}
                {{ method_field('GET') }}
              </form>
            </div>
            <div class="col-sm-6">
              <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                <input type="submit" value="Eliminar" class="btn btn-danger btn-block">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
              </form>
            </div>﻿
          </div>
          <div class="row">
            <div class="col-sm-12">
              <a href="{{ route('posts.index') }}" class="btn btn-default btn-block"><i class="material-icons">view_list</i> Todas las publicaciones</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
