<nav class="navbar navbar-expand-md navbar-laravel navbar-dark bg-dark" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Lavarel') }}
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        
        <li class="{{Request::is('/') ? 'active':'' }}"> <a class="nav-link" href="/">Home</a></li>
        <li class="{{Request::is('about') ? 'active':'' }}"> <a class="nav-link" href="/about">About</a></li>
        <li class="{{Request::is('todo') ? 'active':'' }}"> <a class="nav-link" href="/todo">TodoDash</a></li>
        <li class="{{Request::is('contact') ? 'active':'' }}"> <a class="nav-link" href="/contact">Contact</a></li>
        @guest
                        <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
          @endguest
      </ul>
    </div>
  </div>
</nav>