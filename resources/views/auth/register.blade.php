@extends('auth')

@section('title', '| Registro')

@section('content')
    <form class="form" role="form" method="POST" action="{{ route('register') }}" data-toggle="validator" role="form">
        {{ csrf_field() }}

        <div class="header header-primary text-center">
            <h4>Registro</h4>
            <div class="social-line">
                <a href="{{ route('oauth', 'facebook') }}" class="btn btn-simple btn-just-icon">
                    <i class="fa fa-facebook-square"></i>
                </a>
                <a href="{{ route('oauth', 'google') }}" class="btn btn-simple btn-just-icon">
                    <i class="fa fa-google-plus"></i>
                </a>
                <a href="{{ route('oauth', 'github') }}" class="btn btn-simple btn-just-icon">
                    <i class="fa fa-github"></i>
                </a>
            </div>
        </div>

        <p class="text-divider">O introduce tus datos</p>
        <div class="content">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">face</i>
                </span>
                <input type="text" class="form-control" placeholder="Nombre" name="name" required maxlength="255" autofocus>
            </div>
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
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">lock_outline</i>
                </span>
                <input type="password" class="form-control" placeholder="Confirmar Contraseña" name="password_confirmation" required data-minlength="6">
            </div>
        </div>
        <div class="footer text-center">
            <button type="submit" class="btn btn-simple btn-primary btn-lg">Crear Cuenta</a>
        </div>
    </form>
@endsection

@section('scripts')
    <script src="/js/validator.min.js"></script>
@endsection