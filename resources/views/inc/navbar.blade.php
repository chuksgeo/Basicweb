@section('navbar')

<nav class="navbar navbar-expand-md navbar-dark fixed-top scrolling-navbar pt-3" style="background-color: black">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
      <strong>
        {{ __('This Present Truth') }}
      </strong>
    </a>







    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse px-2" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link btn" href="/">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn" href="/about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn" href="/contact">Contact us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle btn" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mdi mdi-archive"></span>Archives
          </a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="/1">Service_1</a>
            <a class="dropdown-item" href="/2">Service_2</a>
            <a class="dropdown-item" href="/3">Service_3</a>
          </div>
        </li>
      </ul>
    </div>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">

      </ul>

      <!-- Right Side Of Navbar -->
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
                          <span class="mdi mdi-logout"></span>{{ __('Logout') }}
                      </a>

                      @can('manage-users')
                      <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                        <span class="mdi mdi-account-cog"></span>

                        {{ __('User Management') }}
                      </a>
                      <a class="dropdown-item" href="{{ route('admin.categories.index') }}">
                      Categories Management
                      </a>
                      <a class="dropdown-item" href="{{ route('admin.posts.index') }}">
                      Post Management
                      </a>
                      <a class="dropdown-item" href="{{ route('blog.index') }}">
                      Blog
                      </a>
                      @endcan

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
