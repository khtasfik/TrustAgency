<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Collective Admin Panel a Flat Bootstrap Responsive Website Template | Home :: W3Layouts</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- payment -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/payment/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/payment/bootstrap/font-awesome/css/font-awesome.min.css') }}" />
    <!-- Template CSS -->

    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/style-starter.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/custom.css') }}">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">

    <!-- payment -->

    <script type="text/javascript" src="{{ asset('assets/dashboard/payment/js/jquery-1.10.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/dashboard/payment/bootstrap/js/bootstrap.min.js') }}"></script>
</head>

<body class="sidebar-menu-collapsed">
    <div class="se-pre-con"></div>
    <section>
        <!-- sidebar menu start -->
        <div class="sidebar-menu sticky-sidebar-menu">

            <!-- logo start -->
            <div class="logo">
                <h1><a href="index.html">TRUSTAGENCY</a></h1>
            </div>

            <!-- if logo is image enable this -->
            <!-- image logo --
    <div class="logo">
      <a href="index.html">
        <img src="image-path" alt="Your logo" title="Your logo" class="img-fluid" style="height:35px;" />
      </a>
    </div>
    <!-- //image logo -->

            <div class="logo-icon text-center">
                <a href="index.html" title="logo"><img src="{{ asset('assets/dashboard/images/talogo.jpg') }}" alt="logo-icon" style="height:63px;"> </a>
            </div>
            <!-- //logo end -->

            <div class="sidebar-menu-inner">

                <!-- sidebar nav start -->
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li class="{{Request::routeIs('user.home')? 'active': '' }}"><a href="{{ route('user.home') }}"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
                    <li class="{{Request::routeIs('profile.index')? 'active': '' }}"><a href="{{ route('profile.index') }}"><i class="fa fa-id-card-o" aria-hidden="true"></i> <span>Profile</span></a></li>
                    <li class="{{Request::routeIs('user.apply')? 'active': '' }}"><a href="{{ route('user.apply') }}"><i class="fa fa-check-square-o" aria-hidden="true"></i> <span>Loan Apply</span></a></li>
                    <li class="{{Request::routeIs('user.apply')? 'active': '' }}"><a href="{{ route('user.accept') }}"><i class="fa fa-credit-card" aria-hidden="true"></i> <span>Check Loan Status</span></a></li>
                    <li class="{{Request::routeIs('payment.index')? 'active': '' }}"><a href="{{ route('payment.index') }}"><i class="fa fa-cc-mastercard" aria-hidden="true"></i> <span>Local Payment</span></a></li>
                    <li class="{{Request::routeIs('user/paywithpaypal')? 'active': '' }}"><a href="{{ url('user/paywithpaypal') }}"><i class="fa fa-cc-paypal" aria-hidden="true"></i><span>Paypal Payment</span></a></li>
                    <li class="{{Request::routeIs('user.statement')? 'active': '' }}"><a href="{{ route('user.statement') }}"><i class="fa fa-cc-mastercard" aria-hidden="true"></i> <span>Payment Statement</span></a></li>
                </ul>
                <!-- //sidebar nav end -->
                <!-- toggle button start -->
                <a class="toggle-btn">
                    <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
                    <i class="fa fa-angle-double-right menu-collapsed__right"></i>
                </a>
                <!-- //toggle button end -->
            </div>
        </div>
        <!-- //sidebar menu end -->
        <!-- header-starts -->
        <div class="header sticky-header">

            <!-- notification menu start -->
            <div class="menu-right">
                <div class="navbar user-panel-top">
                    <div class="search-box">
                        <form action="#search-results.html" method="get">
                            <input class="search-input" placeholder="Search Here..." type="search" id="search">
                            <button class="search-submit" value=""><span class="fa fa-search"></span></button>
                        </form>
                    </div>
                    <div class="user-dropdown-details d-flex">
                        <div class="profile_details_left">
                            <ul class="nofitications-dropdown">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i><span class="badge blue">3</span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="notification_header">
                                                <h3>You have 3 new notifications</h3>
                                            </div>
                                        </li>
                                        <li><a href="#" class="grid">
                                                <div class="user_img"><img src="{{ asset('assets/dashboard/images/avatar1.jpg') }}" alt="">
                                                </div>
                                                <div class="notification_desc">
                                                    <p>Johnson purchased template</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a></li>
                                        <li class="odd"><a href="#" class="grid">
                                                <div class="user_img"><img src="{{ asset('assets/dashboard/images/avatar2.jpg') }}" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>New customer registered </p>
                                                    <span>1 hour ago</span>
                                                </div>
                                            </a></li>
                                        <li><a href="#" class="grid">
                                                <div class="user_img"><img src="{{ asset('assets/dashboard/images/avatar3.jpg') }}" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor sit amet </p>
                                                    <span>2 hours ago</span>
                                                </div>
                                            </a></li>
                                        <li>
                                            <div class="notification_bottom">
                                                <a href="#all" class="bg-primary">See all notifications</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comment-o"></i><span class="badge blue">4</span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="notification_header">
                                                <h3>You have 4 new messages</h3>
                                            </div>
                                        </li>
                                        <li><a href="#" class="grid">
                                                <div class="user_img"><img src="{{ asset('assets/dashboard/images/avatar1.jpg') }}" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Johnson purchased template</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a></li>
                                        <li class="odd"><a href="#" class="grid">
                                                <div class="user_img"><img src="{{ asset('assets/dashboard/images/avatar2.jpg') }}" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>New customer registered </p>
                                                    <span>1 hour ago</span>
                                                </div>
                                            </a></li>
                                        <li><a href="#" class="grid">
                                                <div class="user_img"><img src="{{ asset('assets/dashboard/images/avatar3.jpg') }}" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor sit amet </p>
                                                    <span>2 hours ago</span>
                                                </div>
                                            </a></li>
                                        <li><a href="#" class="grid">
                                                <div class="user_img"><img src="{{ asset('assets/dashboard/images/avatar1.jpg') }}" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Johnson purchased template</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a></li>
                                        <li>
                                            <div class="notification_bottom">
                                                <a href="#all" class="bg-primary">See all messages</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="profile_details">
                            <ul>
                                <li class="dropdown profile_details_drop">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" aria-haspopup="true" aria-expanded="false">
                                        <div class="profile_img">
                                            <img src="{{asset('storage/file'). '/' . Auth::user()->file }}" class="rounded-circle" alt="" />
                                            <div class="user-active">
                                                <span></span>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu drp-mnu" aria-labelledby="dropdownMenu3">
                                        <li class="user-info">
                                            <h5 class="user-name">{{ Auth::user()->name }}</h5>
                                            <span class="status ml-2">Available</span>
                                        </li>
                                        <li> <a href="#"><i class="lnr lnr-user"></i>My Profile</a> </li>
                                        <li> <a href="#"><i class="lnr lnr-users"></i>1k Followers</a> </li>
                                        <li> <a href="#"><i class="lnr lnr-cog"></i>Setting</a> </li>
                                        <li> <a href="#"><i class="lnr lnr-heart"></i>100 Likes</a> </li>
                                        <li class="logout"> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--notification menu end -->
        </div>
        @yield('content')
    </section>
    <!--footer section start-->
    <footer class="dashboard">
        <p>&copy 2020 Collective. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank" class="text-primary">W3layouts.</a></p>
    </footer>
    <!--footer section end-->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->


    <script src="{{ asset('assets/dashboard/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/jquery-1.10.2.min.js') }}"></script>

    <!-- Different scripts of charts.  Ex.Barchart, Linechart -->
    <script src="{{ asset('assets/dashboard/js/bar.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/linechart.js') }}"></script>
    <!-- //Different scripts of charts.  Ex.Barchart, Linechart -->


    <script src="{{ asset('assets/dashboard/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/scripts.js') }}"></script>

    <!-- close script -->
    <script>
        var closebtns = document.getElementsByClassName("close-grid");
        var i;

        for (i = 0; i < closebtns.length; i++) {
            closebtns[i].addEventListener("click", function() {
                this.parentElement.style.display = 'none';
            });
        }
    </script>
    <!-- //close script -->

    <!-- disable body scroll when navbar is in active -->
    <script>
        $(function() {
            $('.sidebar-menu-collapsed').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll when navbar is in active -->

    <!-- loading-gif Js -->
    <script src="{{ asset('assets/dashboard/js/modernizr.js') }}"></script>
    <script>
        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/dashboard/js/bootstrap.min.js') }}"></script>

</body>

</html>