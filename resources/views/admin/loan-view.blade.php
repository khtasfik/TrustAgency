@extends('admin.dashboard')
@section('content')
<section class="tables">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="card">
                    <div class="card-close">
                        <div class="dropdown">
                            <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                            <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="{{ url('admin/loan') }}" class="dropdown-item edit"> <i class="fa fa-gear"></i>Back</a></div>
                        </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4 m-auto">Your Add Loan View</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>Loan Name</th>
                                        <th>Loan Number</th>
                                        <th>Loan Percentage</th>
                                        <th>Loan Service</th>
                                        <th>Loan Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $loan->loan_name }}</td>
                                        <td>{{ $loan->loan_amount }}</td>
                                        <td>{{ $loan->loan_percentage }}</td>
                                        <td>{{ $loan->loan_service }}</td>
                                        <td>{{ $loan->loan_details }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection