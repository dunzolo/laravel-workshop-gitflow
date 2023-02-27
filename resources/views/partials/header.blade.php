<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="col-12">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-center">
                    <li class="nav-item">
                      <a class="nav-link {{ Route::currentRouteName() == 'homepage' ? 'active' : ''}}" aria-current="page" href="{{ route('homepage')}}" >Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link {{ Route::currentRouteName() == 'comics.index' ? 'active' : ''}}" href="{{ route('movies.index')}}">Movies</a>
                    </li>
                  </ul>
            </div>
          </div>
        </div>
      </nav>
</header>