@extends('main')

@section('stylesheets')
  <link rel="stylesheet" href="/css/home.css">
@endsection

@section('jumbotron')
  <section class="jumbotron">
    <div class="container">
      <h1>Blog de Luis Molina</h1>
      <p>En este sitio encontrarás todos los proyectos que hago para aprender.</p>
      <p><a href="#" class="btn btn-primary btn-lg" role="button">Ver más...</a></p>
    </div>
  </section>
@endsection

@section('content')
  <div class="row">
    <section class="col-sm-8">
      <article class="post">
        <a href="#" class="img-container thumbnail pull-left">
          <img src="http://lorempixel.com/800/450/technics/1" alt="ImagePlaceholder">
        </a>
        <h2 class="post-title">
          <a href="#">Post Title</a>
        </h2>
        <p><span class="post-date">25 de marzo de 2017 por </span><a href="#">Luis Molina</a></p>
        <p class="post-content text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="button-container">
          <a href="#" class="btn btn-primary">Leer Más</a>
          <a href="#" class="btn btn-success">Comentarios <span class="bagde">20</span></a>
        </div>
      </article>
      <hr>
      <article class="post">
        <a href="#" class="img-container thumbnail pull-left">
          <img src="http://lorempixel.com/800/450/technics/2" alt="ImagePlaceholder">
        </a>
        <h2 class="post-title">
          <a href="#">Post Title</a>
        </h2>
        <p><span class="post-date">25 de marzo de 2017 por </span><a href="#">Luis Molina</a></p>
        <p class="post-content text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="button-container">
          <a href="#" class="btn btn-primary">Leer Más</a>
          <a href="#" class="btn btn-success">Comentarios <span class="bagde">20</span></a>
        </div>
      </article>
      <hr>
      <article class="post">
        <a href="#" class="img-container thumbnail pull-left">
          <img src="http://lorempixel.com/800/450/technics/3" alt="ImagePlaceholder">
        </a>
        <h2 class="post-title">
          <a href="#">Post Title</a>
        </h2>
        <p><span class="post-date">25 de marzo de 2017 por </span><a href="#">Luis Molina</a></p>
        <p class="post-content text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="button-container">
          <a href="#" class="btn btn-primary">Leer Más</a>
          <a href="#" class="btn btn-success">Comentarios <span class="bagde">20</span></a>
        </div>
      </article>
      <hr>
      <article class="post">
        <a href="#" class="img-container thumbnail pull-left">
          <img src="http://lorempixel.com/800/450/technics/4" alt="ImagePlaceholder">
        </a>
        <h2 class="post-title">
          <a href="#">Post Title</a>
        </h2>
        <p><span class="post-date">25 de marzo de 2017 por </span><a href="#">Luis Molina</a></p>
        <p class="post-content text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="button-container">
          <a href="#" class="btn btn-primary">Leer Más</a>
          <a href="#" class="btn btn-success">Comentarios <span class="badge">20</span></a>
        </div>
      </article>
      <hr>
    </section>
    <aside class="col-sm-3 col-sm-offset-1 hidden-xs">
      <h2>Sidebar</h2>
    </aside>
  </div>
@endsection
