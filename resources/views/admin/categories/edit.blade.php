@extends('dashboard')

@section('title', 'Categorías')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header" data-background-color="purple">
          <h4 class="title">Modificar Categoría</h4>
          <p class="category">Llena todos los espacios</p>
        </div>
        <div class="card-content">
          <form action="{{ route('categories.store') }}" method="POST" data-toggle="validator" role="form">
            <div class="form-group label-floating">
              <label for="name" class="control-label">Nombre</label>
              <input type="text" name="name" class="form-control" required maxlength="255" value="{{ $category->name }}" autofocus>
            </div>
            <div class="col-md-6">
              <a href="{{ route('categories.index') }}" class="btn btn-danger btn-lg btn-block btn-simple">Cancel</a>
            </div>
            <div class="col-md-6">
              <input type="submit" value="Guardar Cambios" class="btn btn-success btn-lg btn-block btn-simple">
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
