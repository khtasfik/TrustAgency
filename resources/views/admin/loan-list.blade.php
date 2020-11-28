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
                            <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="{{ route('loan.create') }}" class="dropdown-item edit"> <i class="fa fa-gear"></i>Add</a></div>
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
                                        <th>No</th>
                                        <th>Loan Name</th>
                                        <th>Loan Number</th>
                                        <th>Loan Percentage</th>
                                        <th>Loan Service</th>
                                        <th>Loan Details</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                @php
                                $i = 0;
                                @endphp
                                @foreach ($loan as $loans)
                                <tbody>
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $loans->loan_name }}</td>
                                        <td>{{ $loans->loan_amount }}</td>
                                        <td>{{ $loans->loan_percentage }}</td>
                                        <td>{{ $loans->loan_service }}</td>
                                        <td>{{ $loans->loan_details }}</td>
                                        <td>
                                            <form action="{{ route('loan.destroy', [$loans->id]) }}" method="POST">
                                                <a class="btn btn-info" href="{{ route('loan.show', [$loans->id] ) }}">Show</a>
                                                <a class="btn btn-primary" href="{{ route('loan.edit', [$loans->id] ) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
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