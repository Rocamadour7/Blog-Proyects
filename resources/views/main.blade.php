<!DOCTYPE html>
<html lang="es">
<head>

  @include('partials._head')

</head>
<body>

  @include('partials._nav')

  @include('partials._alerts')

  @yield('jumbotron')

  <section class="container">

    @yield('content')

  </section>

<!--  @include('partials._footer') Trabajar en el footer para que entre en el Material Design -->

  @include('partials._scripts')
  @yield('scripts')

</body>
</html>
