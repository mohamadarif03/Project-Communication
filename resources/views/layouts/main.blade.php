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
        <!-- App favicon -->
        <link rel="shortcut icon" href="https://expinc.io/wp-content/uploads/2020/10/cropped-Exp-Inc-vierkant-192x192.png">
        <link rel="stylesheet" href="{{asset('plugin/tw-elements/dist/css/tw-elements.min.css')}}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('plugin/sweetalert2/dist/sweetalert2.min.css')}}">
        <!-- App css -->
        <link rel="stylesheet" href="{{asset('plugin/tom-select/dist/css/tom-select.css')}}">
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/inputcolor.css')}}">
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css"  id="app-stylesheet" />
        <style>
            .btn-close{
                background-color: rgb(255 247 237);
            }
            .btn-close:hover {
                background-color: rgb(244 233 215);
            }
            .btn-close-delete-hover{
                background-color: rgb(254 242 242);;
            }
            .btn-close-delete-hover:hover {
                background-color: rgb(254 233 215);
            }
            /* grid-cols-1 md:grid-cols-2 lg:grid-cols-3 */
            @media (max-width: 639px) {
            .cardUser {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }
            .cardRules {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }
            }
            @media (min-width: 640px) and (max-width: 1075px) {
                .cardUser {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
                .cardRules {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
            .filterUser{
                flex-direction: row
            }
            /* md:flex-row */
            }
            @media (min-width: 1076px) {
            .cardUser {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
            .cardRules {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
            .filterUser{
                flex-direction: row
            }
           
    }
        </style>
    </head>
    <body>

        <!-- Begin page -->
        <div id="wrapper">           
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled flex items-center topnav-menu float-right mb-0">
                    <li class="dropdown notification-list flex">
                        <a class="nav-link dropdown-toggle nav-user mr-0 items-center  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            @if (Auth::user()->profile == 'default.jpg')
                            <img src="{{asset('default.jpg')}}" class="rounded-full" alt="" srcset="">
                            @else
                            <img src="{{ asset('storage/' . Auth::user()->profile) }}" class="rounded-full" alt="" srcset="">
                            @endif
                            {{-- <img src="{{asset('profile/'.Auth::user()->profile)}}" alt="user-image" class="rounded-circle"> --}}
                            <span class="d-none d-sm-inline-block ml-1 font-weight-medium">{{Auth::user()->name}}</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            

                            <!-- item-->
                            <a href="/profil" class="dropdown-item notify-item">
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
                            <img src="{{asset('Geelkopie-600x135 1.png')}}" alt="" height="22">
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
                        <p class="py-1.5 px-4 font-semibold my-auto role-color rounded-md">Role : {{implode(' | ',Auth()->user()->userrole->pluck('role.name')->toarray())}}</p>
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
                            <li class="@yield('Roles.li')">
                                <a href="role" class="@yield('Roles.a')">
                                    <i class="mdi mdi-format-list-bulleted"></i>                                 
                                    <span>Roles</span>
                                </a>
                            </li>
                            
                            <li>
                           
                                <a href="javascript: void(0);" class="@yield('Communication.u')">
                                    <svg fill="@yield('Communication.svg','#6e768e')" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M204 906q-57-55-90.5-129.5T80 616q0-83 31.5-156T197 333q54-54 127-85.5T480 216q83 0 156 31.5T763 333q54 54 85.5 127T880 616q0 86-33.5 160.5T756 906l-43-43q50-47 78.5-110T820 616q0-142-99-241t-241-99q-142 0-241 99t-99 241q0 74 28.5 137T247 863l-43 43Zm113-113q-35-33-56-78.5T240 616q0-100 70-170t170-70q100 0 170 70t70 170q0 53-21 98.5T643 793l-43-43q28-25 44-59t16-75q0-75-52.5-127.5T480 436q-75 0-127.5 52.5T300 616q0 41 16 75t44 59l-43 43Zm163-97q-33 0-56.5-23.5T400 616q0-33 23.5-56.5T480 536q33 0 56.5 23.5T560 616q0 33-23.5 56.5T480 696Z"/></svg>                                
                                    <span>Responsibility Type</span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="communication-type-task">Task</a></li>
                                    <li><a href="communication-type-standart">Standart</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="rule" class="">
                                    <svg fill="@yield('Setting.svg','#6e768e')" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M427 936V711h60v83h353v60H487v82h-60Zm-307-82v-60h247v60H120Zm187-166v-82H120v-60h187v-84h60v226h-60Zm120-82v-60h413v60H427Zm166-165V216h60v82h187v60H653v83h-60Zm-473-83v-60h413v60H120Z"/></svg>
                                    <span>Settings Rules</span>
                                </a>
                            </li>
                            <li class="@yield('Users.li')">
                                <a href="users" class=" @yield('Users.a')">
                                    <svg fill="@yield('Users.svg','#6e768e')" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M0 816v-53q0-38.567 41.5-62.784Q83 676 150.376 676q12.165 0 23.395.5Q185 677 196 678.652q-8 17.348-12 35.165T180 751v65H0Zm240 0v-65q0-32 17.5-58.5T307 646q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-19.861-3.5-37.431Q773 696 765 678.727q11-1.727 22.171-2.227 11.172-.5 22.829-.5 67.5 0 108.75 23.768T960 763v53H780Zm-480-60h360v-6q0-37-50.5-60.5T480 666q-79 0-129.5 23.5T300 751v5ZM149.567 646Q121 646 100.5 625.438 80 604.875 80 576q0-29 20.562-49.5Q121.125 506 150 506q29 0 49.5 20.5t20.5 49.933Q220 605 199.5 625.5T149.567 646Zm660 0Q781 646 760.5 625.438 740 604.875 740 576q0-29 20.562-49.5Q781.125 506 810 506q29 0 49.5 20.5t20.5 49.933Q880 605 859.5 625.5T809.567 646ZM480 576q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600 456q0 50-34.5 85T480 576Zm.351-60Q506 516 523 498.649t17-43Q540 430 522.851 413t-42.5-17Q455 396 437.5 413.149t-17.5 42.5Q420 481 437.351 498.5t43 17.5ZM480 756Zm0-300Z"/></svg>
                                    <span>Users</span>
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
        <script src="{{asset('plugin/jquery/dist/jquery.min.js')}}"></script>
        <!-- Vendor js -->
        <script src="{{asset('assets/js/vendor.min.js')}}"></script>
        <!-- Plugin -->
        <script src="{{asset('plugin/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
        <script src="{{asset('plugin/tom-select/dist/js/tom-select.complete.min.js')}}"></script>
        <script src="{{asset('plugin/sweetalert2/dist/sweetalert2.min.js')}}"></script>
        <!--Morris Chart-->

        <script src="{{asset('assets/libs/raphael/raphael.min.js')}}"></script>
        <!-- Dashboard init js-->
        <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>
        <!-- App js -->
        <script src="{{asset('plugin/tw-elements/dist/js/tw-elements.umd.min.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('assets/js/app.min.js')}}"></script>
        @yield('javascript')
    </body>
</html>