@extends('user.dashboard')
@section('content')
<div class="main-content">
    <div class="container-fluid content-top-gap">
        <section class="tables">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover text-center table-dark text-white">
                                    <thead>
                                        <tr>
                                            <td>User Balance</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $loanBalance }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover text-center table-dark text-white">
                                    <thead>
                                        <tr>
                                            <td>User Deposit</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $total }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover text-center table-dark text-white">
                                    <thead>
                                        <tr>
                                            <td>User Payable</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $userPay }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 m-auto">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4 m-auto"><strong>User Statement</strong></h3>
                            </div>
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p class="text text-center"><b>{{ $message }}</b></p>
                            </div>
                            @endif

                            <div class="card-body">
                                @foreach ($loanStatement as $loanStatements)
                                @if($loanStatements->card_amount != null)
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover text-center table-dark text-white">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>User Account Name</th>
                                                <th>User Account Number</th>
                                                <th>User Payment </th>
                                                <th>User Email </th>
                                                <th>User Mobile No </th>
                                                <th>Loan Type</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        @php
                                        $i = 0;
                                        @endphp

                                        <tbody>
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $loanStatements->account_name }}</td>
                                                <td>{{ $loanStatements->account_number }}</td>
                                                <td>{{ $loanStatements->card_amount }}</td>
                                                <td>{{ $loanStatements->email }}</td>
                                                <td>{{ $loanStatements->phone }}</td>
                                                <td>{{ $loanStatements->loan_type }}</td>
                                                <td>{{ $loanStatements->pupdate }}</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                                @else
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4 m-auto">You can't transaction any amount.</h3>
                                </div>
                                @endif
                                @endforeach
                            </div>

                        </div>
                    </div>
                <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover text-center table-dark text-white">
                                    <thead>
                                        <tr>
                                            <td>User Payable</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $userPay }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3">
                    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover text-center table-dark text-white">
                                    <thead>
                                        <tr>
                                            <td>User Total Paypal Payment</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>${{ $paypalTotal }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3">
                    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover text-center table-dark text-white">
                                    <thead>
                                        <tr>
                                            <td>User Paypal Payment into Bd tk convert</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $paypalBd }} tk</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                    
                    <div class="col-lg-12 m-auto">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4 m-auto"><strong>User Paypal Statement</strong></h3>
                            </div>

                            <div class="card-body">
                                @foreach ($paypalStatement as $paypalStatements)
                                @if($loanStatements->card_amount != null)
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover text-center table-dark text-white">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>User Paypal Payment </th>
                                                <th>User Email </th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        @php
                                        $i = 0;
                                        @endphp

                                        <tbody>
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $paypalStatements->amount }}</td>
                                                <td>{{ $paypalStatements->email }}</td>
                                                <td>{{ $paypalStatements->pupdate }}</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                                @else
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4 m-auto">You can't transaction any amount.</h3>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            
                            
                        </div>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
</div>

@endsection