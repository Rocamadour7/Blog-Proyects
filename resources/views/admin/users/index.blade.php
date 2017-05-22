@extends('dashboard')

@section('title', 'Usuarios')

@section('stylesheets')
  <link rel="stylesheet" href="/css/table.css">
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-nav-tabs">
        <div class="card-header" data-background-color="purple">
          <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
              <span class="nav-tabs-title"></span>
              <ul class="nav nav-tabs" data-tabs="tabs">
                <li class="active">
                  <a href="#users" data-toggle="tab">
										<i class="material-icons">account_circle</i>
										Usuarios
									<div class="ripple-container"></div></a>
                </li>
                <li>
                  <a href="#admins" data-toggle="tab">
										<i class="material-icons">build</i>
										Administradores
									<div class="ripple-container"></div></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card-content">
          <div class="tab-content">
            <div class="tab-pane active" id="users">
              <table class="table table-hover">
                <thead class="text-primary">
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Creado</th>
                  <th></th>
                </thead>
                <tbody>
                  @foreach ($users->all() as $user)
                    <tr>
                      <th>{{ $user->id }}</th>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->created_at->format('M j, Y h:i A') }}</td>
                      <td class="btn-column">
                        <form method="POST" action="{{ route('users.edit', $user->id) }}">
                          <button type="submit" rel="tooltip" title="Editar" class="btn btn-primary btn-simple btn-xs">
                            <i class="material-icons">edit</i>
                          </button>
                          {{ csrf_field() }}
                          {{ method_field('GET') }}
                        </form>
                        <button type="button" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs" data-toggle="modal" data-target="#deleteModal-{{ $user->id }}">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="row">
                <div class="col-md-9">
                  {!! $users->links() !!}
                </div>
                <div class="col-md-3 col-md-offset-9">
                  <a href="{{ route('users.create') }}" class="btn btn-block btn-success btn-simple"><i class="material-icons">add</i>Nuevo Usuario</a>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="admins">
              <table class="table table-hover">
                <thead class="text-primary">
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Creado</th>
                  <th></th>
                </thead>
                <tbody>
                  @foreach ($admins->all() as $admin)
                    <tr>
                      <th>{{ $admin->id }}</th>
                      <td>{{ $admin->name }}</td>
                      <td>{{ $admin->email }}</td>
                      <td>{{ $admin->created_at->format('M j, Y h:i A') }}</td>
                      <td class="btn-column">
                        <form method="POST" action="{{ route('admins.edit', $admin->id) }}">
                          <button type="submit" rel="tooltip" title="Editar" class="btn btn-primary btn-simple btn-xs">
                            <i class="material-icons">edit</i>
                          </button>
                          {{ csrf_field() }}
                          {{ method_field('GET') }}
                        </form>
                        <button type="button" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs" data-toggle="modal" data-target="#deleteModal-{{ $admin->id }}">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="row">
                <div class="col-md-9">
                  {!! $admins->links() !!}
                </div>
                <div class="col-md-3 col-md-offset-9">
                  <a href="{{ route('admins.create') }}" class="btn btn-block btn-success btn-simple"><i class="material-icons">add</i>Nuevo Administrador</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('modals')
  @foreach ($users as $user)
    <div class="modal fade" id="deleteModal-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="deleteTitle">Estás seguro?</h4>
          </div>
          <div class="modal-body">
            <p>Estás a punto de eliminar permanentemente al usuario <em><span>{{ $user->name }}</span></em>. Deseas continuar?</p>
          </div>
          <div class="modal-footer">
            <div class="btn-column">
              <button type="button" class="btn btn-white cancel-btn" data-dismiss="modal">Cancelar</button>
              <form method="POST" action="{{ route('users.destroy', $user->id) }}">
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

  @foreach ($admins as $admin)
    <div class="modal fade" id="deleteModal-{{ $admin->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="deleteTitle">Estás seguro?</h4>
          </div>
          <div class="modal-body">
            <p>Estás a punto de eliminar permanentemente al administrador <em><span>{{ $admin->name }}</span></em>. Deseas continuar?</p>
          </div>
          <div class="modal-footer">
            <div class="btn-column">
              <button type="button" class="btn btn-white cancel-btn" data-dismiss="modal">Cancelar</button>
              <form method="POST" action="{{ route('admins.destroy', $admin->id) }}">
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
