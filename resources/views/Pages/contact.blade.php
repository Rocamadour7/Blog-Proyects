@extends('main')

@section('title', '| Contacto')

@section('stylesheets')
  <link rel="stylesheet" href="/css/contact.css">
@endsection

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="form-container card">
        <div class="header header-primary text-center">
          <h4>Contáctame</h4>
        </div>
        <form>
          <div class="form-group label-floating">
            <label for="email" class="control-label">Email:</label>
            <input type="email" class="form-control" name="email" id="email">
          </div>
          <div class="form-group label-floating">
            <label for="subject" class="control-label">Asunto:</label>
            <input type="text" class="form-control" name="subject" id="subject">
          </div>
          <div class="form-group label-floating">
            <label for="message" class="control-label">Mensaje:</label>
            <textarea class="form-control" name="message" id="message" rows="4"></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-block btn-simple">Enviar</button>
        </form>
      </div>
    </div>
  </div>
@endsection
