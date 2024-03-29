     <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{asset('assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Fields Corner</span>
      
    </a>
 
   <!-- Sidebar -->
   <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('assets/img/photos/admin.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="" class="d-block"><span>Welcome </span>{{ Auth::user()->name}}</a> 
      </div>
    </div>

    <!-- SidebarSearch Form -->
    {{-- <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          {{-- <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Home
              <i class="right fas fa-angle-left"></i>
            </p>
          </a> --}}
          <ul class="nav nav-treeview">
            {{-- <li class="nav-item">
              <a href="./index.html" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v1</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index2.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v2</p>
              </a>
            </li> --}}
            {{-- <li class="nav-item">
              <a href="./index3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Statistics</p>
              </a>
            </li>
          </ul>
        </li> --}}

        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <p>
              Tables
              {{-- <i class="fas fa-angle-left right"></i> --}}
            </p>
          </a>
        </li>

          {{-- <ul class="nav nav-treeview"> --}}
            <li class="nav-item">
              <a href="{{ url('users') }}" class="nav-link">
                {{-- <i class="far fa-circle nav-icon"></i> --}}
                <i class="nav-icon fas fa-copy"></i>
                <p>Users table</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('Appartments.index')}}" class="nav-link">
                {{-- <i class="far fa-circle nav-icon"></i> --}}
                <i class="nav-icon fas fa-tree"></i>
                <p>Apartments</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('Restaurants.index')}}" class="nav-link">
                {{-- <i class="far fa-circle nav-icon"></i> --}}
                <i class="nav-icon fas fa-tree"></i>
                <p>Restaurants</p>
              </a>
            </li> 
            <li class="nav-item">
              <a href="{{route('Contact.index')}}" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>Users Messages</p>
              </a>
            </li>

        {{-- <li class="nav-header">LABELS</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p class="text">Important</p>
          </a>
        </li> --}}
        <li class="">
          <a href="#" class="nav-link">
            <i></i>
            <a href=" {{route('logout')}}"> <button type="button" class="btn btn-block btn-outline-danger btn-sm">Logout</button></a>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
