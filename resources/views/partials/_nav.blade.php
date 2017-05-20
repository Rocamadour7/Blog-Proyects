<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false">
        <span class="sr-only">Menú</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand" style="font-weight: 500;">BlogMolina.mx</a>
    </div>

    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="nav navbar-nav">
        <li><a href="/">Inicio</a></li>
        <li><a href="/AcercaDeMi">Acerca de mi</a></li>
        <li><a href="/Contacto">Contacto</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @if (Auth::guest())
              <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
              <li><a href="{{ route('register') }}">Registrar</a></li>
          @else
              <li class="dropdown user-nav">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      <img src="{{ Auth::user()->avatar }}">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endif
      </ul>
    </div>
  </div>
</nav>
