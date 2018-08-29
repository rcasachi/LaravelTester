<nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
  <div class="navbar-brand container">
    <a href="{{ route('home') }}" class="navbar-item">
      <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </a>
    <div class="navbar-start">
      <a href="" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
      <a href="" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
      <a href="" class="navbar-item is-tab is-hidden-mobile">Share</a>
    </div>
    <div class="navbar-end" style="overflow: visible">
      @if(Auth::guest())
        <a href="{{ route('login') }}" class="navbar-item is-tab">Login</a>
        <a href="{{ route('register') }}" class="navbar-item is-tab">Join us</a>
      @else
        <button class="dropdown navbar-item is-tab is-aligned-right">
          Hey {{ Auth::user()->name }} <span class="icon"><i class="fa fa-caret-down"></i></span>

          <ul class="dropdown-menu">
            <li><a href=""><span class="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o"></i></span>Profile</a></li>
            <li><a href=""><span class="icon"><i class="fa fa-fw m-r-10 fa-bell"></i></span>Notifications</a></li>
            <li><a href=""><span class="icon"><i class="fa fa-fw m-r-10 fa-cog"></i></span>Settings</a></li>
            <li class="separator"></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <span class="icon"><i class="fa fa-fw m-r-10 fa-sign-out"></i></span>Logout
            </a> @include('_includes.forms.logout')</li>
          </ul>
        </button>
      @endif
    </div>
  </div>
</nav>
