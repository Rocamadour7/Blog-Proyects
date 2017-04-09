<div class="sidebar" data-color="purple">

<!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

      Tip 2: you can also add an image using data-image tag
  -->

  <div class="logo">
    <a href="/" class="simple-text" target="_blank">
      Luis Molina
    </a>
  </div>

  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="{{ Request::is('admin') ? "active" : "" }}">
        <a href="{{ route('admin.dashboard') }}">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="{{ Request::is('admin/users') ? "active" : "" }}">
        <a href="{{ route('users.index') }}">
          <i class="material-icons">account_circle</i>
          <p>Usuarios</p>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="material-icons">description</i>
          <p>Posts</p>
        </a>
      </li class="">
      <li>
        <a href="#">
          <i class="material-icons">local_offer</i>
          <p>Categorías</p>
        </a>
      </li>
    </ul>
  </div>
</div>
