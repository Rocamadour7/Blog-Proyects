@extends('main')

@section('title', '| Publicaciones')

@section('stylesheets')
  <link rel="stylesheet" href="/css/posts.css">
@endsection

@section('content')
  <div class="card card-raised">
    <div class="header header-primary text-center">
        <h1>Todas las publicaciones</h1>
    </div>

    <div class="content">
      <div class="col-md-3 col-md-offset-9">
        <a href="{{ route('posts.create') }}" class="btn btn-block btn-success btn-simple"><i class="material-icons">add</i>Nueva Publicación</a>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table table-hover">
            <thead>
              <th>#</th>
              <th>Título</th>
              <th>Cuerpo</th>
              <th>Creado en:</th>
              <th></th>
            </thead>
            <tbody>
              @foreach ($posts->all() as $post)
                <tr>
                  <th>{{ $post->id }}</th>
                  <td>{{ $post->title }}</td>
                  <td>{{ str_limit($post->body, 50) }}</td>
                  <td>{{ $post->created_at->format('M j, Y h:i A') }}</td>
                  <td>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-default">Ver</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-danger">Eliminar</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
