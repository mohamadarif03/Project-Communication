<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>exp Inc.</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="{{asset('css/stepper.css')}}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="https://expinc.io/wp-content/uploads/2020/10/cropped-Exp-Inc-vierkant-192x192.png">
    <link rel="stylesheet" href="{{ asset('plugin/tw-elements/dist/css/tw-elements.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugin/sweetalert2/dist/sweetalert2.min.css') }}">
    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('plugin/tom-select/dist/css/tom-select.css') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-stylesheet" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/inputcolor.css') }}">
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />

   

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled flex items-center topnav-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="mdi mdi-bell-outline noti-icon"></i>
                        <span class="noti-icon-badge" id="not-icon"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                        <!-- item-->


                        <div class="slimscroll noti-scroll">

                            <div class="inbox-widget" id="notification">
                            </div>
                            <!-- end inbox-widget -->

                        </div>
                        <!-- All-->

                        <a onclick="readall()" class="dropdown-item text-primary notify-item notify-all"
                            style="text-align: center; cursor: pointer;">
                            Read all
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list flex">
                    <a class="nav-link dropdown-toggle nav-user mr-0 items-center  waves-effect waves-light"
                        data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                        aria-expanded="false">
                        @if (Auth::user()->profile == 'default.jpg')
                            <img src="{{ asset('default.jpg') }}" class="rounded-full" alt="" srcset="">
                        @else
                            <img src="{{ asset('storage/' . Auth::user()->profile) }}" class="rounded-full"
                                alt="" srcset="">
                        @endif
                        <span class="d-none d-sm-inline-block ml-1 font-weight-medium">{{ Auth::user()->name }}</span>
                        <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->


                        <!-- item-->
                        <a href="/profil1" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-outline"></i>
                            <span>Profile</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="/logout" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>
            </ul>

            <!-- LOGO -->
            <div class="logo-box flex justify-center items-center">
                <a class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{ asset('Geelkopie-600x135 1.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-sm">

                    </span>
                </a>

                <a class="logo text-center logo-light">
                    <span class="logo-lg">

                    </span>
                    <span class="logo-sm">

                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li class="flex items-center">
                    <button class="button-menu-mobile waves-effect waves-light">
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <p
                        class="md:py-1.5 px-4 hidden md:inline-block text-xs md:text-sm p-0.5 py-0.5 font-semibold my-auto role-color rounded-md">
                        Role :{{ implode(' | ',Auth()->user()->userrole->pluck('role.name')->toarray()) }}</p>
                </li>
            </ul>
        </div>
        <!-- end Topbar -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Pages</li>

                        <li class="@yield('Dashboard.li')">
                            <a href="dashboard" class="@yield('Dashboard.a')">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <li class="@yield('Communication.li')">
                            <a class="@yield('Communication.a')">
                                <svg fill="@yield('Communication.svg', '#6e768e')" xmlns="http://www.w3.org/2000/svg" height="24"
                                    viewBox="0 96 960 960" width="48">
                                    <path
                                        d="M204 906q-57-55-90.5-129.5T80 616q0-83 31.5-156T197 333q54-54 127-85.5T480 216q83 0 156 31.5T763 333q54 54 85.5 127T880 616q0 86-33.5 160.5T756 906l-43-43q50-47 78.5-110T820 616q0-142-99-241t-241-99q-142 0-241 99t-99 241q0 74 28.5 137T247 863l-43 43Zm113-113q-35-33-56-78.5T240 616q0-100 70-170t170-70q100 0 170 70t70 170q0 53-21 98.5T643 793l-43-43q28-25 44-59t16-75q0-75-52.5-127.5T480 436q-75 0-127.5 52.5T300 616q0 41 16 75t44 59l-43 43Zm163-97q-33 0-56.5-23.5T400 616q0-33 23.5-56.5T480 536q33 0 56.5 23.5T560 616q0 33-23.5 56.5T480 696Z" />
                                </svg>
                                <span>Communication</span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="communication-sent">Sent</a></li>
                                <li><a href="communication-receive">Receive</a></li>
                            </ul>
                        </li>
                        <li class="@yield('Responsbility.li')">
                            <a class="@yield('Responsbility.a')">
                                <svg class="" fill="@yield('Responsbility.svg', '#6e768e')" xmlns="http://www.w3.org/2000/svg"
                                    height="24" width="48" fill="currentColor" class="bi bi-person-badge"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path
                                        d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
                                </svg>
                                <span>Responsbility</span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="responsbility-sent">Sent</a></li>
                                <li><a href="responsbility-receive">Receive</a></li>
                            </ul>
                        </li>
                        <li class="@yield('Project.li')">
                            <a href="project" class="@yield('Project.a')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-kanban" viewBox="0 0 16 16">
                                    <path
                                        d="M13.5 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-11a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h11zm-11-1a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-11z" />
                                    <path
                                        d="M6.5 3a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3zm-4 0a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3zm8 0a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3z" />
                                </svg>
                                <span>Project</span>
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page pt-6">
            @yield('content')
            <!-- Footer Start -->
            <!-- <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2016 - 2019 &copy; ATN News theme by <a href="#">Coderthemes</a>
                            </div>
                        </div>
                    </div>
                </footer> -->
            <!-- end Footer -->
        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    @include('sweetalert::alert')
    <!-- END wrapper -->
    <!-- Jquery -->
    <script src="{{ asset('plugin/jquery/dist/jquery.min.js') }}"></script>
    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <!-- Plugin -->
    <script src="{{ asset('plugin/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('plugin/tom-select/dist/js/tom-select.complete.min.js') }}"></script>
    <script src="{{ asset('plugin/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <!--Morris Chart-->
    <script src="{{ asset('assets/libs/raphael/raphael.min.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('plugin/tw-elements/dist/js/tw-elements.umd.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('js/pages/notification.js') }}"></script>
    @yield('javascript')
</body>

</html>
