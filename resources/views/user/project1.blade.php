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
            <div class="grid grid-cols-2 gap-2">
                <div class="relative mr-2">
                    <button type="button" class=" rounded-lg focus:outline-none text-black focus:ring-4 focus:ring-yellow-300 font-medium text-xs px-5 py-2 mb-2 dark:focus:ring-yellow-900" style="border: 2px solid black">
                        Small
                    </button>
                </div>
                <div class="relative mr-2">
                    <button type="button" class=" rounded-lg focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium text-xs px-5 py-2.5 mb-2 dark:focus:ring-yellow-900">
                        Edit
                    </button>
                </div>
               
            </div>
            

        </div>
       
        <div class="flex mt-2 items-center justify-center">
            <button type="button" class=" focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium text-xs px-5 py-2.5 mb-2 dark:focus:ring-yellow-900">
                Team
            </button>
            <button type="button" class="focus:outline-none text-black font-medium text-xs px-5 py-2.5 mb-2 dark:focus:ring-yellow-900" style="background-color: #D9D9D9;">
                Responsbility
            </button>
        </div>
        <div class="w-full flex flex-col">
            <div class="grid mx-3 gap-3 grid-cols-4 mt-4" id="Data">
                <div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">
                    <div class="h-16 flex p-2 pt-0 w-full" style="margin-top: 30px">
                        <div class="h-12 flex w-12 rounded-circle" style="background-color: red">
                            <p class="text-white m-auto font-semibold"> MA </p>
                        </div>
                        <div class="ml-2 flex my-auto">
                            <div class="my-auto">
                                <h1 class="text-sm my-0 font-semibold">Mohamad Arif</h1>
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
                                <h1 class="text-sm my-0 font-semibold">Mohamad Arif</h1>
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
                                    <h1 class="text-sm my-0 font-semibold">Mohamad Arif</h1>
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
                                    <h1 class="text-sm my-0 font-semibold">Mohamad Arif</h1>
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
            <div class="grid mx-3 gap-3 grid-cols-4 mt-4" id="Data">
                <div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">
                    <div class="h-16 flex p-2 pt-0 w-full" style="margin-top: 30px">
                        <div class="h-12 flex w-12 rounded-circle" style="background-color: red">
                            <p class="text-white m-auto font-semibold"> MA </p>
                        </div>
                        <div class="ml-2 flex my-auto">
                            <div class="my-auto">
                                <h1 class="text-sm my-0 font-semibold">Mohamad Arif</h1>
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
                                <h1 class="text-sm my-0 font-semibold">Mohamad Arif</h1>
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
                                    <h1 class="text-sm my-0 font-semibold">Mohamad Arif</h1>
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
                                    <h1 class="text-sm my-0 font-semibold">Mohamad Arif</h1>
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
                                    <h1 class="text-sm my-0 font-semibold">Mohamad Arif</h1>
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
                                    <h1 class="text-sm my-0 font-semibold">Mohamad Arif</h1>
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
                                    <h1 class="text-sm my-0 font-semibold">Mohamad Arif</h1>
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
                                    <h1 class="text-sm my-0 font-semibold">Mohamad Arif</h1>
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
                                    <h1 class="text-sm my-0 font-semibold">Mohamad Arif</h1>
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
            <div class="grid mx-3 gap-3 grid-cols-4 mt-4" id="Data">
                <div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">
                    <div class="h-16 flex p-2 pt-0 w-full" style="margin-top: 30px">
                        <div class="h-12 flex w-12 rounded-circle" style="background-color: red">
                            <p class="text-white m-auto font-semibold"> MA </p>
                        </div>
                        <div class="ml-2 flex my-auto">
                            <div class="my-auto">
                                <h1 class="text-sm my-0 font-semibold">Mohamad Arif</h1>
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
                                <h1 class="text-sm my-0 font-semibold">Mohamad Arif</h1>
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
                                    <h1 class="text-sm my-0 font-semibold">Mohamad Arif</h1>
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

