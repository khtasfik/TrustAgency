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
                            <div class="card-body">
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="col-xs-12 col-md-4 col-md-offset-4">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <h3 class="text-c">Payment Details</h3>
                                                        <img class="img-responsive cc-img" src="http://prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                                                    </div>
                                                </div>
                                                @if ($message = Session::get('success'))
                                                <div class="alert alert-success">
                                                    <h5 class="text-center">{{ $message }}</h5>
                                                </div>
                                                @endif
                                                <form role="form" action="{{ route('payment.store') }}" method="POST">
                                                    @csrf
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                    <label>CARD NUMBER</label>
                                                                    <div class="input-group">
                                                                        <input type="tel" name="card_number" class="form-control" placeholder="Valid Card Number" />
                                                                        <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-7 col-md-7">
                                                                <div class="form-group">
                                                                    <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                                                    <input type="tel" name="expairation" class="form-control" placeholder="MM / YY" />
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-5 col-md-5 pull-right">
                                                                <div class="form-group">
                                                                    <label>CV CODE</label>
                                                                    <input type="tel" name="cvv" class="form-control" placeholder="CVC" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Amount</label>
                                                                    <input type="text" name="card_amount" class="form-control" placeholder="Amount" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                    <label>CARD OWNER</label>
                                                                    <input type="text" name="card_name" class="form-control" placeholder="Card Owner Names" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <button class="btn btn-warning btn-lg btn-block">Process payment</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--popup's close button-->
                                        <button class="close">Close</button>
                                    </div>
                                </div>
                                <!--Content shown when popup is not displayed-->
                                <button class="open">Open</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection