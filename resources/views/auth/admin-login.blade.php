@extends('auth')

@section('title', '| Admin')

@section('content')
    <form class="form" role="form" method="POST" action="{{ route('admin.login.submit') }}" data-toggle="validator" role="form">
        {{ csrf_field() }}

        <div class="header header-primary text-center">
            <h4>Iniciar Sesión | ADMIN</h4>
        </div>
        <div class="content">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">email</i>
                </span>
                <input type="email" class="form-control" placeholder="Email" name="email" required maxlength="255">
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">lock_outline</i>
                </span>
                <input type="password" class="form-control" placeholder="Contraseña" name="password" required data-minlength="6">
            </div>
        </div>
        <div class="footer text-center">
            <button type="submit" class="btn btn-simple btn-primary btn-lg">Inicia Sesión</a>
        </div>
    </form>
@endsection

@section('scripts')
    <script src="/js/validator.min.js"></script>
@endsection