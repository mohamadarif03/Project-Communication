@extends('layouts.user')
@section('responsbility.li', 'mm-active')
@section('responsbility.b', 'active')
@section('responsbility.svg', 'white')
@section('content')

<div class="content">

    <div class="container-fluid flex justify-between mt-3">

        <div class="">
            <button type="button" data-te-toggle="modal" id="btn-open-crate-step-1" data-te-target="#create-step-1"
                data-te-ripple-init data-te-ripple-color="light"
                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-xs px-5 py-2.5 mr-2 mb-2">+
                Add
            </button>

        </div>
        <div class="grid grid-cols-4 gap-2">
            <div class="relative mr-2">
                <select id="year" name="year" class="block w-full px-4 py-2 text-sm leading-tight border-gray-300 rounded-md appearance-none focus:outline-none focus:border-yellow-500">
                </select>
            </div>
            <div class="relative mr-2">
                <select id="month" name="month" class="block w-full px-4 py-2 text-sm leading-tight border-gray-300 rounded-md appearance-none focus:outline-none focus:border-yellow-500">
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
            </div>
            <div class="relative mr-2">
                <select id="comtype" name="comtype" class="block w-full px-4 py-2 text-sm leading-tight border-gray-300 rounded-md appearance-none focus:outline-none focus:border-yellow-500">
                    <option value="Monthly Report">Monthly Report</option>
                    <option value="Quarterly Report">Quarterly Report</option>
                    <option value="Annual Report">Annual Report</option>
                </select>
            </div>
            <button type="button" class="col-span-1 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-xs px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search mr-2" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>Search
            </button>
        </div>
        

    </div>
</div>

<div class="grid grid-cols-3 gap-4" style="margin-top: 10px" id="Receive">
    <div class="block rounded-lg p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] mr-3"
        style="background-color: #ECFFF4; border: 2px solid #27AE60;">

        <div class="h-8 p-2 items-center w-full flex justify-between ">

            <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
            <p class="rounded-md text-xs text-white py-0.5 px-2" style="background-color: #27AE60">13 May 2023</p>
        </div>
        <div class="h-16 flex p-2 items-center w-full ">
            <div class="h-12 flex w-12 bg-cyan-500 rounded-circle">
                <p class="text-white m-auto font-semibold">QR</p>
            </div>
            <div class="ml-2 flex my-auto">
                <div class="my-auto">
                    <h1 class="text-sm my-0 font-semibold">Financial Emergencies</h1>
                    <h3 class="text-xs my-0">Meeting</h3>
                </div>
            </div>
        </div>
        <div class="h-8 w-full flex items-center">
            <i class="mdi mdi-account"></i>
            <p class=" ml-1.5 my-auto text-xs">head finance</p>
            <div class="ml-auto mr-2 text-xs text-gray-900 font-semibold">
                Show >
            </div>
        </div>
    </div>
    <div class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 mr-3">
        <div class="h-8 p-2 items-center w-full flex">
            <p class="bg-slate-300 ml-auto rounded-md text-xs py-0.5 px-2">13 May 2023</p>
        </div>
        <div class="h-16 flex p-2 items-center w-full ">
            <div class="h-12 flex w-12 bg-red-400 rounded-circle">
                <p class="text-white m-auto font-semibold">FE</p>
            </div>
            <div class="ml-2 flex my-auto">
                <div class="my-auto">
                    <h1 class="text-sm my-0 font-semibold">Financial Emergencies</h1>
                    <h3 class="text-xs my-0">Meeting</h3>
                </div>
            </div>
        </div>
        <div class="h-8 w-full flex items-center">
            <i class="mdi mdi-account"></i>
            <p class=" ml-1.5 my-auto text-xs">head finance</p>
            <div class="ml-auto mr-2 text-xs text-yellow-400 font-semibold">
                <a href="" class="text-yellow-400" data-te-toggle="modal" data-te-target="#show">
                    Show >
                </a>
            </div>
        </div>
    </div>
    <div class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 mr-3">
        <div class="h-8 p-2 items-center w-full flex justify-between ">
            <a href="" data-te-toggle="modal" data-te-target="#exampleModalCenter" data-te-ripple-init
                data-te-ripple-color="light">
                <input type="checkbox" style="cursor: pointer">
            </a>
            <p class="bg-slate-300 rounded-md text-xs py-0.5 px-2">13 May 2023</p>
        </div>
        <div class="h-16 flex p-2 items-center w-full ">
            <div class="h-12 flex w-12 bg-red-400 rounded-circle">
                <p class="text-white m-auto font-semibold">FE</p>
            </div>
            <div class="ml-2 flex my-auto">
                <div class="my-auto">
                    <h1 class="text-sm my-0 font-semibold">Financial Emergencies</h1>
                    <h3 class="text-xs my-0">Meeting</h3>
                </div>
            </div>
        </div>
        <div class="h-8 w-full flex items-center">
            <i class="mdi mdi-account"></i>
            <p class=" ml-1.5 my-auto text-xs">head finance</p>
            <div class="ml-auto mr-2 text-xs text-yellow-400 font-semibold">
                <a href="" class="text-yellow-400" data-te-toggle="modal" data-te-target="#show">
                    Show >
                </a>
            </div>
        </div>
    </div>
    <div class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 mr-3">

        <div class="h-8 p-2 items-center w-full flex justify-between ">
            <a href="" data-te-toggle="modal" data-te-target="#exampleModalCenter" data-te-ripple-init
                data-te-ripple-color="light">
                <input type="checkbox" style="cursor: pointer">
            </a>
            <p class="bg-slate-300 rounded-md text-xs py-0.5 px-2">13 May 2023</p>
        </div>
        <div class="h-16 flex p-2 items-center w-full ">
            <div class="h-12 flex w-12 bg-red-400 rounded-circle">
                <p class="text-white m-auto font-semibold">FE</p>
            </div>
            <div class="ml-2 flex my-auto">
                <div class="my-auto">
                    <h1 class="text-sm my-0 font-semibold">Financial Emergencies</h1>
                    <h3 class="text-xs my-0">Meeting</h3>
                </div>
            </div>
        </div>
        <div class="h-8 w-full flex items-center">
            <i class="mdi mdi-account"></i>
            <p class=" ml-1.5 my-auto text-xs">head finance</p>
            <div class="ml-auto mr-2 text-xs text-yellow-400 font-semibold">
                <a href="" class="text-yellow-400" data-te-toggle="modal" data-te-target="#show">
                    Show >
                </a>
            </div>
        </div>
    </div>
</div>

    


@endsection

@section('javascript')
    <script src="{{ asset('js/pages/responsbility.js') }}"></script>
@endsection

