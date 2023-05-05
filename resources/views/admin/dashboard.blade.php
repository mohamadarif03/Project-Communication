@extends('layouts.main')
@section('Dashboard.li','mm-active')
@section('Dashboard.a','active')
@section('content')

    <div class="content">
        <div class="row pt-6">
            <div class="grid grid-cols-4 gap-3 mx-3">
                <div id="sebelah" class="card px-4 bg-white">
                  <div class="pt-2">
                    <svgk xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M204 906q-57-55-90.5-129.5T80 616q0-83 31.5-156T197 333q54-54 127-85.5T480 216q83 0 156 31.5T763 333q54 54 85.5 127T880 616q0 86-33.5 160.5T756 906l-43-43q50-47 78.5-110T820 616q0-142-99-241t-241-99q-142 0-241 99t-99 241q0 74 28.5 137T247 863l-43 43Zm113-113q-35-33-56-78.5T240 616q0-100 70-170t170-70q100 0 170 70t70 170q0 53-21 98.5T643 793l-43-43q28-25 44-59t16-75q0-75-52.5-127.5T480 436q-75 0-127.5 52.5T300 616q0 41 16 75t44 59l-43 43Zm163-97q-33 0-56.5-23.5T400 616q0-33 23.5-56.5T480 536q33 0 56.5 23.5T560 616q0 33-23.5 56.5T480 696Z"/></svg>                                
                    
                  </div>
                  <div class="text-center">
                    <h5 class="py-2 font-bold text-6xl">{{ $communicationtypeCount }}</h5>
                    <p class="px-2">Communication Type</p>
                  </div>
                </div>
                <div class="card px-4 bg-white">
                  <div class="pt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 96 960 960" width="48">
                                <path
                                    d="M0 816v-53q0-38.567 41.5-62.784Q83 676 150.376 676q12.165 0 23.395.5Q185 677 196 678.652q-8 17.348-12 35.165T180 751v65H0Zm240 0v-65q0-32 17.5-58.5T307 646q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-19.861-3.5-37.431Q773 696 765 678.727q11-1.727 22.171-2.227 11.172-.5 22.829-.5 67.5 0 108.75 23.768T960 763v53H780Zm-480-60h360v-6q0-37-50.5-60.5T480 666q-79 0-129.5 23.5T300 751v5ZM149.567 646Q121 646 100.5 625.438 80 604.875 80 576q0-29 20.562-49.5Q121.125 506 150 506q29 0 49.5 20.5t20.5 49.933Q220 605 199.5 625.5T149.567 646Zm660 0Q781 646 760.5 625.438 740 604.875 740 576q0-29 20.562-49.5Q781.125 506 810 506q29 0 49.5 20.5t20.5 49.933Q880 605 859.5 625.5T809.567 646ZM480 576q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600 456q0 50-34.5 85T480 576Zm.351-60Q506 516 523 498.649t17-43Q540 430 522.851 413t-42.5-17Q455 396 437.5 413.149t-17.5 42.5Q420 481 437.351 498.5t43 17.5ZM480 756Zm0-300Z" />
                            </svg>
                  </div>
                  <div class="text-center">
                    <h5 class="py-2 font-bold text-6xl">{{ $userCount }}</h5>
                    <p class="px-2">Users</p>
                  </div>
                </div>
                <div class="card px-4 bg-white">
                  <div class="pt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="24" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                  </div>
                  <div class="text-center">
                    <h5 class="py-2 font-bold text-6xl">{{ $role }}</h5>
                    <p class="px-2">Role</p>
                  </div>
                </div>
                
              </div>
              
        </div>
      
    </div>

@endsection