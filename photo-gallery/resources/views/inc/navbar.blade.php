<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <!-- <a class="navbar-brand" href="/">Photo Gallery</a> -->

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/" tabindex="1">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('albums/create') ? 'active' : '' }}" href="{{ route('album-create') }}" tabindex="2">Create Photo Album</a>
      </li>
    </ul>
  </div>  
</nav>