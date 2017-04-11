<!doctype html>
<html lang="es">
<head>

	@include('partialsadmin._head')

</head>
<body>

	<div class="wrapper">

		@include('partialsadmin._nav')

    <div class="main-panel">

			@include('partialsadmin._topnav')

      <div class="content">
        <div class="container-fluid">

					@yield('content')

        </div>
      </div>

			@include('partialsadmin._footer')

    </div>
	</div>

	@yield('modals')

	@include('partialsadmin._scripts')

</body>
</html>
