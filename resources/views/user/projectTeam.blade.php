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
                        Small
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
       
        <div class="flex mt-2 items-center justify-center">
            <button type="button" class=" focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium text-xs px-5 py-2.5 mb-2 dark:focus:ring-yellow-900">
                Team
            </button>
            <a href="/project-responsbility">
                <button type="button" class="focus:outline-none text-black font-medium text-xs px-5 py-2.5 mb-2 dark:focus:ring-yellow-900" style="background-color: #D9D9D9;">
                    Responsbility
                </button>
            </a>
        </div>
        <div class="w-full flex flex-col">
            <div class="grid mx-3 gap-3 grid-cols-1 md:grid-cols-4 lg:grid-cols-4 mt-4" id="Data">
                <div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">
                    <div class="h-16 flex p-2 pt-0 w-full" style="margin-top: 30px">
                        <div class="h-12 flex w-12 rounded-circle" style="background-color: red">
                            <p class="text-white m-auto font-semibold"> MA </p>
                        </div>
                        <div class="ml-2 flex my-auto">
                            <div class="my-auto">
                                <h3 class="text-xs font-bold text-slate-900 my-0">Mohamad Arif</h3>
                                <h3 class="text-xs text-slate-500 my-0">mohamadarif@gmail.com</h3>
                                <h3 class="text-xs text-black rounded-lg font-bold text-slate-500 my-0 absolute" style="background-color: #D9D9D9; color:black; padding:2px">service manager</h3>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
            <div class="flex flex-col mt-2 w-full">
                <h1 class="text-xl font-semibold ml-3 text-black">Creatives</h1>
            </div>
            <div class="grid mx-3 gap-3 grid-cols-1 md:grid-cols-4 lg:grid-cols-4 mt-4" id="Data">
               
                
                <div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">
                    <div class="h-16 flex p-2 pt-0 w-full" style="margin-top: 30px">
                        <div class="h-12 flex w-12 rounded-circle" style="background-color: red">
                            <p class="text-white m-auto font-semibold"> MA </p>
                        </div>
                        <div class="ml-2 flex my-auto">
                            <div class="my-auto">
                                <h3 class="text-xs font-bold text-slate-900 my-0">Mohamad Arif</h3>
                                <h3 class="text-xs text-slate-500 my-0">mohamadarif@gmail.com</h3>
                                <h3 class="text-xs text-black rounded-lg font-bold text-slate-500 my-0 absolute" style="background-color: #D9D9D9; color:black; padding:2px">service manager</h3>
                            </div>
                        </div>
                    </div>
                </div>
                    
            </div>
            <div class="flex flex-col mt-2 w-full">
                <h1 class="text-xl font-semibold ml-3 text-black">Chaperones</h1>
            </div>
            <div class="grid mx-3 gap-3 grid-cols-1 md:grid-cols-4 lg:grid-cols-4 mt-4" id="Data">
                <div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">
                    <div class="h-16 flex p-2 pt-0 w-full" style="margin-top: 30px">
                        <div class="h-12 flex w-12 rounded-circle" style="background-color: red">
                            <p class="text-white m-auto font-semibold"> MA </p>
                        </div>
                        <div class="ml-2 flex my-auto">
                            <div class="my-auto">
                                <h3 class="text-xs font-bold text-slate-900 my-0">Mohamad Arif</h3>
                                <h3 class="text-xs text-slate-500 my-0">mohamadarif@gmail.com</h3>
                                <h3 class="text-xs text-black rounded-lg font-bold text-slate-500 my-0 absolute" style="background-color: #D9D9D9; color:black; padding:2px">service manager</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">
                    <div class="h-16 flex p-2 pt-0 w-full" style="margin-top: 30px">
                        <div class="h-12 flex w-12 rounded-circle" style="background-color: red">
                            <p class="text-white m-auto font-semibold"> MA </p>
                        </div>
                        <div class="ml-2 flex my-auto">
                            <div class="my-auto">
                                <h3 class="text-xs font-bold text-slate-900 my-0">Mohamad Arif</h3>
                                <h3 class="text-xs text-slate-500 my-0">mohamadarif@gmail.com</h3>
                                <h3 class="text-xs text-black rounded-lg font-bold text-slate-500 my-0 absolute" style="background-color: #D9D9D9; color:black; padding:2px">service manager</h3>
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

