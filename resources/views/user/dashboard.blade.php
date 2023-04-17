@extends('layouts.user')

@section('content')
<div class="content">                 
    <!-- Start Content-->
    <div class="container-fluid">
        <h1 class="text-xl font-bold mb-2">Hi, {{Auth()->user()->name}}</h1>
        <div class="grid grid-cols-12 gap-2">
            <div class=" rounded-md border bg-white col-span-12 md:col-span-6 lg:col-span-3">
                <div class="border-b-2 pb-2">
                    <h1 class="ml-2 mt-2 text-sm font-bold ">Uncomplete Communication</h1>
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
                            <div class="my-0">
                                <h1 class="text-sm font-semibold my-0">Financial Emergencies</h1>
                                <h3 class="text-xs my-0">Meeting</h3>
                            </div>
                        </div>
                    </div>
                    <div class="h-8 w-full flex items-center">
                        <i class="mdi mdi-account"></i>
                        <p class="my-auto ml-1.5 text-xs">head finance</p>
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
                                <h1 class="text-sm font-semibold my-0">Financial Emergencies</h1>
                                <h3 class="text-xs my-0">Meeting</h3>
                            </div>
                        </div>
                    </div>
                    <div class="h-8 w-full flex items-center">
                        <i class="mdi mdi-account"></i>
                        <p class="my-auto ml-1.5 text-xs">head finance</p>
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
                                <h1 class="text-sm font-semibold my-0">Financial Emergencies</h1>
                                <h3 class="text-xs my-0">Meeting</h3>
                            </div>
                        </div>
                    </div>
                    <div class="h-8 w-full flex items-center">
                        <i class="mdi mdi-account"></i>
                        <p class="my-auto ml-1.5 text-xs">head finance</p>
                        <div class="ml-auto mr-2 text-xs text-yellow-400 font-semibold">
                            Show >
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded-md border bg-white col-span-12 md:col-span-6 lg:col-span-3">
                <div class="border-b-2 pb-2">
                    <h1 class="ml-2 mt-2 text-sm font-bold ">Uncomplete Communication</h1>
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
                                <h1 class="text-sm font-semibold my-0">Financial Emergencies</h1>
                                <h3 class="text-xs my-0">Meeting</h3>
                            </div>
                        </div>
                    </div>
                    <div class="h-8 w-full flex items-center">
                        <i class="mdi mdi-account"></i>
                        <p class="my-auto ml-1.5 text-xs">head finance</p>
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
                                <h1 class="text-sm font-semibold my-0">Financial Emergencies</h1>
                                <h3 class="text-xs my-0">Meeting</h3>
                            </div>
                        </div>
                    </div>
                    <div class="h-8 w-full flex items-center">
                        <i class="mdi mdi-account"></i>
                        <p class="my-auto ml-1.5 text-xs">head finance</p>
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
                                <h1 class="text-sm font-semibold my-0">Financial Emergencies</h1>
                                <h3 class="text-xs my-0">Meeting</h3>
                            </div>
                        </div>
                    </div>
                    <div class="h-8 w-full flex items-center">
                        <i class="mdi mdi-account"></i>
                        <p class="my-auto ml-1.5 text-xs">head finance</p>
                        <div class="ml-auto mr-2 text-xs text-yellow-400 font-semibold">
                            Show >
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded-md bg-white flex col-span-12 md:col-span-4 flex-col lg:col-span-2 text-center bg-transparent">
                <div class="rounded-md my-auto bg-white" style="height: 32%;">
                    <div class="flex flex-col h-full w-full items-center justify-center">
                        <div class="">
                            <h1 class="text-5xl font-bold">{{$communicationCount}}</h1>
                        </div>
                        <div class="">
                            <p class="text-xs font-bold">Total Communication</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-md my-auto bg-white" style="height: 32%;">
                    <div class="flex flex-col h-full w-full items-center justify-center">
                        <div class="">
                            <h1 class="text-5xl font-bold">{{$complete}}</h1>
                        </div>
                        <div class="">
                            <p class="text-xs font-bold">Complete Communication</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-md my-auto bg-white" style="height: 32%;">
                    <div class="flex flex-col h-full w-full items-center justify-center">
                        <div class="">
                            <h1 class="text-5xl font-bold">{{$uncomplete}}</h1>
                        </div>
                        <div class="">
                            <p class="text-xs font-bold">Uncomplete Communication</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded-md bg-white col-span-12 md:col-span-8 lg:col-span-4">
                {!! $CommunicationChart->container() !!} 
            </div>
        </div>
    </div> <!-- end container-fluid -->

</div>
<script src="{{ $CommunicationChart->cdn() }}"></script>

{{ $CommunicationChart->script() }}
@endsection