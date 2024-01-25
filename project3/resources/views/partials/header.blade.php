<nav class="navbar navbar-expand-lg bg-danger">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">Stonks Pizza's</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('index') }}">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto" style="margin-right: 60px;">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('cart.show') }}"><i
                            class="fa-solid fa-cart-shopping"></i> Winkelmandje</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-user"></i> Account Management
                    </a>
                    <ul class="dropdown-menu">
                        @auth
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                        @else
                        <li><a class="dropdown-item" href="{{ route('register') }}">Registreer</a></li>
                        <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                        @endauth
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
