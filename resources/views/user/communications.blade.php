@extends('layouts.main')
@section('Communicationuser.li', 'mm-active')
@section('Communicationuser.a', 'active')
@section('Communicationuser.svg', 'white')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid flex justify-between">

            <div class="">
                <button type="button" data-te-toggle="modal" data-te-target="#create" data-te-ripple-init
                    data-te-ripple-color="light"
                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">+
                    Add
                </button>

            </div>
            <div class="flex">
                <div class="relative mr-2" data-te-dropdown-ref>
                    <button
                        class="flex items-center whitespace-nowrap bg-white rounded-lg px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-gray-500 transition duration-150 ease-in-out hover:bg-primary-600"
                        type="button" id="dropdownMenuButton1" data-te-dropdown-toggle-ref aria-expanded="false"
                        data-te-ripple-init data-te-ripple-color="light">
                        year
                        <span class="ml-2 w-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>
                    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                        aria-labelledby="dropdownMenuButton1" data-te-dropdown-menu-ref>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                href="#" data-te-dropdown-item-ref>Action Manusia</a>
                        </li>

                    </ul>
                </div>
                <div class="relative mr-2" data-te-dropdown-ref>
                    <button
                        class="flex items-center whitespace-nowrap bg-white rounded-lg px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-gray-500 transition duration-150 ease-in-out hover:bg-primary-600"
                        type="button" id="dropdownMenuButton1" data-te-dropdown-toggle-ref aria-expanded="false"
                        data-te-ripple-init data-te-ripple-color="light">
                        month
                        <span class="ml-2 w-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>
                    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                        aria-labelledby="dropdownMenuButton1" data-te-dropdown-menu-ref>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                href="#" data-te-dropdown-item-ref>Action Manusia</a>
                        </li>

                    </ul>
                </div>
                <div class="relative mr-2" data-te-dropdown-ref>
                    <button
                        class="flex items-center whitespace-nowrap bg-white rounded-lg px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-gray-500 transition duration-150 ease-in-out hover:bg-primary-600"
                        type="button" id="dropdownMenuButton1" data-te-dropdown-toggle-ref aria-expanded="false"
                        data-te-ripple-init data-te-ripple-color="light">
                        communication type
                        <span class="ml-2 w-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>
                    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                        aria-labelledby="dropdownMenuButton1" data-te-dropdown-menu-ref>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                href="#" data-te-dropdown-item-ref>Action Manusia</a>
                        </li>

                    </ul>
                </div>
                <div class="relative mr-2" data-te-dropdown-ref>
                    <button
                        class="flex items-center whitespace-nowrap bg-white rounded-lg px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-gray-500 transition duration-150 ease-in-out hover:bg-primary-600"
                        type="button" id="dropdownMenuButton1" data-te-dropdown-toggle-ref aria-expanded="false"
                        data-te-ripple-init data-te-ripple-color="light">
                        complete
                        <span class="ml-2 w-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>
                    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                        aria-labelledby="dropdownMenuButton1" data-te-dropdown-menu-ref>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                href="#" data-te-dropdown-item-ref>Action Manusia</a>
                        </li>

                    </ul>
                </div>

                <button type="button"
                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900 flex"><svg
                        style="margin-right: 13px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>Search</button>
            </div>

        </div> <!-- end container-fluid -->
        <div class="flex" style="margin-top: 70px">
            <div class="block rounded-lg p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] mr-3"
                style="background-color: #ECFFF4; border: 2px solid #27AE60;">

                <div class="h-8 p-2 items-center w-full flex justify-between ">
                    <a href=""data-te-toggle="modal" data-te-target="#exampleModalCenter" data-te-ripple-init
                        data-te-ripple-color="light">
                        <input type="checkbox" class="" style="cursor: pointer;" checked>
                    </a>
                    <p class="rounded-md text-xs text-white py-0.5 px-2" style="background-color: #27AE60">13 May 2023</p>
                </div>
                <div class="h-16 flex p-2 items-center w-full ">
                    <div class="h-12 flex w-12 bg-cyan-500 rounded-circle">
                        <p class="text-white m-auto font-semibold">QR</p>
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
                    <div class="ml-auto mr-2 text-xs text-gray-900 font-semibold">
                        Show >
                    </div>
                </div>
            </div>
            <div
                class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 mr-3">

                <div class="h-8 p-2 items-center w-full flex justify-between ">
                    <a href=""data-te-toggle="modal" data-te-target="#exampleModalCenter" data-te-ripple-init
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

    </div>
    <button type="button" id="btn-open-modal-create1" data-te-toggle="modal" data-te-target="#create1"
        data-te-ripple-init data-te-ripple-color="light" class="w-0 h-0 hidden">+
    </button>
    <button type="button" id="btn-open-modal-create2" data-te-toggle="modal" data-te-target="#create2"
        data-te-ripple-init data-te-ripple-color="light" class="w-0 h-0 hidden">+
    </button>
    <div data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="create" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-full translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)]">
            <div class="pointer-events-auto relative flex mx-auto flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none "
                style="width: 60%">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
                    <!--Modal title-->
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                        Add Communication Type
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
                                    <h3 class="font-medium leading-tight">Communication</h3>
                                    <p class="text-sm">Type of Communication</p>
                                </li>
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex text-yellow-500 border-yellow-500 border items-center justify-center w-8 h-8 bg-yellow-50 rounded-lg -left-4 ring-4 ring-white ">
                                        2
                                    </span>
                                    <h3 class="font-medium leading-tight">Date</h3>
                                    <p class="text-sm">communication creation date</p>
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
                                <label for="type" class=" mb-2 text-sm font-medium text-gray-900 ">Communication
                                    Type</label>
                                <Select id="type" name="type" class="" placeholder="Choose Type">
                                    <option value=""></option>
                                    <option value="Monthly Report">Monthly Report</option>
                                    <option value="Quarter Report">Quarter Report</option>
                                </Select>
                            </div>
                            <div class="">
                                <label for="type" class=" mb-2 text-sm font-medium text-gray-900 ">To</label><br>
                                <input type="text"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-gray-200 px-3 py-[0.32rem] leading-[1.6] outline outline-offset-1 outline-gray-300 transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none"
                                    id="exampleFormControlInput1" disabled style="border: 2px solid gray"
                                    placeholder="Example label" />

                            </div>
                        </div>
                    </div>
                </div>

                <!--Modal footer-->
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
                    <button type="button" id="btn-close-modal1"
                        class="inline-block rounded bg-yellow-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-yellow-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200"
                        data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                        Cancel
                    </button>
                    <button type="button"
                        class="ml-1 inline-block rounded bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#B9AF25] transition duration-150 ease-in-out hover:bg-yellow-500 focus:bg-yellow-500 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-yellow-500 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] "
                        data-te-ripple-init data-te-ripple-color="light" id="btn-next">
                        Next
                    </button>
                </div>
            </div>
        </div>
    </div>




    <!--Modal 2-->
    <div data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="create1" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-full translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)]">
            <div class="pointer-events-auto relative flex mx-auto flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none "
                style="width: 60%">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
                    <!--Modal title-->
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                        Add Communication Type
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
                                    <h3 class="font-medium leading-tight">Communication</h3>
                                    <p class="text-sm">Type of Communication</p>
                                </li>
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                        2
                                    </span>
                                    <h3 class="font-medium leading-tight">Date</h3>
                                    <p class="text-sm">communication creation date</p>
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
                                <label for="date" class=" mb-2 text-sm font-medium">Date</label><br>
                                <input type="date"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-neutral-100 px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none"
                                    id="exampleFormControlInput5" aria-label="" />

                            </div>
                        </div>
                    </div>
                </div>

                <!--Modal footer-->
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
                    <button type="button" id="btn-close-modal2"
                        class="inline-block rounded bg-yellow-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-yellow-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200"
                        data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                        Cancel
                    </button>
                    <button type="button"
                        class="ml-1 inline-block rounded bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#B9AF25] transition duration-150 ease-in-out hover:bg-yellow-500 focus:bg-yellow-500 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-yellow-500 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] "
                        data-te-ripple-init data-te-ripple-color="light" id="btn-next1">
                        Next
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!--Modal 3-->
    <div data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="create2" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-full translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)]">
            <div class="pointer-events-auto relative flex mx-auto flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none "
                style="width: 60%">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
                    <!--Modal title-->
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                        Add Communication Type
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
                                    <h3 class="font-medium leading-tight">Communication</h3>
                                    <p class="text-sm">Type of Communication</p>
                                </li>
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                        2
                                    </span>
                                    <h3 class="font-medium leading-tight">Date</h3>
                                    <p class="text-sm">communication creation date</p>
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

                                <label for="file" class=" mb-2 text-sm font-medium">File</label><br>
                                <input
                                    class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none"
                                    type="file" id="formFile" />

                            </div>
                            <div class="">

                                <label for="url" class=" mb-2 text-sm font-medium">Links</label><br>
                                <input
                                    class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none"
                                    type="url" id="formFile" placeholder="https://"/>

                            </div>
                        </div>
                    </div>
                </div>

                <!--Modal footer-->
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
                    <button type="button"
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




    {{-- Modal Konfirmasi Hapus --}}
    <div data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true"
        role="dialog">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
            <div
                class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none ">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
                    <!--Modal title-->
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                        Confirmation
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
                    <p>are you sure that you have done ?</p>
                </div>

                <!--Modal footer-->
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
                    <button type="button"
                        class="inline-block rounded bg-white px-6 py-2 text-xs font-medium uppercase leading-normal text-gray-900 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200"
                        data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light"
                        style="border: 2px solid black">
                        Close
                    </button>
                    <button type="button"
                        class="ml-1 inline-block rounded bg-green-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white"
                        data-te-ripple-init data-te-ripple-color="light">
                        i'm sure
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/pages/communication.js') }}"></script>
@endsection
