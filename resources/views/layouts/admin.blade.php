<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin-Dashboad</title>

        <!--Stylesheets-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
        <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">

    </head>
    <body>
   <!--Logo Area Start-->
   <div class="logo-area">
    <div class="logo bg-primary text-white">
        <a href="{{route('index')}}"><img src="{{asset('assets/images/logo.png')}}" style="width:90%" alt=""></a>
    </div>
    <div class="menu-icon bg-primary text-white">
        <i class="fas fa-bars"></i>
    </div>
</div>
<!--Logo Area End-->

<!--Sidebar Start-->
<div class="sidebar bg-dark">
    <ul>
        <li class="nav-title text-white">Navigation</li>
        <li><a href="{{route('admin.dashboard')}}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        @php
                  $user = Auth::user();
        @endphp
        @if ($user->role_id==1)
        <li class="has-child"><a href="{{route('admin.users')}}"><i class="fas fa-users"></i> Users</a>
            <ul class="children">
                <li><a href="{{route('admin.users')}}">All Users</a></li>
                <li><a href="{{route('admin.add-user')}}">Add User</a></li>
            </ul>
        </li>
        @endif
        <li><a href="{{route('admin.contacts')}}"><i class="fab fa-wpforms"></i> Contacts</a></li>
        <li class="has-child"><a href="{{route('admin.cargoinventory')}}"><i class="fab fa-buffer"></i> Cargo-Inventory</a>
        <ul class="children">
            <li><a href="{{route('admin.cargoinventory')}}">All Bookings</a></li>
            <li><a href="{{route('admin.addinventory')}}">Add Inventory</a></li>
        </ul></li>
        {{-- <li><a href="media.html"><i class="fas fa-images"></i> Media</a></li> --}}
         {{-- <li class="has-child"><a href="#"><i class="fas fa-thumbtack"></i> Posts</a>
            <ul class="children">
                <li><a href="posts.html">All Posts</a></li>
                <li><a href="add-post.html">Add New</a></li>
                <li><a href="categories.html">Categories</a></li>
                <li><a href="tags.html">Tags</a></li>
            </ul>
        </li> --}}
       {{-- <li class="has-child"><a href="#"><i class="fab fa-buffer"></i> UI Elements</a>
            <ul class="children">
                <li><a href="button.html">Button</a></li>
                <li><a href="alert.html">Alert</a></li>
                <li><a href="card.html">Card</a></li>
                <li><a href="breadcrumb.html">Breadcrumb</a></li>
                <li><a href="pagination.html">Pagination</a></li>
            </ul>
        </li>
        <li class="has-child"><a href="#"><i class="fas fa-table"></i> Tables</a>
            <ul class="children">
                <li><a href="basic-table.html">Basic Table</a></li>
                <li><a href="datatable.html">Data Table</a></li>
            </ul>
        </li> --}}
        {{-- <li class="has-child"><a href="#"><i class="fab fa-wpforms"></i> Form Elements</a>
            <ul class="children">
                <li><a href="basic-form.html">Basic</a></li>
                <li><a href="advanced-form.html">Advanced</a></li>
            </ul>
        </li>
        <li class="has-child"><a href="#"><i class="fas fa-user-lock"></i></i> Authentication</a>
            <ul class="children">
                <li><a href="login.html">Login</a></li>
                <li><a href="signup.html">Sign Up</a></li>
                <li><a href="resetpass.html">Reset Password</a></li>
            </ul>
        </li> --}}
    </ul>
</div>
<!--Sidebar End-->

<!--Header Start-->
<div class="topbar bg-primary">
    <div class="dropdown profile-dropdown">
        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{asset('admin/images/admin.jpg')}}" class="width-40 round-img" alt="Image">
        </a>
        <div class="dropdown-menu">
            <ul>
                {{-- <li><a class="dropdown-item" href="#">My Account</a></li> --}}
                {{-- <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Products</a></li>
                <li><a class="dropdown-item" href="#">Downloads</a></li>
                <li><a class="dropdown-item" href="#">My Cart</a></li> --}}
                <li><a class="dropdown-item" href="{{route('admin.logout')}}">Logout</a></li>
            </ul>
        </div>
    </div>
</div>
<!--Header End-->
            @yield('content')



    <!--Javascripts-->
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/chart/d3.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/chart/chart.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/chart/initiate.js')}}"></script>
    <script src="{{asset('admin/js/custom.js')}}"></script>



    </body>
</html>
