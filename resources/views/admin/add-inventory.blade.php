@extends('layouts.admin')
@section('content')

    <!--Stylesheets-->
    {{-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style.css"> --}}

</head>

<body>
<style>

    .form-group>label{
        font-weight: bold;
    }
</style>


    <!--Main Body Start-->
    <div class="main-body bg-light" >
<input type="text" value="{{$requesttype}}" name="" hidden id="makedynamic">
        <div class="wrapper p-3">
            <div class="breadcrumb-links">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item active"><a href="{{route('admin.cargoinventory')}}">Inventory</a></li>
                    <li class="breadcrumb-item active">Add Inventory</li>
                </ul>
            </div>
            <div class="row" >


                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-title">Add Inventory</div>
                        <div class="card-content"style="position: relative">
                            @if ($requesttype=="search")
                            <span style="position: absolute;right: 20%;">@if(Session::has('message'))
                                <span id="flashmessage" class="alert alert-info">{{ Session::get('message') }}</span>
                                @endif</span>
                                @endif
                                @if ($requesttype=="create")
                                <form action="{{route('admin.searchinventory')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-2">

                                            <label>Import Previous Data</label>
                                        </div>
                                        {{-- <div class="col-sm-6"> --}}
                                            <div class="form-group">
                                                <input type="text" value="{{$inventory ? $inventory->consignment :''}}" class="form-control" name="consignment" style="width: 90%;" autocomplete="off" required placeholder="e.g TZ2108">
                                                </div>
                                                <input type="submit" class="form-control btn btn-primary" style="width: 10%" value="Search">
                                        {{-- </div> --}}
                                    </div>
                                </form>
                                @endif
                            <form action="{{route('admin.postinventory')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    @if ($requesttype=="create")
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Consignment Number</label>
                                            <input type="text" autocomplete="off" class="form-control" name="consignment" required placeholder="e.g TZ2108">
                                        </div>
                                    </div>
                                    @endif
                                    @if ($requesttype=="show")
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Consignment Number</label>
                                            <input type="text" autocomplete="off" value="{{$inventory ? $inventory->consignment :''}}" class="form-control" name="consignment" required placeholder="e.g TZ2108">
                                        </div>
                                    </div>
                                    @endif
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Shipper Name</label>
                                            <input type="text"autocomplete="off" value="{{$inventory ? $inventory->sh_name :''}}" class="form-control" name="sh_name" required placeholder="Shipper Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Reciever Name</label>
                                            <input type="text" class="form-control" autocomplete="off"value="{{$inventory ? $inventory->re_name :''}}" name="re_name" required placeholder="Reciever Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Shipper Address</label>
                                            <input type="text" class="form-control" autocomplete="off" value="{{$inventory ? $inventory->sh_address :''}}" name="sh_address" required placeholder="Shipper Address here">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Reciever Address</label>
                                            <input type="text" class="form-control" autocomplete="off" value="{{$inventory ? $inventory->re_address :''}}" name="re_address" required placeholder="Reciever Address Here">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Shipper Phone</label>
                                            <input type="number" class="form-control" autocomplete="off" value="{{$inventory ? $inventory->sh_phone :''}}" name="sh_phone" required placeholder="Shipper Phone Number ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Reciever Phone</label>
                                            <input type="number" class="form-control" autocomplete="off" value="{{$inventory ? $inventory->re_phone :''}}" name="re_phone" required placeholder="Reciever Phone Number">
                                        </div>
                                    </div>

                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Destination</label>
                                            <input type="text" class="form-control" autocomplete="off" value="{{$inventory ? $inventory->destination :''}}" name="destination" required placeholder="e.g: KHUIRATTA">
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>

                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Number of Pieces</label>
                                            <input type="number" class="form-control" autocomplete="off" value="{{$inventory ? $inventory->no_of_peices :''}}" name="no_of_peices" required placeholder="e.g: 10">
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>

                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Weight</label>
                                            <input type="number" class="form-control" autocomplete="off" value="{{$inventory ? $inventory->weight :''}}" name="weight" required placeholder="e.g: 25">
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>

                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Total Amount</label>
                                            <input type="number" class="form-control" autocomplete="off" value="{{$inventory ? $inventory->total_amout :''}}" name="total_amout" required placeholder="e.g: 10">
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Package Type</label>
                                            <input type="text" class="form-control" autocomplete="off" value="{{$inventory ? $inventory->package_type :''}}" name="package_type"  placeholder="e.g: Clothes (optional)">
                                        </div>
                                    </div>
                                    @if ($requesttype=="show")
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Branch Name</label>
                                            <input type="text" class="form-control" autocomplete="off" value="{{$inventory ? $inventory->branch_id :''}}" name="package_type"  placeholder="e.g: Clothes (optional)">
                                        </div>
                                    </div>
                                    @endif

                                    <div class="col-md-4"></div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Booking Date</label>
                                            <input type="datetime-local" class="form-control" autocomplete="off"value="{{$inventory ? $inventory->order_date :''}}" name="booking_date"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Expected Delivery Date </label>
                                            <input type="datetime-local" class="form-control" autocomplete="off" value="{{$inventory ? $inventory->expected_delivery_date :''}}" name="delivery_date" required>
                                        </div>
                                    </div>

                                    @if ($requesttype=="create")
                                    <div class="col-md-4"></div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="submit" class="form-control btn btn-primary" value="Submit">
                                        </div>
                                    </div>
                                    @endif
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script>
       var type= $('#makedynamic').val();
        if(type=="show"){
            $('input[type="text"],input[type="number"],input[type="datetime-local"]').each(function(){
       $(this).attr('readonly','readonly');
    });
        }
    </script>
    <script>
        setTimeout(function () {
            $("#flashmessage").fadeOut('fast');
        }, 2000);
        </script>
@endsection
