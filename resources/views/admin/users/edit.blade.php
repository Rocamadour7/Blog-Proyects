@extends('dashboard')

@section('title', 'Usuarios')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="title">Editar Usuario</h4>
          <p class="category">Actualiza los datos</p>
        </div>
        <div class="card-content">
          <form action="{{ route('users.update', $user->id) }}" method="POST" data-toggle="validator" role="form">
            <div class="form-group label-floating">
              <label for="name" class="control-label">Nombre</label>
              <input type="text" name="name" class="form-control" required maxlength="255" value="{{ $user->name }}" autofocus>
            </div>
            <div class="form-group label-floating">
              <label for="email" class="control-label">Email</label>
              <input type="email" name="email" class="form-control" required value="{{ $user->email }}">
            </div>
            <div class="col-md-6">
              <a href="{{ route('users.index') }}" class="btn btn-danger btn-lg btn-block btn-simple">Cancel</a>
            </div>
            <div class="col-md-6">
              <input type="submit" value="Guardar Cambios" class="btn btn-success btn-lg btn-block btn-simple">
            </div>
            {{ csrf_field() }}
            {{ method_field('PUT') }}
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="/js/validator.min.js"></script>
@endsection
