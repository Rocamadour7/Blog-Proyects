<!DOCTYPE html>
<html lang="es">
<head>

  @include('partials._head')

</head>
<body>

  @include('partials._nav')

  @yield('jumbotron')

  <section class="container">

    @yield('content')

  </section>

  @include('partials._footer')

  @include('partials._scripts')
  @yield('scripts')
  
</body>
</html>
