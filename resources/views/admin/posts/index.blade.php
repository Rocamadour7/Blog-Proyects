@extends('dashboard')

@section('title', 'Publicaciones')

@section('stylesheets')
  <link rel="stylesheet" href="/css/table.css">
@endsection

@section('content')
  <div class="row">
    <div class="card">
      <div class="card-header" data-background-color="purple">
        <h4 class="title">Publicaciones</h4>
        <p class="category"></p>
      </div>
      <div class="card-content table-responsive">
        <table class="table table-hover table-condensed">
          <thead class="text-primary">
            <th>#</th>
            <th>Título</th>
            <th>Cuerpo</th>
            <th>Categoría</th>
            <th>Creado en</th>
            <th></th>
          </thead>
          <tbody>
            @foreach ($posts->all() as $post)
              <tr>
                <th>{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ str_limit($post->body, 50) }}</td>
                <td>{{ $post->category->name }}</td>
                <td>{{ $post->created_at->format('M j, Y h:i A') }}</td>
                <td class="btn-column">
                  <form method="POST" action="{{ route('posts.show', $post->id) }}">
                    <button type="submit" rel="tooltip" title="Ver" class="btn btn-info btn-simple btn-xs">
                      <i class="material-icons">visibility</i>
                    </button>
                    {{ csrf_field() }}
                    {{ method_field('GET') }}
                  </form>
                  <form method="POST" action="{{ route('posts.edit', $post->id) }}">
                    <button type="submit" rel="tooltip" title="Editar" class="btn btn-primary btn-simple btn-xs">
                      <i class="material-icons">edit</i>
                    </button>
                    {{ csrf_field() }}
                    {{ method_field('GET') }}
                  </form>
                  <button type="button" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs" data-toggle="modal" data-target="#deleteModal-{{ $post->id }}">
                    <i class="material-icons">close</i>
                  </button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <div class="row">
          <div class="col-md-9">
            {!! $posts->links() !!}
          </div>
          <div class="col-md-3 col-md-offset-9">
            <a href="{{ route('posts.create') }}" class="btn btn-block btn-success btn-simple"><i class="material-icons">add</i>Nueva Publicación</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('modals')
  @foreach ($posts as $post)
    <div class="modal fade" id="deleteModal-{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="deleteTitle">Estás seguro?</h4>
          </div>
          <div class="modal-body">
            <p>Estás a punto de eliminar permanentemente la publicación <em><span>{{ $post->title }}</span></em>. Deseas continuar?</p>
          </div>
          <div class="modal-footer">
            <div class="btn-column">
              <button type="button" class="btn btn-white cancel-btn" data-dismiss="modal">Cancelar</button>
              <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger">Eliminar</button>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
@endsection
