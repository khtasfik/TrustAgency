@extends('admin.dashboard')
@section('content')
<section>
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="{{asset('storage/file'). '/' . Auth::user()->file }}" alt="" />
                        <!-- <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="file" />
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            {{ Auth::user()->name }}
                        </h5>
                        <h6>
                            Administrator
                        </h6>
                        <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
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
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">
                        <!-- <p>WORK LINK</p>
                        <a href="">Website Link</a><br />
                        <a href="">Bootsnipp Profile</a><br />
                        <a href="">Bootply Profile</a>
                        <p>SKILLS</p>
                        <a href="">Web Designer</a><br />
                        <a href="">Web Developer</a><br />
                        <a href="">WordPress</a><br />
                        <a href="">WooCommerce</a><br />
                        <a href="">PHP, .Net</a><br /> -->
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
                                    <p>{{ Auth::user()->id }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Administrator Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->name }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->phone }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Address</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->address }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Account Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->account_name }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Account Number</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->account_number }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Expairation</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->expairation }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Cvv</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->cvv }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Branch</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->branch_requirwd }}</p>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-12">
                                    <label>Your Bio</label><br />
                                    <p>Your detail description</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection