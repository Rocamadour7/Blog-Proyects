@extends('dashboard')

@section('title', 'Usuarios')

@section('stylesheets')
  <link rel="stylesheet" href="/css/users.css">
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
                <thead>
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
                          <button type="submit" rel="tooltip" title="Editar Usuario" class="btn btn-primary btn-simple btn-xs">
                            <i class="material-icons">edit</i>
                          </button>
                          {{ csrf_field() }}
                          {{ method_field('GET') }}
                        </form>
												<form method="POST" action="{{ route('users.destroy', $user->id) }}">
												  <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                            <i class="material-icons">close</i>
                          </button>
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
												</form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="row">
                <div class="col-md-3 col-md-offset-9">
                  <a href="{{ route('users.create') }}" class="btn btn-block btn-success btn-simple"><i class="material-icons">add</i>Nuevo Usuario</a>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="admins">
              <table class="table table-hover">
                <thead>
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
                          <button type="submit" rel="tooltip" title="Editar Usuario" class="btn btn-primary btn-simple btn-xs">
                            <i class="material-icons">edit</i>
                          </button>
                          {{ csrf_field() }}
                          {{ method_field('GET') }}
                        </form>
												<form method="POST" action="{{ route('admins.destroy', $admin->id) }}">
												  <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                            <i class="material-icons">close</i>
                          </button>
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
												</form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="row">
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
