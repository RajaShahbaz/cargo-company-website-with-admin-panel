@extends('layouts.admin')
@section('content')


    <!--Stylesheets-->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/plugins/datatable/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/plugins/datatable/bootstrap-table.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">


    <!--Header End-->

    <!--Main Body Start-->
    <div class="main-body bg-light">
        <div class="wrapper p-3">
            <div class="breadcrumb-links">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item active">Contacts</li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-title">Contacts List</div>
                        <div class="card-content">
                            {{-- <p class="para mb-20">You can be use those table for your desired dynamic content. It will
                                be help you to show multiple data.</p> --}}
                            <table id="datatable1" class="display responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach ($contacts as $contact )
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->phone}}</td>
                                        <td>{{$contact->subject}}</td>
                                        <td>{{$contact->Message}}</td>
                                        {{-- <td><span class="badge badge-danger">Rejected</span></td> --}}
                                        <td>
                                            {{-- <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a> --}}
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @php
                                        $i++
                                    @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-title">Table without Search</div>
                        <div class="card-content">
                            <p class="para mb-20">You can be use those table for your desired dynamic content. It will
                                be help you to show multiple data.</p>
                            <table id="datatable2" class="display responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Earning</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Md Dalwar</td>
                                        <td>Hossan</td>
                                        <td>dalwar@domain.com</td>
                                        <td>$20,201</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Md Mojibur</td>
                                        <td>Rahman</td>
                                        <td>mojib@domain.com</td>
                                        <td>$21,000</td>
                                        <td><span class="badge badge-danger">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Md Habib</td>
                                        <td>Ullah</td>
                                        <td>habib@domain.com</td>
                                        <td>$23,000</td>
                                        <td><span class="badge badge-danger">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>Md Mostak</td>
                                        <td>Ahmed</td>
                                        <td>mostak@domain.com</td>
                                        <td>$22,000</td>
                                        <td><span class="badge badge-success">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>Md Nazmol</td>
                                        <td>Hossain</td>
                                        <td>nazmol@domain.com</td>
                                        <td>$24,000</td>
                                        <td><span class="badge badge-danger">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>Md Abdul</td>
                                        <td>Ali</td>
                                        <td>mdali@domain.com</td>
                                        <td>$25,000</td>
                                        <td><span class="badge badge-success">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>Surajit</td>
                                        <td>Biswas</td>
                                        <td>surajit@domain.com</td>
                                        <td>$26,000</td>
                                        <td><span class="badge badge-danger">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>Jone</td>
                                        <td>Chowdhury</td>
                                        <td>chowdhury@domain.com</td>
                                        <td>$27,000</td>
                                        <td><span class="badge badge-success">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>09</td>
                                        <td>Mir Mosharaf</td>
                                        <td>Hossain</td>
                                        <td>mosharaf@domain.com</td>
                                        <td>$28,000</td>
                                        <td><span class="badge badge-danger">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Md Mokbol</td>
                                        <td>Hossain</td>
                                        <td>mokbol@domain.com</td>
                                        <td>$29,000</td>
                                        <td><span class="badge badge-success">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Md Habib</td>
                                        <td>Ullah</td>
                                        <td>habib@domain.com</td>
                                        <td>$23,000</td>
                                        <td><span class="badge badge-danger">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Md Mostak</td>
                                        <td>Ahmed</td>
                                        <td>mostak@domain.com</td>
                                        <td>$22,000</td>
                                        <td><span class="badge badge-success">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Md Nazmol</td>
                                        <td>Hossain</td>
                                        <td>nazmol@domain.com</td>
                                        <td>$24,000</td>
                                        <td><span class="badge badge-danger">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Md Abdul</td>
                                        <td>Ali</td>
                                        <td>mdali@domain.com</td>
                                        <td>$25,000</td>
                                        <td><span class="badge badge-success">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Surajit</td>
                                        <td>Biswas</td>
                                        <td>surajit@domain.com</td>
                                        <td>$26,000</td>
                                        <td><span class="badge badge-danger">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Jone</td>
                                        <td>Chowdhury</td>
                                        <td>chowdhury@domain.com</td>
                                        <td>$27,000</td>
                                        <td><span class="badge badge-success">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Md Mojibur</td>
                                        <td>Rahman</td>
                                        <td>mojib@domain.com</td>
                                        <td>$21,000</td>
                                        <td><span class="badge badge-danger">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Md Habib</td>
                                        <td>Ullah</td>
                                        <td>habib@domain.com</td>
                                        <td>$23,000</td>
                                        <td><span class="badge badge-danger">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Md Mostak</td>
                                        <td>Ahmed</td>
                                        <td>mostak@domain.com</td>
                                        <td>$22,000</td>
                                        <td><span class="badge badge-success">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Md Nazmol</td>
                                        <td>Hossain</td>
                                        <td>nazmol@domain.com</td>
                                        <td>$24,000</td>
                                        <td><span class="badge badge-danger">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Md Abdul</td>
                                        <td>Ali</td>
                                        <td>mdali@domain.com</td>
                                        <td>$25,000</td>
                                        <td><span class="badge badge-success">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>Surajit</td>
                                        <td>Biswas</td>
                                        <td>surajit@domain.com</td>
                                        <td>$26,000</td>
                                        <td><span class="badge badge-danger">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>Jone</td>
                                        <td>Chowdhury</td>
                                        <td>chowdhury@domain.com</td>
                                        <td>$27,000</td>
                                        <td><span class="badge badge-success">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Mir Mosharaf</td>
                                        <td>Hossain</td>
                                        <td>mosharaf@domain.com</td>
                                        <td>$28,000</td>
                                        <td><span class="badge badge-danger">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Md Mokbol</td>
                                        <td>Hossain</td>
                                        <td>mokbol@domain.com</td>
                                        <td>$29,000</td>
                                        <td><span class="badge badge-success">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>Md Habib</td>
                                        <td>Ullah</td>
                                        <td>habib@domain.com</td>
                                        <td>$23,000</td>
                                        <td><span class="badge badge-danger">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>Md Mostak</td>
                                        <td>Ahmed</td>
                                        <td>mostak@domain.com</td>
                                        <td>$22,000</td>
                                        <td><span class="badge badge-success">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>Md Nazmol</td>
                                        <td>Hossain</td>
                                        <td>nazmol@domain.com</td>
                                        <td>$24,000</td>
                                        <td><span class="badge badge-danger">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>Md Karim</td>
                                        <td>Hossain</td>
                                        <td>karim@domain.com</td>
                                        <td>$23,000</td>
                                        <td><span class="badge badge-danger">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>Md Alamin</td>
                                        <td>Hossain</td>
                                        <td>alamin@domain.com</td>
                                        <td>$29,000</td>
                                        <td><span class="badge badge-danger">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-secondary"><i class="far fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!--Main Body End-->

    <!--Javascripts-->
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/datatable/initiate.js')}}"></script>
@endsection
