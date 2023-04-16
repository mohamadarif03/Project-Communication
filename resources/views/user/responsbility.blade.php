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

    
<div data-te-modal-init
class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
id="create-step-1" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
<div data-te-modal-dialog-ref
    class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-full translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)]">
    <div class="pointer-events-auto relative flex mx-auto flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none "
        style="width: 60%">
        <div
            class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
            <!--Modal title-->
            <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                Add Project Type
            </h5>
            <!--Close button-->
            <button type="button"
                class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                data-te-modal-dismiss aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!--Modal body-->
        <div class="relative p-4">
            <div class="grid grid-cols-2">
                <div>
                    <ol class="relative ml-4 pb-0 mb-0 text-gray-500 border-l border-gray-200">
                        <li class="mb-10 ml-6">
                            <span
                                class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                1
                            </span>
                            <h3 class="font-medium leading-tight">Task</h3>
                            <p class="text-sm">type of task</p>
                        </li>
                        <li class="mb-10 ml-6">
                            <span
                                class="absolute flex text-yellow-500 border-yellow-500 border items-center justify-center w-8 h-8 bg-yellow-50 rounded-lg -left-4 ring-4 ring-white ">
                                2
                            </span>
                            <h3 class="font-medium leading-tight">date</h3>
                            <p class="text-sm">task creation date</p>
                        </li>
                        <li class="mb-10 ml-6">
                            <span
                                class="absolute flex text-yellow-500 border-yellow-500 border items-center justify-center w-8 h-8 bg-yellow-50 rounded-lg -left-4 ring-4 ring-white ">
                                3
                            </span>
                            <h3 class="font-medium leading-tight">Files / Links</h3>
                            <p class="text-sm">attachment files or links</p>
                        </li>
                    </ol>
                </div>
                <div>
                    <div class="">
                        <label for="type" class=" mb-2 text-sm font-medium text-gray-900 bg-gray-500">Task
                            Type</label>
                            <Select id="type" name="type" class="" placeholder="Choose Type">
                                <option value=""></option>
                            </Select>
                    </div>
                    <div class="">
                        <label for="to"
                            class="w-36 mb-2 block text-xs font-medium text-gray-900 ">To</label>
                        <Select multiple id="to" disabled name="to" class="w-full" placeholder="To">
                            <option value=""></option>                       
                        </Select>

                    </div>
                </div>
            </div>
        </div>

        <!--Modal footer-->
        <div
            class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
            <button type="button" id="btn-close-modal-create-step-1"
                class="inline-block rounded bg-yellow-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-yellow-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200"
                data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                Cancel
            </button>
            <button type="button"
                class="ml-1 inline-block rounded bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#B9AF25] transition duration-150 ease-in-out hover:bg-yellow-500 focus:bg-yellow-500 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-yellow-500 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] "
                data-te-ripple-init data-te-ripple-color="light" id="btn-next-create-step-2">
                Next
            </button>
        </div>
    </div>
</div>
</div>

<!-- Open Modal 2-->
<button type="button" id="btn-open-modal-create-step-2" data-te-toggle="modal" data-te-target="#create-step-2"
data-te-ripple-init data-te-ripple-color="light" class="w-0 h-0 hidden">+
</button>
<!--Modal 2-->
<div data-te-modal-init
class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
id="create-step-2" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
<div data-te-modal-dialog-ref
    class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-full translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)]">
    <div class="pointer-events-auto relative flex mx-auto flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none "
        style="width: 60%">
        <div
            class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
            <!--Modal title-->
            <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                Add Project Type
            </h5>
            <!--Close button-->
            <button type="button"
                class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                data-te-modal-dismiss aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!--Modal body-->
        <div class="relative p-4">
            <div class="grid grid-cols-2">
                <div>
                    <ol class="relative ml-4 pb-0 mb-0 text-gray-500 border-l border-gray-200">
                        <li class="mb-10 ml-6">
                            <span
                                class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                1
                            </span>
                            <h3 class="font-medium leading-tight">Task</h3>
                            <p class="text-sm">type of task</p>
                        </li>
                        <li class="mb-10 ml-6">
                            <span
                                class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                2
                            </span>
                            <h3 class="font-medium leading-tight">date</h3>
                            <p class="text-sm">task creation date</p>
                        </li>
                        <li class="mb-10 ml-6">
                            <span
                                class="absolute flex text-yellow-500 border-yellow-500 border items-center justify-center w-8 h-8 bg-yellow-50 rounded-lg -left-4 ring-4 ring-white ">
                                3
                            </span>
                            <h3 class="font-medium leading-tight">Files / Links</h3>
                            <p class="text-sm">attachment files or links</p>
                        </li>
                    </ol>
                </div>
                <div>
                    <div class="">
                        <label for="project" class=" mb-2 text-sm font-medium">Date</label><br>
                        <input type="date"
                        class="peer block min-h-[auto] w-full rounded border-2 bg-neutral-100 px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear" placeholder="Task"
                        id="to" disabled aria-label="" />

                    </div>
                  
                </div>
            </div>
        </div>

        <!--Modal footer-->
        <div
            class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
            <button type="button" id="btn-back-create-step-1"
                class="inline-block rounded bg-yellow-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-yellow-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200">
                Back
            </button>
            <button type="button" id="btn-close-modal-create-step-2"
                data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light"
                class="hidden">
            </button>
            <button type="button"
                class="ml-1 inline-block rounded bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#B9AF25] transition duration-150 ease-in-out hover:bg-yellow-500 focus:bg-yellow-500 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-yellow-500 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] "
                data-te-ripple-init data-te-ripple-color="light" id="btn-next-create-step-3">
                Next
            </button>
        </div>
    </div>
