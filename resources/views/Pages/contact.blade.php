@extends('main')

@section('title', '| Contacto')

@section('stylesheets')
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/contact.css">
@endsection

@section('header')
  <section class="jumbotron">
    <div class="container">
      <h1></h1>
      <p></p>
    </div>
  </section>
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card card-raised">
          <div class="header header-primary text-center">
            <h4>Contáctame</h4>
          </div>
          <div class="content">
            <form method="POST" action="{{ url('Contacto') }}" data-toggle="validator" role="form">
              <div class="form-group label-floating is-empty">
                <label for="name" class="control-label">Nombre:</label>
                <input type="text" class="form-control" name="name" id="name" maxlength="120" required>
              </div>
              <div class="form-group label-floating is-empty">
                <label for="email" class="control-label">Email:</label>
                <input type="email" class="form-control" name="email" id="email" data-error="Email Inválido" required>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group label-floating is-empty">
                <label for="subject" class="control-label">Asunto:</label>
                <input type="text" class="form-control" name="subject" id="subject" maxlength="120" required>
              </div>
              <div class="form-group label-floating is-empty">
                <label for="message" class="control-label">Mensaje:</label>
                <textarea class="form-control" name="message" id="message" rows="4" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-block btn-simple">Enviar</button>
              {{ csrf_field() }}
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="/js/validator.min.js"></script>
@endsection
