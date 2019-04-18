<div class="container-fluid main-menubar">

        <nav class="navbar container-fluid navbar-expand-lg navbar-dark bg-transparent">
            <a class="logo mr-2 ml-2" href="/">
              <img width="150px" height="50px" src="/img/Ndebi Tech Logo.png" alt="logo"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> <i class="fa fa-bars" aria-hidden="true"></i> </span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blog">Blog</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact</a>
                  </li>
              </ul>
              <form class="form-inline my-1 my-lg-0"  action="{{ route('blog') }}">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" value="{{ request('term') }}" name="term">
                <button class="btn btn-outline-info my-1 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>

        </div>

      {{-- navigation bar --}}
        