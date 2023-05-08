<nav class="navFlex">
    <img class="Logo" src="../user/img/TravellersLogo.png">

        <ul class="theNavItems">
            <li><a class="active" href="{{route('home')}}">Home</a></li>
            <li><a class="active1" href="{{route('contact')}}">Contact us</a></li>
            <li><a class="active2" href="{{route('about')}}">About us</a></li>
        </ul>
        <!-- <div class="SearchBar">   
            <input class="searchInp" type="text" placeholder="Search...">
            <a href="#">
            <i class="fas fa-search"></i>
        </a>
        </div> -->
        
        
        @if(auth()->check())
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <li class="theNavItems"><a class="loginSty" href="{{route('user.logout')}}">Logout</a></li>
        </form>
    @else
        <li class="theNavItems"><a class="loginSty" href="{{route('user.login')}}">login / register</a></li>
    @endif

            <!-- <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <li><button class="dropdown-item" type="button">Action</button></li>
                  <li><button class="dropdown-item" type="button">Another action</button></li>
                  <li><button class="dropdown-item" type="button">Something else here</button></li>
                </ul>
              </div> -->
       
</nav>