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
                        <h3 class="h4 m-auto">User Loan View</h3>
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
                                        <th>No</th>
                                        <th>User Id</th>
                                        <th>User Name</th>
                                        <th>Loan Name</th>
                                        <th>Loan Amount</th>
                                        <th>Loan For(Month)</th>
                                        <th>Permission</th>
                                        <th>Balance</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                @php
                                $i = 0;
                                @endphp
                                @foreach ($applicationCheck as $applicationChecks)
                                <tbody>
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $applicationChecks->user_id }}</td>
                                        <td>{{ $applicationChecks->name }}</td>
                                        <td>{{ $applicationChecks->loan_type }}</td>
                                        <td>{{ $applicationChecks->loan_amount }}</td>
                                        <td>{{ $applicationChecks->loan_for }}</td>
                                        <td>{{ $applicationChecks->status }}</td>
                                        <td>{{ $applicationChecks->balance }}</td>
                                        @if($applicationChecks->status == 'Pending')
                                        <td>
                                            <a class="btn btn-info" href="{{ route('application.show', [$applicationChecks->uid] ) }}">Show Information</a>
                                        </td>
                                        @else
                                        <td>
                                            <a class="btn btn-light" href="{{ route('application.edit', [$applicationChecks->uid]) }}">Edit Sanction</a>
                                        </td>
                                        @endif
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