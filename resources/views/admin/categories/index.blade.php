@extends('dashboard')

@section('title', 'Categorías')

@section('stylesheets')
  <link rel="stylesheet" href="/css/table.css">
@endsection

@section('content')
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header" data-background-color="purple">
          <h4 class="title">Categorías</h4>
          <p class="category"></p>
        </div>
        <div class="card-content table-responsive">
          <table class="table table-hover table-condensed">
            <thead class="text-primary">
              <th>#</th>
              <th>Nombre</th>
              <th></th>
            </thead>
            <tbody>
              @foreach ($categories->all() as $category)
                <tr>
                  <th>{{ $category->id }}</th>
                  <td>{{ $category->name }}</td>
                  <td class="btn-column">
                    <form method="POST" action="{{ route('categories.edit', $category->id) }}">
                      <button type="submit" rel="tooltip" title="Editar" class="btn btn-primary btn-simple btn-xs">
                        <i class="material-icons">edit</i>
                      </button>
                      {{ csrf_field() }}
                      {{ method_field('GET') }}
                    </form>
                    <button type="button" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs" data-toggle="modal" data-target="#deleteModal-{{ $category->id }}">
                      <i class="material-icons">close</i>
                    </button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col-md-9">
              {!! $categories->links() !!}
            </div>
            <div class="col-md-3 col-md-offset-9">
              <a href="{{ route('categories.create') }}" class="btn btn-block btn-success btn-simple"><i class="material-icons">add</i>Nueva</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('modals')
  @foreach ($categories as $category)
    <div class="modal fade" id="deleteModal-{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="deleteTitle">Estás seguro?</h4>
          </div>
          <div class="modal-body">
            <p>Estás a punto de eliminar permanentemente la categoría <em><span>{{ $category->name }}</span></em>. Deseas continuar?</p>
          </div>
          <div class="modal-footer">
            <div class="btn-column">
              <button type="button" class="btn btn-primary cancel-btn" data-dismiss="modal">Cancelar</button>
              <form method="POST" action="{{ route('categories.destroy', $category->id) }}">
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
