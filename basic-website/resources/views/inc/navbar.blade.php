<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Acme</a>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/" tabindex="1">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('messages') ? 'active' : '' }}" href="/messages" tabindex="2">Messages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about" tabindex="3">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="contact" tabindex="4">Contact</a>
      </li>
    </ul>
  </div>
</nav>