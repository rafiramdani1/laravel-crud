  <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand" href="/">BLOGDOR</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link @if($activeNav === 'home') active @endif" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if($activeNav === 'about') active @endif" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if($activeNav === 'posts') active @endif" href="/posts">Blog</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link @if($activeNav === 'categories ') active @endif" href="/categories">Categories</a>
          </li> 
        </ul>

        <ul class="navbar-nav ms-auto">
            @auth
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                    <li><a class="dropdown-item" href="/profile">My Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                      </form>
                    </li>
                  </ul>
              </li>
            @else
              <li class="nav-item">
                <a href="/login" class="nav-link @if($activeNav === 'login') active @endif">Login</a>
              </li>
            @endauth
        </ul>

      </div>
    </div>
  </nav>