</div>
</div>

<!--Open Modal 3-->
<button type="button" id="btn-open-modal-create-step-3" data-te-toggle="modal" data-te-target="#create-step-3"
data-te-ripple-init data-te-ripple-color="light" class="w-0 h-0 hidden">+
</button>
<!--Modal 3-->
<div data-te-modal-init
class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
id="create-step-3" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
<div data-te-modal-dialog-ref
    class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-full translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)]">
    <div class="pointer-events-auto relative flex mx-auto flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none "
        style="width: 60%">
        <div
            class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
            <!--Modal title-->
            <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                Add Project Type
            </h5>
            <!--Close button-->
            <button type="button"
                class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                data-te-modal-dismiss aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!--Modal body-->
        <div class="relative p-4">
            <div class="grid grid-cols-2">
                <div>
                    <ol class="relative ml-4 pb-0 mb-0 text-gray-500 border-l border-gray-200">
                        <li class="mb-10 ml-6">
                            <span
                                class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                1
                            </span>
                            <h3 class="font-medium leading-tight">Task</h3>
                            <p class="text-sm">type of task</p>
                        </li>
                        <li class="mb-10 ml-6">
                            <span
                                class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                2
                            </span>
                            <h3 class="font-medium leading-tight">date</h3>
                            <p class="text-sm">task creation date</p>
                        </li>
                        <li class="mb-10 ml-6">
                            <span
                                class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                3
                            </span>
                            <h3 class="font-medium leading-tight">Files / Links</h3>
                            <p class="text-sm">attachment files or links</p>
                        </li>
                    </ol>
                </div>
                <div>
                    <div class="">
                        <label for="project" class=" mb-2 text-sm font-medium">Files</label><br>
                        <input type="file"
                        class="peer block min-h-[auto] w-full rounded border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear" placeholder="Task"
                        id="files" aria-label="" />

                    </div>
                    <div class="mt-3">
                        <label for="project" class=" mb-2 text-sm font-medium">Link</label><br>
                        <input type="Links"
                        class="peer block min-h-[auto] w-full rounded border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear" placeholder="Http://"
                        id="link" aria-label="" />

                    </div>
                
                </div>
            </div>
        </div>

        <!--Modal footer-->
        <div
            class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
            <button type="button" class="hidden w-0 h-0" id="btn-close-modal-create-step-3"
                class="inline-block rounded bg-yellow-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-yellow-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200"
                data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
            </button>
            <button type="button" id="btn-back-create-step-2"
                class="inline-block rounded bg-yellow-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-yellow-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200"
                data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                Back
            </button>
            <button type="button"
                class="ml-1 inline-block rounded bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#B9AF25] transition duration-150 ease-in-out hover:bg-yellow-500 focus:bg-yellow-500 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-yellow-500 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] "
                data-te-ripple-init data-te-ripple-color="light">
                Save
            </button>
        </div>
    </div>
</div>
</div>

@endsection

@section('javascript')
    <script src="{{ asset('js/pages/responsbility.js') }}"></script>
@endsection

