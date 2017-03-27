@extends('main')

@section('title', '| Contacto')

@section('stylesheets')
  <link rel="stylesheet" href="/css/contact.css">
@endsection

@section('content')
  <div class="col-md-8 col-md-offset-2 form-container">
    <h2>Contáctame</h2>
    <hr>
    <form>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="subject">Asunto:</label>
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto">
      </div>
      <div class="form-group">
        <label for="message">Mensaje:</label>
        <textarea class="form-control" name="message" id="message" placeholder="Escribe tu mensaje aquí..." rows="6"></textarea>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Enviar</button>
    </form>
  </div>
@endsection
