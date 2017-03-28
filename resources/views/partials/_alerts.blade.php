@if (Session::has('success'))
  <div class="alert alert-success">
    <p><strong>Éxito!</strong> {{ Session::get('success') }}</p>
  </div>
@endif

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <p><strong>Error(es):</strong></p>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
