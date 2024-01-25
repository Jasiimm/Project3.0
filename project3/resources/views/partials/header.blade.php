<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Stonks Pizza's</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto" style="margin-right: 60px;"> 
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i> Shopping Cart</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-user"></i> User Account
          </a>
          <ul class="dropdown-menu">
            @auth
              
              <li><a class="dropdown-item" href="#">Logout</a></li>
            @else
          
              <li><a class="dropdown-item" href="#">Registreer</a></li>
              <li><a class="dropdown-item" href="#">Login</a></li>
            @endauth
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
