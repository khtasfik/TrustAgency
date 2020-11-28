@extends('user.dashboard')
@section('content')
<section>
    <div class="mar-gin">
        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{asset('storage/file'). '/' . Auth::user()->file }}" alt="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <h5>
                                {{ $userProfile->name }}
                            </h5>
                            <h6>
                                User
                            </h6>
                            <!-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> -->
                            <ul class="nav nav-tabs tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Bank Information</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="" role="tab" aria-controls="home" aria-selected="true"><b>Edit Profile</b></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Administrator Id</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $userProfile->id }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Administrator Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $userProfile->name }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $userProfile->email }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $userProfile->phone }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Address</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $userProfile->address }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Account Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $userProfile->account_name }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Account Number</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $userProfile->account_number }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Expairation</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $userProfile->expairation }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Cvv</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $userProfile->cvv }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Branch</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $userProfile->branch_requirwd }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection