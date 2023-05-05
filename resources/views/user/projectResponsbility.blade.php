@extends('layouts.user')
@section('Project.li', 'mm-active')
@section('Project.b', 'active')
@section('Project.svg', 'white')
@section('content')

    <div class="content">

        <div class="container-fluid flex justify-between mt-3">

            <div class="">
                    <h1 class="text-xl font-semibold ml-3 text-black">Web Communication</h1>
                    <p class="text-sm font-semibold ml-3 text-black">Small</p>

            </div>
            <div class="grid grid-cols-1 gap-2 md:grid-cols-2">
                <div class="relative mr-2">
                    <button type="button" class=" rounded-lg focus:outline-none text-black focus:ring-4 focus:ring-yellow-300 font-medium text-xs px-5 py-2 mb-2 dark:focus:ring-yellow-900" style="border: 2px solid black">
                        Back
                    </button>
                </div>
                <div class="relative mr-2">
                    <button type="button" class="flex rounded-lg focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium text-xs px-5 py-2.5 mb-2 dark:focus:ring-yellow-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin-right: 7px" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                          </svg>
                        Edit
                    </button>
                </div>
               
            </div>
            

        </div>

        {{-- <div class="row">
            <div class="grid grid-cols-4 gap-3 mx-3">
                <div id="sebelah" class="card px-4 bg-white">
                  <div class="pt-2">
                    <svg fill="@yield('Communication.svg')" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M204 906q-57-55-90.5-129.5T80 616q0-83 31.5-156T197 333q54-54 127-85.5T480 216q83 0 156 31.5T763 333q54 54 85.5 127T880 616q0 86-33.5 160.5T756 906l-43-43q50-47 78.5-110T820 616q0-142-99-241t-241-99q-142 0-241 99t-99 241q0 74 28.5 137T247 863l-43 43Zm113-113q-35-33-56-78.5T240 616q0-100 70-170t170-70q100 0 170 70t70 170q0 53-21 98.5T643 793l-43-43q28-25 44-59t16-75q0-75-52.5-127.5T480 436q-75 0-127.5 52.5T300 616q0 41 16 75t44 59l-43 43Zm163-97q-33 0-56.5-23.5T400 616q0-33 23.5-56.5T480 536q33 0 56.5 23.5T560 616q0 33-23.5 56.5T480 696Z"/></svg>                                
                    
                  </div>
                  <div class="text-center">
                    <h5 class="py-2 font-bold text-6xl">16</h5>
                    <p class="px-2">Responsibility Type</p>
                  </div>
                </div>
                <div class="card px-4 bg-white">
                  <div class="pt-2">
                    <svg fill="@yield('Users.svg')" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 96 960 960" width="48">
                                <path
                                    d="M0 816v-53q0-38.567 41.5-62.784Q83 676 150.376 676q12.165 0 23.395.5Q185 677 196 678.652q-8 17.348-12 35.165T180 751v65H0Zm240 0v-65q0-32 17.5-58.5T307 646q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-19.861-3.5-37.431Q773 696 765 678.727q11-1.727 22.171-2.227 11.172-.5 22.829-.5 67.5 0 108.75 23.768T960 763v53H780Zm-480-60h360v-6q0-37-50.5-60.5T480 666q-79 0-129.5 23.5T300 751v5ZM149.567 646Q121 646 100.5 625.438 80 604.875 80 576q0-29 20.562-49.5Q121.125 506 150 506q29 0 49.5 20.5t20.5 49.933Q220 605 199.5 625.5T149.567 646Zm660 0Q781 646 760.5 625.438 740 604.875 740 576q0-29 20.562-49.5Q781.125 506 810 506q29 0 49.5 20.5t20.5 49.933Q880 605 859.5 625.5T809.567 646ZM480 576q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600 456q0 50-34.5 85T480 576Zm.351-60Q506 516 523 498.649t17-43Q540 430 522.851 413t-42.5-17Q455 396 437.5 413.149t-17.5 42.5Q420 481 437.351 498.5t43 17.5ZM480 756Zm0-300Z" />
                            </svg>
                  </div>
                  <div class="text-center">
                    <h5 class="py-2 font-bold text-6xl">100</h5>
                    <p class="px-2">Users</p>
                  </div>
                </div>
                <div class="card px-4 bg-white">
                  <div class="pt-2">
                    <svg fill="@yield('Users.svg')" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 96 960 960" width="48">
                                <path
                                    d="M0 816v-53q0-38.567 41.5-62.784Q83 676 150.376 676q12.165 0 23.395.5Q185 677 196 678.652q-8 17.348-12 35.165T180 751v65H0Zm240 0v-65q0-32 17.5-58.5T307 646q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-19.861-3.5-37.431Q773 696 765 678.727q11-1.727 22.171-2.227 11.172-.5 22.829-.5 67.5 0 108.75 23.768T960 763v53H780Zm-480-60h360v-6q0-37-50.5-60.5T480 666q-79 0-129.5 23.5T300 751v5ZM149.567 646Q121 646 100.5 625.438 80 604.875 80 576q0-29 20.562-49.5Q121.125 506 150 506q29 0 49.5 20.5t20.5 49.933Q220 605 199.5 625.5T149.567 646Zm660 0Q781 646 760.5 625.438 740 604.875 740 576q0-29 20.562-49.5Q781.125 506 810 506q29 0 49.5 20.5t20.5 49.933Q880 605 859.5 625.5T809.567 646ZM480 576q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600 456q0 50-34.5 85T480 576Zm.351-60Q506 516 523 498.649t17-43Q540 430 522.851 413t-42.5-17Q455 396 437.5 413.149t-17.5 42.5Q420 481 437.351 498.5t43 17.5ZM480 756Zm0-300Z" />
                            </svg>
                  </div>
                  <div class="text-center">
                    <h5 class="py-2 font-bold text-6xl">9</h5>
                    <p class="px-2">Role</p>
                  </div>
                </div>
                
              </div>
              
        </div>
        
        <div class="row">
            <div class="grid mx-3 gap-3 grid-cols-4">
                <div class="card p-1">
                    <div class="ml-auto">
                       30-1-2003
                    </div>
                    <div class="row no-gutters align-items-center">
                      
                        <div class="col-md-2 h-10 flex w-12 rounded-circle" style="background-color: red;">
                            <p class="text-white m-auto font-semibold"> MA </p>
                        </div>
                        <div class="col-md-10" style="vertical-align: baseline;">
                            <div class="card-body">
                                <h5 class="card-title">Mohamad Arif</h5>
                                <p class="card-text">mohadyfuhvhgarif@gmail.com</p>
                            </div>
                        </div>
                        <p class="card-text" style="vertical-align: text-bottom;">Head Finance</p>
                    </div>
                </div>
                <div class="card p-1">
                    <div class="ml-auto">
                       30-1-2003
                    </div>
                    <div class="row no-gutters align-items-center">
                      
                        <div class="col-md-2 h-10 flex w-12 rounded-circle" style="background-color: red;">
                            <p class="text-white m-auto font-semibold"> MA </p>
                        </div>
                        <div class="col-md-10" style="vertical-align: baseline;">
                            <div class="card-body">
                                <h5 class="card-title">Mohamad Arif</h5>
                                <p class="card-text">mohadarif@gmail.com</p>
                            </div>
                        </div>
                        <p class="card-text" style="vertical-align: text-bottom;">Head Finance</p>
                    </div>
                </div>
                
                
                
            </div>
        </div> --}}
       
        <div class="flex mt-2 items-center justify-center">
            <a href="/project-team/{{$data->id}}">
                <button type="button" class="focus:outline-none text-black font-medium text-xs px-5 py-2.5 mb-2 dark:focus:ring-yellow-900" style="background-color: #D9D9D9;">
                    Team
                </button>
            </a>
            <button type="button" class=" focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium text-xs px-5 py-2.5 mb-2 dark:focus:ring-yellow-900">
                Responsbility
            </button>
        </div>
        <div class="" style="float:right">
            <button type="button" class="flex rounded-lg focus:outline-none text-white font-medium text-xs px-5 py-2.5 mb-2" style="background-color: #27AE60">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 7px" class="bi bi-file-earmark-excel-fill" viewBox="0 0 16 16">
                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.884 6.68 8 9.219l2.116-2.54a.5.5 0 1 1 .768.641L8.651 10l2.233 2.68a.5.5 0 0 1-.768.64L8 10.781l-2.116 2.54a.5.5 0 0 1-.768-.641L7.349 10 5.116 7.32a.5.5 0 1 1 .768-.64z"/>
                  </svg>Open Spreadsheet
            </button>
        </div>
        <div class="flex flex-col mt-2 w-full">
            <h1 class="text-xl font-semibold ml-3 text-black">Start Project</h1>
        </div>
        <div class="w-full flex flex-col">
            <div class="grid mx-3 gap-3 grid-cols-1 md:grid-cols-4 lg:grid-cols-4 mt-4" id="Data">
             
                <div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">
                    <div class="h-8 p-2 items-center w-full relative flex">
                        <button class="ml-auto h-5 w-5 rounded-circle bg-transparent">
                            <svg  class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>
                        </button>
                        <ul id="dropdownlist-index" class="absolute dropdown-edit hidden z-[1000] float-left right-9 top-3 border-2 m-0 min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg" >
                            <li>
                                    <button id="btn-edit-data.id" data-type="data.communication_type_id" data-how="data.how" data-to="data.to" onclick="edit(data.id)" class="btn-edit flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                        <p class="my-auto">Edit</p>
                                    </button>       
                                </li>
                                <li>
                                    <button onclick="removeModal(data.id)" class="btn-delete flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                        <p class="my-auto">Delete</p>
                                    </button>
                                </li>
                        </ul>           
                    </div>
                    <div class="h-16 flex p-2 pt-0 items-center w-full ">
                        
                        <div class="ml-2 flex my-auto">
                            <div class="my-auto">
                                <h1 class="text-sm my-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, modi!</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">
                    <div class="h-8 p-2 items-center w-full relative flex">
                        <button class="ml-auto h-5 w-5 rounded-circle bg-transparent">
                            <svg  class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>
                        </button>
                        <ul id="dropdownlist-index" class="absolute dropdown-edit hidden z-[1000] float-left right-9 top-3 border-2 m-0 min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg" >
                            <li>
                                    <button id="btn-edit-data.id" data-type="data.communication_type_id" data-how="data.how" data-to="data.to" onclick="edit(data.id)" class="btn-edit flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                        <p class="my-auto">Edit</p>
                                    </button>       
                                </li>
                                <li>
                                    <button onclick="removeModal(data.id)" class="btn-delete flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                        <p class="my-auto">Delete</p>
                                    </button>
                                </li>
                        </ul>           
                    </div>
                    <div class="h-16 flex p-2 pt-0 items-center w-full ">
                        
                        <div class="ml-2 flex my-auto">
                            <div class="my-auto">
                                <h1 class="text-sm my-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, modi!</h1>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-green-200" style="border: 2px solid green">
                    <div class="h-8 p-2 items-center w-full relative flex">
                        <button class="ml-auto h-5 w-5 rounded-circle bg-transparent">
                            <svg  class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>
                        </button>
                        <ul id="dropdownlist-index" class="absolute dropdown-edit hidden z-[1000] float-left right-9 top-3 border-2 m-0 min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg" >
                            <li>
                                    <button id="btn-edit-data.id" data-type="data.communication_type_id" data-how="data.how" data-to="data.to" onclick="edit(data.id)" class="btn-edit flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                        <p class="my-auto">Edit</p>
                                    </button>       
                                </li>
                                <li>
                                    <button onclick="removeModal(data.id)" class="btn-delete flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                        <p class="my-auto">Delete</p>
                                    </button>
                                </li>
                        </ul>           
                    </div>
                    <div class="h-16 flex p-2 pt-0 items-center w-full ">
                       
                        <div class="ml-2 flex my-auto">
                            <div class="my-auto">
                                <h1 class="text-sm my-0">Lorem ipsum dolor sit amet</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col mt-2 w-full">
            <h1 class="text-xl font-semibold ml-3 text-black">Game Thrust + Wow Design</h1>
        </div>
        <div class="w-full flex flex-col">
            <div class="grid mx-3 gap-3 grid-cols-1 md:grid-cols-4 lg:grid-cols-4 mt-4" id="Data">
                <div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">
                    <div class="h-8 p-2 items-center w-full relative flex">
                        <button class="ml-auto h-5 w-5 rounded-circle bg-transparent">
                            <svg  class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>
                        </button>
                        <ul id="dropdownlist-index" class="absolute dropdown-edit hidden z-[1000] float-left right-9 top-3 border-2 m-0 min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg" >
                            <li>
                                    <button id="btn-edit-data.id" data-type="data.communication_type_id" data-how="data.how" data-to="data.to" onclick="edit(data.id)" class="btn-edit flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                        <p class="my-auto">Edit</p>
                                    </button>       
                                </li>
                                <li>
                                    <button onclick="removeModal(data.id)" class="btn-delete flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                        <p class="my-auto">Delete</p>
                                    </button>
                                </li>
                        </ul>           
                    </div>
                    <div class="h-16 flex p-2 pt-0 items-center w-full ">
                        
                        <div class="ml-2 flex my-auto">
                            <div class="my-auto">
                                <h1 class="text-sm my-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, modi!</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">
                    <div class="h-8 p-2 items-center w-full relative flex">
                        <button class="ml-auto h-5 w-5 rounded-circle bg-transparent">
                            <svg  class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>
                        </button>
                        <ul id="dropdownlist-index" class="absolute dropdown-edit hidden z-[1000] float-left right-9 top-3 border-2 m-0 min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg" >
                            <li>
                                    <button id="btn-edit-data.id" data-type="data.communication_type_id" data-how="data.how" data-to="data.to" onclick="edit(data.id)" class="btn-edit flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                        <p class="my-auto">Edit</p>
                                    </button>       
                                </li>
                                <li>
                                    <button onclick="removeModal(data.id)" class="btn-delete flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                        <p class="my-auto">Delete</p>
                                    </button>
                                </li>
                        </ul>           
                    </div>
                    <div class="h-16 flex p-2 pt-0 items-center w-full ">
                        
                        <div class="ml-2 flex my-auto">
                            <div class="my-auto">
                                <h1 class="text-sm my-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, modi!</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">
                    <div class="h-8 p-2 items-center w-full relative flex">
                        <button class="ml-auto h-5 w-5 rounded-circle bg-transparent">
                            <svg  class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>
                        </button>
                        <ul id="dropdownlist-index" class="absolute dropdown-edit hidden z-[1000] float-left right-9 top-3 border-2 m-0 min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg" >
                            <li>
                                    <button id="btn-edit-data.id" data-type="data.communication_type_id" data-how="data.how" data-to="data.to" onclick="edit(data.id)" class="btn-edit flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                        <p class="my-auto">Edit</p>
                                    </button>       
                                </li>
                                <li>
                                    <button onclick="removeModal(data.id)" class="btn-delete flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                        <p class="my-auto">Delete</p>
                                    </button>
                                </li>
                        </ul>           
                    </div>
                    <div class="h-16 flex p-2 pt-0 items-center w-full ">
                        
                        <div class="ml-2 flex my-auto">
                            <div class="my-auto">
                                <h1 class="text-sm my-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, modi!</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">
                    <div class="h-8 p-2 items-center w-full relative flex">
                        <button class="ml-auto h-5 w-5 rounded-circle bg-transparent">
                            <svg  class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>
                        </button>
                        <ul id="dropdownlist-index" class="absolute dropdown-edit hidden z-[1000] float-left right-9 top-3 border-2 m-0 min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg" >
                            <li>
                                    <button id="btn-edit-data.id" data-type="data.communication_type_id" data-how="data.how" data-to="data.to" onclick="edit(data.id)" class="btn-edit flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                        <p class="my-auto">Edit</p>
                                    </button>       
                                </li>
                                <li>
                                    <button onclick="removeModal(data.id)" class="btn-delete flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                        <p class="my-auto">Delete</p>
                                    </button>
                                </li>
                        </ul>           
                    </div>
                    <div class="h-16 flex p-2 pt-0 items-center w-full ">
                        
                        <div class="ml-2 flex my-auto">
                            <div class="my-auto">
                                <h1 class="text-sm my-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, modi!</h1>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
        <div class="flex flex-col mt-2 w-full">
            <h1 class="text-xl font-semibold ml-3 text-black">Brain Strom</h1>
        </div>
        <div class="w-full flex flex-col">
            <div class="grid mx-3 gap-3 grid-cols-1 md:grid-cols-4 lg:grid-cols-4 mt-4" id="Data">
                
                <div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">
                    <div class="h-8 p-2 items-center w-full relative flex">
                        <button class="ml-auto h-5 w-5 rounded-circle bg-transparent">
                            <svg  class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>
                        </button>
                        <ul id="dropdownlist-index" class="absolute dropdown-edit hidden z-[1000] float-left right-9 top-3 border-2 m-0 min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg" >
                            <li>
                                    <button id="btn-edit-data.id" data-type="data.communication_type_id" data-how="data.how" data-to="data.to" onclick="edit(data.id)" class="btn-edit flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                        <p class="my-auto">Edit</p>
                                    </button>       
                                </li>
                                <li>
                                    <button onclick="removeModal(data.id)" class="btn-delete flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                        <p class="my-auto">Delete</p>
                                    </button>
                                </li>
                        </ul>           
                    </div>
                    <div class="h-16 flex p-2 pt-0 items-center w-full ">
                        
                        <div class="ml-2 flex my-auto">
                            <div class="my-auto">
                                <h1 class="text-sm my-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, modi!</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">
                    <div class="h-8 p-2 items-center w-full relative flex">
                        <button class="ml-auto h-5 w-5 rounded-circle bg-transparent">
                            <svg  class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>
                        </button>
                        <ul id="dropdownlist-index" class="absolute dropdown-edit hidden z-[1000] float-left right-9 top-3 border-2 m-0 min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg" >
                            <li>
                                    <button id="btn-edit-data.id" data-type="data.communication_type_id" data-how="data.how" data-to="data.to" onclick="edit(data.id)" class="btn-edit flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                        <p class="my-auto">Edit</p>
                                    </button>       
                                </li>
                                <li>
                                    <button onclick="removeModal(data.id)" class="btn-delete flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                        <p class="my-auto">Delete</p>
                                    </button>
                                </li>
                        </ul>           
                    </div>
                    <div class="h-16 flex p-2 pt-0 items-center w-full ">
                        
                        <div class="ml-2 flex my-auto">
                            <div class="my-auto">
                                <h1 class="text-sm my-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, modi!</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">
                    <div class="h-8 p-2 items-center w-full relative flex">
                        <button class="ml-auto h-5 w-5 rounded-circle bg-transparent">
                            <svg  class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>
                        </button>
                        <ul id="dropdownlist-index" class="absolute dropdown-edit hidden z-[1000] float-left right-9 top-3 border-2 m-0 min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg" >
                            <li>
                                    <button id="btn-edit-data.id" data-type="data.communication_type_id" data-how="data.how" data-to="data.to" onclick="edit(data.id)" class="btn-edit flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                        <p class="my-auto">Edit</p>
                                    </button>       
                                </li>
                                <li>
                                    <button onclick="removeModal(data.id)" class="btn-delete flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                        <p class="my-auto">Delete</p>
                                    </button>
                                </li>
                        </ul>           
                    </div>
                    <div class="h-16 flex p-2 pt-0 items-center w-full ">
                        
                        <div class="ml-2 flex my-auto">
                            <div class="my-auto">
                                <h1 class="text-sm my-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, modi!</h1>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>


   
@endsection

@section('javascript')
    <script src="{{ asset('js/pages/project.js') }}"></script>
@endsection

