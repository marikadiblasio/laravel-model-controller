<header>
    <nav class="navbar navbar-expand-lg my-bg-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}">
            <img class="rem-3" src="{{ Vite::asset('resources/img/square-logo.svg') }}" alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('movies.index')}}">All Our Movies</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
