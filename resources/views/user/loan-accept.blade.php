@extends('user.dashboard')
@section('content')
<section>
    <div class="mar-gin">
        <div class="container emp-profile">
            <div class="container-fluid">
                @if(isset($loanAccept->status) == 'Accept')
                <div class="row">
                    <div class="col-lg-2">
                        <div class="card">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <img src="{{asset('storage/file'). '/' . $loanAccept->file }}" alt="..." class="img-fluid rounded-circle" width="150px">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 m-auto">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4 m-auto">User Loan Information</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">

                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>User Id</th>
                                                <td>{{ $loanAccept->user_id }}</td>
                                            </tr>
                                            <tr>
                                                <th>User Name</th>
                                                <td>{{ $loanAccept->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>User Account Number</th>
                                                <td>{{ $loanAccept->account_number}}</td>
                                            </tr>
                                            <tr>
                                                <th>User Account Name</th>
                                                <td>{{ $loanAccept->account_name}}</td>
                                            </tr>
                                            <tr>
                                                <th>Loan Amount Granted</th>
                                                <td>{{ $loanAccept->loan_amount}}</td>
                                            </tr>
                                            <tr>
                                                <th>User Email</th>
                                                <td>{{ $loanAccept->email }}</td>
                                            </tr>
                                            <tr>
                                                <th>User Phone Number</th>
                                                <td>{{ $loanAccept->phone }}</td>
                                            </tr>

                                            <tr>
                                                <th>Nomini Name</th>
                                                <td>{{ $loanAccept->nomini_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Nomini Phone Number</th>
                                                <td>{{ $loanAccept->nomini_phone }}</td>
                                            </tr>
                                            <tr>
                                                <th>Loan For</th>
                                                <td>{{ $loanAccept->loan_type }}</td>
                                            </tr>
                                            <tr>
                                                <th>Permission</th>
                                                <td>{{ $loanAccept->status}}</td>
                                            </tr>

                                        </thead>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @else
                <div>
                    <h1 class="text-center"><strong>Your Loan is not Approved yet!</strong></h1>
                    <p class="text-center"><strong>Please! Stay with us</strong></p>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection