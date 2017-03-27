@extends('main')

@section('title', '| Acerca de mi')

@section('stylesheets')
  <link rel="stylesheet" href="/css/about.css">
@endsection

@section('jumbotron')
  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="img-container">
          <img class="img-responsive img-circle" src="/images/LuisMolina.jpg" alt="LuisMolina">
        </div>
      </div>
      <h1 class="text-center">Soy Luis Molina</h1>
      <hr>
      <p class="text-center">Estudiante de Sistemas - Desarrollador Web - Desarrollador Backend</p>
    </div>
  </div>
@endsection

@section('content')
  <div class="col-md-8 col-md-offset-2">
    <blockquote class="blockquote-reverse">
      <p>Everybody should know how to program a computer, because it teaches you how to think.</p>
      <footer>Steve Jobs</footer>
    </blockquote>
    <p>Creado en 2017 para desarrollar una comunidad de programadores, emprendedores y gente que busque conocer más. Aquí aprenderás cómo funcionan las aplicaciones de internet, qué tiene esa página que la hace sentir tan natural, cómo funcionan todo esto de los sistemas web a través de mis proyectos tanto de la escuela como personales. Siempre se puede aprender más de lo que espera. De hecho este blog es uno de esos proyectos.</p>
    <p>Soy un estudiante de la Universidad Autónoma de Ciudad Juárez, estudio Sistemas Computacionales y soy un desarrollador web en crecimiento. Tengo 24 años de edad. Mi meta en la vida es crear un cambio positivo en el mundo, creo que las tecnologías web pueden ayudarme a alcanzarlo, así que estás en presencia de   mis primeros pasos.</p>
    <p>Te invito a que te unas y comentes alguna publicación que te haya gustado, haz preguntas y yo te ayudaré.</p>
  </div>
@endsection
