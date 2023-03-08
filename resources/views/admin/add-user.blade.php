@extends('layouts.admin')
@section('content')

    <!--Stylesheets-->
    {{-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style.css"> --}}

</head>

<body>



    <!--Main Body Start-->
    <div class="main-body bg-light">
        <div class="wrapper p-3">
            <div class="breadcrumb-links">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item active"><a href="{{route('admin.users')}}">Users</a></li>
                    <li class="breadcrumb-item active">Add User</li>
                </ul>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-title">Add User</div>
                        <div class="card-content">
                            <form action="{{route('admin.postuser')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="fname" required placeholder="Text Here">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="lname" required placeholder="Text Here">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email Input</label>
                                            <input type="email" class="form-control" name="email" required placeholder="Email Here">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Password Input</label>
                                            <input type="password" class="form-control" name="password" required placeholder="Password Here">
                                        </div>
                                    </div>
                                    @php
                                        $branches=App\Models\Branches::get();
                                    @endphp
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Branch</label>
                                            <select class="form-control" name="branch">
                                                <option value="0" selected>Select Branch</option>
                                                @foreach ($branches as $branch )
                                                <option value="{{$branch->name}}">{{$branch->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Branch</label>
                                            <select class="form-control" name="role">
                                                <option value="0" selected>Select role</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Employe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="submit" class="form-control btn btn-primary" value="Submit">
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Main Body End-->

    <!--Javascripts-->

@endsection
