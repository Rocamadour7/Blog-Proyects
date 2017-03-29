@if (Session::has('success'))
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  		<span aria-hidden="true"><i class="material-icons">clear</i></span>
    </button>
    <p><strong>Éxito!</strong> {{ Session::get('success') }}</p>
  </div>
@endif

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  		<span aria-hidden="true"><i class="material-icons">clear</i></span>
    </button>
    <p><strong>Error(es):</strong></p>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
