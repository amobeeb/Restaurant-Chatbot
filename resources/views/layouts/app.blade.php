{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Restaurant Chatbot
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="/order">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/product">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/delivery">Deliveries</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pickup">Pick Up</a>
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                               

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Restaurant Chatbot</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link rel="stylesheet" href="../plugins/morris/morris.css">

    <link href="{{asset('admin_assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin_assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin_assets/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container-fluid">

                <!-- Logo container-->
                <div class="logo">

                    <a href="#" class="logo">
                        {{-- <img src="assets/images/logo-sm.png" alt="" class="logo-small">
                        <img src="assets/images/logo.png" alt="" class="logo-large"> --}}
                        <div style="font-weight:bold; font-size:18px; color:purple">Tokis Restaurant</div>
                    </a>

                </div>
                <!-- End Logo container-->


                <div class="menu-extras topbar-custom">

                    <ul class="float-right list-unstyled mb-0 ">

                        <li class="dropdown notification-list d-none d-sm-block">

                        </li>

                        <li class="dropdown notification-list">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{asset('admin_assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    {{-- <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> My Wallet</a>
                                    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings m-r-5"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a> --}}
                                    <div class="dropdown-divider"></div>
                                    {{-- <a class="dropdown-item text-danger" href="#"> --}}
                                        
                                            <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                                         </a>
     
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             @csrf
                                         </form>




                                    {{-- </a> --}}
                                </div>
                            </div>
                        </li>
                        <li class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link" id="mobileToggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
                    </ul>
                </div>
                <!-- end menu-extras -->

                <div class="clearfix"></div>

            </div>
            <!-- end container -->
        </div>
        <!-- end topbar-main -->

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Welcome to Tokis Restaurant</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                
                            </li>
                        </ol>
                        <div class="state-information">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MENU Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="index.html">
                                <i class="ti-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="/order">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/product">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/delivery">Deliveries</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pickup">Pick Up</a>
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                               

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li> --}}
                        <li class="has-submenu">
                            <a href="/order"><i class="ti-email"></i>Order</a>

                        </li>

                        <li class="has-submenu">
                            <a href="/product"><i class="ti-support"></i>Product</a>

                        </li>

                        <li class="has-submenu">
                            <a href="/delivery"><i class="ti-receipt"></i>Delivery</a>

                        </li>

                        <li class="has-submenu">
                            <a href="/pickup"><i class="ti-menu-alt"></i>Pick Up</a>

                        </li>

                        {{-- <li class="has-submenu">
                            <a href="#"><i class="ti-pie-chart"></i>Charts</a>

                        </li>

                        <li class="has-submenu">
                            <a href="#"><i class="ti-files"></i>Pages</a>

                        </li> --}}
                    </ul>
                    <!-- End navigation menu -->
                </div>
                <!-- end navigation -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end navbar-custom -->
    </header>
    <!-- End Navigation Bar-->
    <div class="wrapper">
        <div class="container-fluid">

        {{-- <main class="py-4"> --}}
            @yield('content')
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->

    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    © 2020
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <script src="{{asset('admin_assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('admin_assets/js/waves.min.js')}}"></script>

    <script src="{{asset('admin_../plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('admin_assets/js/app.js')}}"></script>
    <!-- jQuery  -->
    
    <script src="{{asset('../plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <!--Morris Chart-->
    <script src="{{asset('../plugins/morris/morris.min.js')}}"></script>
    <script src="{{asset('../plugins/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('admin_assets/pages/dashboard.js')}}"></script>


    <!-- App js -->

</body>

</html>