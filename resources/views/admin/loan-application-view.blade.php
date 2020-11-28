@extends('admin.dashboard')
@section('content')
<section class="tables">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h5">{{ $userApplication->name }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <img src="{{asset('storage/file'). '/' . $userApplication->file }}" alt="..." class="img-fluid rounded-circle" width="150px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 m-auto">
                <div class="card">
                    <div class="card-close">
                        <div class="dropdown">
                            <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                            <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="{{ url('admin/userApplication') }}" class="dropdown-item edit"> <i class="fa fa-gear"></i>Back</a></div>
                        </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4 m-auto">User Loan Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>User Id</th>
                                        <td>{{ $userApplication->user_id }}</td>
                                    </tr>
                                    <tr>
                                        <th>User Name</th>
                                        <td>{{ $userApplication->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>User Account Number</th>
                                        <td>{{ $userApplication->account_number }}</td>
                                    </tr>
                                    <tr>
                                        <th>User Email</th>
                                        <td>{{ $userApplication->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>User Phone Number</th>
                                        <td>{{ $userApplication->phone }}</td>
                                    </tr>

                                    <tr>
                                        <th>Status</th>
                                        <td>{{ $userApplication->status }}</td>
                                    </tr>
                                    <tr>
                                        <th>User City Require</th>
                                        <td>{{ $userApplication->city_required }}</td>
                                    </tr>
                                    <tr>
                                        <th>User Branch Required</th>
                                        <td>{{ $userApplication->branch_requirwd }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nomini Name</th>
                                        <td>{{ $userApplication->nomini_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nomini Phone Number</th>
                                        <td>{{ $userApplication->nomini_phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Loan For</th>
                                        <td>{{ $userApplication->loan_type }}</td>
                                    </tr>
                                    <tr>
                                        <th>Loan Amount</th>
                                        <td>{{ $userApplication->loan_amount}}</td>
                                    </tr>
                                    <tr class="">
                                        <td></td>
                                        <td class="text justify-content-end">
                                            <form action="{{ route('userApplication.update', $userApplication->uid) }}" method="POST">
                                                @method('PATCH')
                                                @csrf
                                                <div class="d-flex center">
                                                    <button type="submit" class="btn btn-info line-brake">Accept</button>&nbsp;
                                                </div>
                                            </form>
                                            <form action="{{ route('userApplication.destroy', [$userApplication->uid]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="center">
                                                    <button type="submit" class="btn btn-danger">Reject</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection