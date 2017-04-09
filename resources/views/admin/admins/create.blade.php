@extends('dashboard')

@section('title', 'Usuarios')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="title">Crear Administrador</h4>
          <p class="category">Llena todos los espacios</p>
        </div>
        <div class="card-content">
          <form action="{{ route('register') }}" method="POST" data-toggle="validator" role="form">
            <div class="form-group label-floating is-empty">
              <label for="name" class="control-label">Nombre</label>
              <input type="text" name="name" class="form-control" required maxlength="255">
            </div>
            <div class="form-group label-floating is-empty">
              <label for="email" class="control-label">Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group label-floating is-empty">
              <label for="password" class="control-label">Contraseña</label>
              <input type="password" name="password" id="password" class="form-control" data-minlength="6" required>
            </div>
            <div class="form-group label-floating is-empty">
              <label for="password_confirmation" class="control-label">Confirmar Contraseña</label>
              <input type="password" name="password_confirmation" class="form-control" data-match="#password" data-match-error="Contraseñas no coinciden" required>
              <div class="help-block with-errors"></div>
            </div>
            <div class="col-md-6">
              <a href="{{ route('users.index') }}" class="btn btn-danger btn-lg btn-block btn-simple">Cancel</a>
            </div>
            <div class="col-md-6">
              <input type="submit" value="Crear Usuario" class="btn btn-success btn-lg btn-block btn-simple">
            </div>
            {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="/js/validator.min.js"></script>
@endsection
