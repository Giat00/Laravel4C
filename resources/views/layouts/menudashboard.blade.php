<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
    <li class="nav-item">
      <a href="{{ route('index') }}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
        {{ __('Mahasiswa') }}
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('makul') }}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
        {{ __('Matakuliah') }}
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('nilai') }}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
        {{ __('Nilai') }}
        </p>
      </a>
    </li>
    <li class="nav-item has-treeview">
      <a href="{{ route('logout') }}" class="nav-link">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>
        {{ __('Logout') }}
        </p>
      </a>
      <ul class="nav nav-treeview">
        
        <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
      </ul>
    </li>
  </ul>
</nav>