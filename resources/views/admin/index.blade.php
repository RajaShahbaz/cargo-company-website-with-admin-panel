@extends('layouts.admin')
@section('content')
@php
    $earning = App\Models\CargoInventory::sum('total_amout');
    $shipments=App\Models\CargoInventory::count();
    $users=App\Models\User::count();
@endphp
    <!--Main Body Start-->
    <div class="main-body bg-light">
        <div class="wrapper p-3">
            <div class="breadcrumb-links">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
            <div class="icon-boxes">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <!--Icon Box Start-->
                        <div class="icon-box bg-white">
                            <div class="icon">
                                <i class="fas fa-tachometer-alt"></i>
                                <span class="float-right">Workers</span>
                            </div>
                            <div class="icon-title">
                                <h4>Users</h4>
                                <h4 class="float-right">{{$users}}</h4>
                            </div>
                        </div>
                        <!--Icon Box End-->
                    </div>
                    {{-- <div class="col-xl-3 col-lg-4 col-md-6">
                        <!--Icon Box Start-->
                        <div class="icon-box bg-white">
                            <div class="icon">
                                <i class="fas fa-tachometer-alt"></i>
                                <span class="float-right">Shippments</span>
                            </div>
                            <div class="icon-title">
                                <h4>Shippments Completed</h4>
                                <h4 class="float-right">500</h4>
                            </div>
                        </div>
                        <!--Icon Box End-->
                    </div> --}}
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <!--Icon Box Start-->
                        <div class="icon-box bg-white">
                            <div class="icon">
                                <i class="fas fa-tachometer-alt"></i>
                                <span class="float-right">Shippments</span>
                            </div>
                            <div class="icon-title">
                                <h4>Total Shippments</h4>
                                <h4 class="float-right">{{$shipments}}</h4>
                            </div>
                        </div>
                        <!--Icon Box End-->
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <!--Icon Box Start-->
                        <div class="icon-box bg-white">
                            <div class="icon">
                                <i class="fas fa-tachometer-alt"></i>
                                <span class="float-right">Earning</span>
                            </div>
                            <div class="icon-title">
                                <h4>Revenue</h4>
                                <h4 class="float-right">${{$earning}}</h4>
                            </div>
                        </div>
                        <!--Icon Box End-->
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-lg-6">
                    <div class="card card-primary">
                        <div class="card-title">Our Statistics</div>
                        <div id="chart"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-primary">
                        <div class="card-title">Top Users</div>
                        <div class="card-content">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Image</th>
                                        <th>User Name</th>
                                        <th>Earning</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>01</th>
                                        <td><img class="width-40 round-img" src="images/users/1.jpg" alt="Image"></td>
                                        <td>Md Dalwar</td>
                                        <td>$30,000</td>
                                        <td><span class="badge badge-success">Success</span></td>
                                    </tr>
                                    <tr>
                                        <th>02</th>
                                        <td><img class="width-40 round-img" src="images/users/2.jpg" alt="Image"></td>
                                        <td>Md Dalwar</td>
                                        <td>$70,000</td>
                                        <td><span class="badge badge-warning">Warning</span></td>
                                    </tr>
                                    <tr>
                                        <th>03</th>
                                        <td><img class="width-40 round-img" src="images/users/3.jpg" alt="Image"></td>
                                        <td>Md Dalwar</td>
                                        <td>$80,000</td>
                                        <td><span class="badge badge-danger">Danger</span></td>
                                    </tr>
                                    <tr>
                                        <th>04</th>
                                        <td><img class="width-40 round-img" src="images/users/1.jpg" alt="Image"></td>
                                        <td>Md Dalwar</td>
                                        <td>$20,000</td>
                                        <td><span class="badge badge-primary">Primary</span></td>
                                    </tr>
                                    <tr>
                                        <th>05</th>
                                        <td><img class="width-40 round-img" src="images/users/2.jpg" alt="Image"></td>
                                        <td>Md Dalwar</td>
                                        <td>$10,000</td>
                                        <td><span class="badge badge-secondary">Secondary</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
