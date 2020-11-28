@extends('admin.dashboard')
@section('content')
<section class="tables">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h5"></h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <img src="{{asset('storage/file'). '/' . $applicationCheck->file }}" alt="..." class="img-fluid rounded-circle" width="150px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 m-auto">
                <div class="card">
                    <div class="card-close">
                        <div class="dropdown">
                            <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                            <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="{{ url('admin/application') }}" class="dropdown-item edit"> <i class="fa fa-gear"></i>Back</a></div>
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
                                        <td>{{ $applicationCheck->user_id }}</td>
                                    </tr>
                                    <tr>
                                        <th>User Name</th>
                                        <td>{{ $applicationCheck->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>User Email</th>
                                        <td>{{ $applicationCheck->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>User Phone Number</th>
                                        <td>{{ $applicationCheck->phone }}</td>
                                    </tr>

                                    <tr>
                                        <th>Nomini Name</th>
                                        <td>{{ $applicationCheck->nomini_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nomini Phone Number</th>
                                        <td>{{ $applicationCheck->nomini_phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Loan For</th>
                                        <td>{{ $applicationCheck->loan_type }}</td>
                                    </tr>
                                    <tr>
                                        <th>Loan Amount</th>
                                        <td>{{ $applicationCheck->loan_amount}}</td>
                                    </tr>
                                    <tr>
                                        <th>Permission</th>
                                        <td>{{ $applicationCheck->status}}</td>
                                    </tr>

                                    <tr>
                                        <form action="{{ route('application.update', $applicationCheck->uid) }}" method="POST">
                                            @method('PATCH')
                                            @csrf
                                            <th>Sanction Amount</th>
                                            @if($applicationCheck->status == 'Accept')
                                            <td><input type="text" name="balance" value="{{ $applicationCheck->balance }}"></td>
                                            @else
                                            <td><input type="text" name="balance"></td>
                                            @endif
                                    </tr>
                                    <tr class="">
                                        <td></td>
                                        <td class="text justify-content-end">

                                            <div class="d-flex center">

                                                <button type="submit" class="btn btn-info line-brake">Accept</button>&nbsp;
                                            </div>
                                            </form>
                                            <form action="{{ route('application.destroy', [$applicationCheck->uid]) }}" method="POST">
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