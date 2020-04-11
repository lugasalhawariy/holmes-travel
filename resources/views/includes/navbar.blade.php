<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="images/LOGO.png" width="100px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-3">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link" href="#">Paket Travel</a>
            </li>
            <li class="nav-item dropdown px-3">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Service
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Transaction</a>
                <a class="dropdown-item" href="#">History</a>
              </div>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link" href="#">Testimonials</a>
            </li>
          </ul>

          @auth
              <!-- mobile Button -->
          <form class="form-inline d-sm-block d-md-none">
            <button class="btn btn-login my-2 my-sm-0" action="{{ url('logout') }}" method="post">
                Keluar
            </button>
        </form>

        <!-- Desktop Button -->
        <form class="form-inline d-none d-md-block my-2 my-lg-0" action="{{ url('logout') }}" method="post">
          @csrf
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                Keluar
            </button>
        </form>
          @endauth
        
          @guest
              <!-- mobile Button -->
          <form class="form-inline d-sm-block d-md-none">
            <button class="btn btn-login my-2 my-sm-0">
                Masuk
            </button>
        </form>

        <!-- Desktop Button -->
        <form class="form-inline d-none d-md-block my-2 my-lg-0">
            <a href="{{ url('login') }}" class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                Masuk
            </a>
        </form>
          @endguest
        </div>
    </div>
</nav>