@extends('user.dashboard')
@section('content')
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="card-close">
                        <div class="dropdown">
                            <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="" class="dropdown-item edit"> <i class="fa fa-gear"></i>Back</a></div>
                        </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4 m-auto">Update Your Profile Here</h3>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{ route('loan.update',$loan->id) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Loan Name</label>
                                <input type="text" placeholder="Loan Name" value="{{ $loan->loan_name }}" name="loan_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Loan Amount</label>
                                <input type="text" placeholder="Loan Amount" value="{{ $loan->loan_amount }}" name="loan_amount" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Loan Percentage</label>
                                <input type="text" placeholder="Loan Percentage" value="{{ $loan->loan_percentage }}" name="loan_percentage" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Loan Service</label>
                                <input type="text" placeholder="Loan Services" value="{{ $loan->loan_service }}" name="loan_service" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Loan Details</label>
                                <input type="text" placeholder="Loan Details" value="{{ $loan->loan_details }}" name="loan_details" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Add Loan" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection