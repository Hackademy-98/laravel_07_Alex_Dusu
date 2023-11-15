<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}">Marketplace</a>
                </li>
                @auth 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">{{Auth::user()->name}}</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('chisiamo')}}">Chi Siamo</a></li>
                        <li><a class="dropdown-item" href="{{route('article.create')}}">Aggiungi Articoli</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{route('servizioclienti')}}">Servizio Clienti</a></li>
                    </ul>
                    @endauth

                </li>
            </ul>

            {{-- link register, login, logout --}}
            @guest
                
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 px-3">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Register</a>
                </li>
            </ul>
            @else
            <form action="{{route('logout')}}" method="post">
            @csrf
            <button class="btn btn-primary">Logout</button>
        </form>              
            
        @endguest            
            
            
        </div>
    </div>
</nav>
