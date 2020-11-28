<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/admin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/admin/css/fontastic.css') }}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/admin/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/admin/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/admin/css/profile.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/dashboard/admin/img/favicon.ico') }}">

    <!-- payment -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/payment/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/payment/bootstrap/font-awesome/css/font-awesome.min.css') }}" />
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <!-- payment -->

    <script type="text/javascript" src="{{ asset('assets/dashboard/payment/js/jquery-1.10.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/dashboard/payment/bootstrap/js/bootstrap.min.js') }}"></script>
</head>

<body>
    <div class="page">
        <!-- Main Navbar-->
        <header class="header">
            <nav class="navbar">
                <!-- Search Box-->
                <div class="search-box">
                    <button class="dismiss"><i class="icon-close"></i></button>
                    <form id="searchForm" action="#" role="search">
                        <input type="search" placeholder="What are you looking for..." class="form-control">
                    </form>
                </div>
                <div class="container-fluid">
                    <div class="navbar-holder d-flex align-items-center justify-content-between">
                        <!-- Navbar Header-->
                        <div class="navbar-header">
                            <!-- Navbar Brand --><a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                                <div class="brand-text d-none d-lg-inline-block"><span>Bootstrap </span><strong>Dashboard</strong></div>
                                <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div>
                            </a>
                            <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                        </div>
                        <!-- Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                            <!-- Search-->
                            <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                            <!-- Notifications-->
                            <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">12</span></a>
                                <ul aria-labelledby="notifications" class="dropdown-menu">
                                    <li><a rel="nofollow" href="#" class="dropdown-item">
                                            <div class="notification">
                                                <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                                                <div class="notification-time"><small>4 minutes ago</small></div>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item">
                                            <div class="notification">
                                                <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                                                <div class="notification-time"><small>4 minutes ago</small></div>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item">
                                            <div class="notification">
                                                <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                                                <div class="notification-time"><small>4 minutes ago</small></div>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item">
                                            <div class="notification">
                                                <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                                                <div class="notification-time"><small>10 minutes ago</small></div>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications </strong></a></li>
                                </ul>
                            </li>
                            <!-- Messages                        -->
                            <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange badge-corner">10</span></a>
                                <ul aria-labelledby="notifications" class="dropdown-menu">
                                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                            <div class="msg-profile"> <img src="{{ asset('assets/dashboard/admin/img/avatar-1.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
                                            <div class="msg-body">
                                                <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                            <div class="msg-profile"> <img src="{{ asset('assets/dashboard/admin/img/avatar-2.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
                                            <div class="msg-body">
                                                <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                            <div class="msg-profile"> <img src="{{ asset('assets/dashboard/admin/img/avatar-3.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
                                            <div class="msg-body">
                                                <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages </strong></a></li>
                                </ul>
                            </li>
                            <!-- Languages dropdown    -->
                            <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="{{ route('home') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" alt="English"><span class="d-none d-sm-inline-block">Home</span></a>

                            </li>
                            <!-- Logout    -->
                            <!-- <li class="nav-item"><a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li> -->
                            <li class="nav-item"><a class="nav-link logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="page-content d-flex align-items-stretch">
            <!-- Side Navbar -->
            <nav class="side-navbar">
                <!-- Sidebar Header-->
                <div class="sidebar-header d-flex align-items-center">
                    <div class="avatar"><img src="{{asset('storage/file'). '/' . Auth::user()->file }}" alt="..." class="img-fluid rounded-circle"></div>
                    <div class="title">
                        <h1 class="h4">{{ Auth::user()->name }}</h1>
                        <p>Admin</p>
                    </div>
                </div>
                <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
                <ul class="list-unstyled">
                    <li class="{{Request::routeIs('admin.home')? 'active': '' }}"><a href="{{ route('admin.home') }}"> <i class="icon-home"></i>Home </a></li>
                    <li class="{{Request::routeIs('admin.profile')? 'active': '' }}"><a href="{{ route('admin.profile') }}"> <i class="fa fa-user" aria-hidden="true"></i> Profile </a></li>
                    <li class="{{Request::routeIs('loan.index')? 'active': '' }}"><a href="{{ route('loan.index')}}"> <i class="fa fa-university" aria-hidden="true"></i>Loan Create </a></li>
                    <li class="{{Request::routeIs('application.index')? 'active': '' }}"><a href="{{ route('application.index')}}"><i class="fa fa-credit-card" aria-hidden="true"></i>User Loan Application </a></li>
                    <li class="{{Request::routeIs('userStatement.index')? 'active': '' }}"><a href="{{ route('userStatement.index')}}"><i class="fa fa-credit-card" aria-hidden="true"></i>User Statement </a></li>
                    <li class="{{Request::routeIs('account.index')? 'active': '' }}"><a href="{{ route('account.index')}}"><i class="fa fa-credit-card" aria-hidden="true"></i>Admin Account </a></li>
                    <li class="{{Request::routeIs('admin.statement')? 'active': '' }}"><a href="{{ route('admin.statement')}}"><i class="fa fa-credit-card" aria-hidden="true"></i>Admin Statement </a></li>

            </nav>
            <div class="content-inner">

                @yield('content')
                <!-- Page Footer-->
                <footer class="main-footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Your company &copy; 2017-2020</p>
                            </div>
                            <div class="col-sm-6 text-right">
                                <p>Design by <a href="https://bootstrapious.com/p/admin-template" class="external">Bootstrapious</a></p>
                                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('assets/dashboard/admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/admin/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('assets/dashboard/admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/admin/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('assets/dashboard/admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <!-- Main File-->
    <script src="{{ asset('assets/dashboard/admin/js/front.js') }}"></script>
    <script src="{{ asset('assets/dashboard/admin/js/custom.js') }}"></script>
</body>

</html>