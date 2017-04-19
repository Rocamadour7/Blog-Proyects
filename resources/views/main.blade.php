<!DOCTYPE html>
<html lang="es">
<head>

  @include('partials._head')

</head>
<body>

  @include('partials._nav')

  @include('partials._alerts')

  <div class="wrapper">
    <div class="header">

      @include('partials._header')

    </div>
    <div class="main">
      <div class="container">

        @yield('content')

      </div>
    </div>

    @include('partials._footer')

  </div>

  @include('partials._scripts')

</body>
</html>
