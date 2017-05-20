@extends('main')

@section('title', '| Acerca de mi')

@section('stylesheets')
  <link rel="stylesheet" href="/css/about.css">
@endsection

@section('header')
  <div class="header header-filter"></div>
@endsection

@section('content')
  <div class="col-md-8 col-md-offset-2">
    <div class="main main-raised">
      <div class="profile-content">
        <div class="row">
          <div class="profile">
            <div class="avatar">
              <img src="/images/LuisMolina.jpg" alt="Luis Molina" class="img-circle img-responsive img-raised">
            </div>
            <div class="name">
              <h3 class="title">Luis Molina</h3>
              <h6>Estudiante de Sistemas - Desarrollador Web - Desarrollador Backend</h6>
            </div>
          </div>
          <div class="description text-center">
            <blockquote>
              <p>Everybody should know how to program a computer, because it teaches you how to think.</p>
              <footer>Steve Jobs</footer>
            </blockquote>
            <p>Creado en 2017 para desarrollar una comunidad de programadores, emprendedores y gente que busque conocer más. Aquí aprenderás cómo funcionan las aplicaciones de internet, qué tiene esa página que la hace sentir tan natural, cómo funcionan todo esto de los sistemas web a través de mis proyectos tanto de la escuela como personales. Siempre se puede aprender más de lo que espera. De hecho este blog es uno de esos proyectos.</p>
            <p>Soy un estudiante de la Universidad Autónoma de Ciudad Juárez, estudio Sistemas Computacionales y soy un desarrollador web en crecimiento. Tengo 24 años de edad. Mi meta en la vida es crear un cambio positivo en el mundo, creo que las tecnologías web pueden ayudarme a alcanzarlo, así que estás en presencia de   mis primeros pasos.</p>
            <p>Te invito a que te unas y comentes alguna publicación que te haya gustado, haz preguntas y yo te ayudaré.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
