<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/ATN News/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 10:30:19 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Dashboard | ATN News - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        @vite('resources/css/app.css')
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css"  id="app-stylesheet" />
    </head>
    <body>

        <!-- Begin page -->
        <div id="wrapper">           
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-email-outline noti-icon"></i>
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="font-16 text-white m-0">
                                    <span class="float-right">
                                        <a href="#" class="text-white">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Messages
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">

                                <div class="inbox-widget">
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Chadengle</p>
                                            <p class="inbox-item-text text-truncate">Hey! there I'm available...</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Tomaslau</p>
                                            <p class="inbox-item-text text-truncate">I've finished it! See you so...</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Stillnotdavid</p>
                                            <p class="inbox-item-text text-truncate">This theme is awesome!</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Kurafire</p>
                                            <p class="inbox-item-text text-truncate">Nice to meet you</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Shahedk</p>
                                            <p class="inbox-item-text text-truncate">Hey! there I'm available...</p>

                                        </div>
                                    </a>
                                </div> <!-- end inbox-widget -->

                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-primary notify-item notify-all">
                                View all
                                <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown notification-list flex">
                        <a class="nav-link dropdown-toggle nav-user mr-0 items-center  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="d-none d-sm-inline-block ml-1 font-weight-medium">Alex M.</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow text-white m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-outline"></i>
                                <span>Profile</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout-variant"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>
                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a class="logo text-center logo-dark">
                        <span class="logo-lg">
                            <!-- <img src="assets/images/logo-light.png/" alt="" height="22"> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">U</span> -->
                        </span>
                    </a>

                    <a class="logo text-center logo-light">
                        <span class="logo-lg">
                            <!-- <span class="logo-lg-text-dark">ATN News</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">U</span> -->
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li class="flex items-center">
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <p class="py-1.5 px-4 font-semibold my-auto role-color rounded-md">Role : Chief</p>
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

                            <li>
                                <a href="index.html">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="calendar.html">
                                    <i class="mdi mdi-account"></i>
                                    <span> User </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="mdi mdi-format-list-bulleted"></i>
                                    <span> Kategori </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="mdi mdi-account-plus"></i>
                                    <span> ACC User </span>
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
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <h1 class="text-xxl font-bold mb-2">Hi, Jenifer</h1>
                        <div class="grid grid-cols-12 gap-2">
                            <div class=" rounded-md border bg-white col-span-3">
                                <div class="border-b-2 pb-2">
                                    <h1 class="ml-2 mt-2 text-md font-bold ">Uncomplete Communication</h1>
                                </div>
                                <div class=" w-full h-36 px-2 py-1 mt-1 rounded-md">
                                    <div class="h-8 p-2 items-center w-full flex justify-between ">
                                        <input type="checkbox">
                                        <p class="bg-slate-300 rounded-md text-xs py-0.5 px-2">13 May 2023</p>
                                    </div>
                                    <div class="h-16 flex p-2 items-center w-full ">
                                        <div class="h-12 flex w-12 bg-red-400 rounded-circle">
                                            <p class="text-white m-auto font-semibold">FE</p>
                                        </div>
                                        <div class="ml-2 flex my-auto">
                                            <div class="my-auto">
                                                <h1 class="text-md font-semibold">Financial Emergencies</h1>
                                                <h3 class="text-sm">Meeting</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h-8 w-full flex items-center">
                                        <i class="mdi mdi-account"></i>
                                        <p class=" ml-1.5 text-xs">head finance</p>
                                        <div class="ml-auto mr-2 text-xs text-yellow-400 font-semibold">
                                            Show >
                                        </div>
                                    </div>
                                </div>
                                <div class=" w-full h-36 px-2 py-1 mt-1 rounded-md">
                                    <div class="h-8 p-2 items-center w-full flex justify-between ">
                                        <input type="checkbox">
                                        <p class="bg-slate-300 rounded-md text-xs py-0.5 px-2">13 May 2023</p>
                                    </div>
                                    <div class="h-16 flex p-2 items-center w-full ">
                                        <div class="h-12 flex w-12 bg-red-400 rounded-circle">
                                            <p class="text-white m-auto font-semibold">FE</p>
                                        </div>
                                        <div class="ml-2 flex my-auto">
                                            <div class="my-auto">
                                                <h1 class="text-md font-semibold">Financial Emergencies</h1>
                                                <h3 class="text-sm">Meeting</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h-8 w-full flex items-center">
                                        <i class="mdi mdi-account"></i>
                                        <p class=" ml-1.5 text-xs">head finance</p>
                                        <div class="ml-auto mr-2 text-xs text-yellow-400 font-semibold">
                                            Show >
                                        </div>
                                    </div>
                                </div>
                                <div class=" w-full h-36 px-2 py-1 mt-1 rounded-md">
                                    <div class="h-8 p-2 items-center w-full flex justify-between ">
                                        <input type="checkbox">
                                        <p class="bg-slate-300 rounded-md text-xs py-0.5 px-2">13 May 2023</p>
                                    </div>
                                    <div class="h-16 flex p-2 items-center w-full ">
                                        <div class="h-12 flex w-12 bg-red-400 rounded-circle">
                                            <p class="text-white m-auto font-semibold">FE</p>
                                        </div>
                                        <div class="ml-2 flex my-auto">
                                            <div class="my-auto">
                                                <h1 class="text-md font-semibold">Financial Emergencies</h1>
                                                <h3 class="text-sm">Meeting</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h-8 w-full flex items-center">
                                        <i class="mdi mdi-account"></i>
                                        <p class=" ml-1.5 text-xs">head finance</p>
                                        <div class="ml-auto mr-2 text-xs text-yellow-400 font-semibold">
                                            Show >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-md border bg-white col-span-3">
                                <div class="border-b-2 pb-2">
                                    <h1 class="ml-2 mt-2 text-md font-bold ">Uncomplete Communication</h1>
                                </div>
                                <div class=" w-full h-36 px-2 py-1 mt-1 rounded-md">
                                    <div class="h-8 p-2 items-center w-full flex justify-between ">
                                        <input type="checkbox">
                                        <p class="bg-slate-300 rounded-md text-xs py-0.5 px-2">13 May 2023</p>
                                    </div>
                                    <div class="h-16 flex p-2 items-center w-full ">
                                        <div class="h-12 flex w-12 bg-red-400 rounded-circle">
                                            <p class="text-white m-auto font-semibold">FE</p>
                                        </div>
                                        <div class="ml-2 flex my-auto">
                                            <div class="my-auto">
                                                <h1 class="text-md font-semibold">Financial Emergencies</h1>
                                                <h3 class="text-sm">Meeting</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h-8 w-full flex items-center">
                                        <i class="mdi mdi-account"></i>
                                        <p class=" ml-1.5 text-xs">head finance</p>
                                        <div class="ml-auto mr-2 text-xs text-yellow-400 font-semibold">
                                            Show >
                                        </div>
                                    </div>
                                </div>
                                <div class=" w-full h-36 px-2 py-1 mt-1 rounded-md">
                                    <div class="h-8 p-2 items-center w-full flex justify-between ">
                                        <input type="checkbox">
                                        <p class="bg-slate-300 rounded-md text-xs py-0.5 px-2">13 May 2023</p>
                                    </div>
                                    <div class="h-16 flex p-2 items-center w-full ">
                                        <div class="h-12 flex w-12 bg-red-400 rounded-circle">
                                            <p class="text-white m-auto font-semibold">FE</p>
                                        </div>
                                        <div class="ml-2 flex my-auto">
                                            <div class="my-auto">
                                                <h1 class="text-md font-semibold">Financial Emergencies</h1>
                                                <h3 class="text-sm">Meeting</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h-8 w-full flex items-center">
                                        <i class="mdi mdi-account"></i>
                                        <p class=" ml-1.5 text-xs">head finance</p>
                                        <div class="ml-auto mr-2 text-xs text-yellow-400 font-semibold">
                                            Show >
                                        </div>
                                    </div>
                                </div>
                                <div class=" w-full h-36 px-2 py-1 mt-1 rounded-md">
                                    <div class="h-8 p-2 items-center w-full flex justify-between ">
                                        <input type="checkbox">
                                        <p class="bg-slate-300 rounded-md text-xs py-0.5 px-2">13 May 2023</p>
                                    </div>
                                    <div class="h-16 flex p-2 items-center w-full ">
                                        <div class="h-12 flex w-12 bg-red-400 rounded-circle">
                                            <p class="text-white m-auto font-semibold">FE</p>
                                        </div>
                                        <div class="ml-2 flex my-auto">
                                            <div class="my-auto">
                                                <h1 class="text-md font-semibold">Financial Emergencies</h1>
                                                <h3 class="text-sm">Meeting</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h-8 w-full flex items-center">
                                        <i class="mdi mdi-account"></i>
                                        <p class=" ml-1.5 text-xs">head finance</p>
                                        <div class="ml-auto mr-2 text-xs text-yellow-400 font-semibold">
                                            Show >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" h-96 rounded-md bg-slate-300 col-span-2"></div>
                            <div class=" h-96 rounded-md bg-slate-300 col-span-4"></div>
                        </div>
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->

                

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
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h4 class="font-18 m-0 text-white">Theme Customizer</h4>
            </div>
            <div class="slimscroll-menu">
        
                <div class="p-4">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, layout, etc.
                    </div>
                    <div class="mb-2">
                        <img src="assets/images/layouts/light.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="assets/images/layouts/dark.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" 
                            data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="assets/images/layouts/rtl.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <a href="https://1.envato.market/XY7j5" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-download mr-1"></i> Download Now</a>
                </div>
            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->

        <!-- Vendor js -->
        <script src="{{asset('assets/js/vendor.min.js')}}"></script>

        <!--Morris Chart-->
        <script src="{{asset('assets/libs/morris-js/morris.min.js')}}"></script>
        <script src="{{asset('assets/libs/raphael/raphael.min.js')}}"></script>

        <!-- Dashboard init js-->
        <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.min.js')}}"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/ATN News/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 10:31:01 GMT -->
</html>