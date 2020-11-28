@extends('admin.dashboard')
@section('content')

<section class="tables">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="card">
                    <div class="card-close">
                        <div class="dropdown">
                            <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                            <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="" class="dropdown-item edit"> <i class="fa fa-gear"></i>Add</a></div>
                        </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4 m-auto">Your Loan View</h3>
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p class="text text-center"><b>{{ $message }}</b></p>
                    </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover text-center table-dark text-white">
                                <thead>
                                    <tr>
                                        <th>Applicant Id</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Applicant Loan For</th>
                                        <th>Applicant Loan Amount</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                @foreach ($userApplication as $userApplications)
                                <tbody>
                                    <tr>
                                        <td>{{ $userApplications->user_id }}</td>
                                        <td>{{ $userApplications->name }}</td>
                                        <td>{{ $userApplications->status }}</td>
                                        <td>{{ $userApplications->loan_type }}</td>
                                        <td>{{ $userApplications->loan_amount }}</td>
                                        <td>
                                            <a class="btn btn-info" href="{{ route('userApplication.show', [$userApplications->uid] ) }}">Show Information</a>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection