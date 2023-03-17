<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('welcome')}}">
            <img src="{{asset('images/logo.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mentor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Business</a>
                </li>
            </ul>

            @auth
                <div class="d-flex user-logged">
                    <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Halo, {{Auth::user()->name}}!
                        <img src="{{Auth::user()->avatar}}" class="user-photo" style="border-radius:50%" alt="">
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right:auto; left:auto">
                            <li>
                                <a href="" class="dropdown-item">My Dashboard</a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                                <form action="{{route('logout')}}" id="logout-form" method="POST" style="display:none">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}" class="">
                                </form>
                            </li>
                        </ul>
                    </a>
                </div>
            @else
                <div class="d-flex">
                    <a href="{{route('login')}}" class="btn btn-master btn-secondary me-3">
                        Sign In
                    </a>
                    <a href="#" class="btn btn-master btn-primary">
                        Sign Up
                    </a>
                </div>
            @endauth
            
        </div>
    </div>
</nav>