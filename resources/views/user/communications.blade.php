@extends('layouts.main')
@section('Communication.li', 'mm-active')
@section('Communication.a', 'active')
@section('Communication.svg', 'white')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid flex justify-between">

            <div class="">
                <button type="button" data-te-toggle="modal" data-te-target="#exampleModalCenter1" data-te-ripple-init
                    data-te-ripple-color="light"
                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">+
                    Add
                </button>
                
            </div>
            <div class="flex">
                <div class="relative mr-2" data-te-dropdown-ref>
                    <button
                        class="flex items-center whitespace-nowrap rounded bg-white rounded-lg px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-gray-500 transition duration-150 ease-in-out hover:bg-primary-600"
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
                        class="flex items-center whitespace-nowrap rounded bg-white rounded-lg px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-gray-500 transition duration-150 ease-in-out hover:bg-primary-600"
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
                        class="flex items-center whitespace-nowrap rounded bg-white rounded-lg px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-gray-500 transition duration-150 ease-in-out hover:bg-primary-600"
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
                        class="flex items-center whitespace-nowrap rounded bg-white rounded-lg px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-gray-500 transition duration-150 ease-in-out hover:bg-primary-600"
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
                        <input type="checkbox" style="cursor: pointer;" checked>
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
    <div data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="exampleModalCenter1" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true"
        role="dialog">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
            <div
                class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none ">


                <!--Modal body-->
                <div class="flex">
                    <div class="relative p-4">
                        <h5 class="text-xl font-medium leading-normal text-neutral-800" style="margin-bottom: 60px"
                            id="exampleModalScrollableLabel">
                            Add Communication
                        </h5>
                        <ul class="relative m-0 w-full list-none overflow-hidden p-0 transition-[height] duration-200 ease-in-out"
                            data-te-stepper-init data-te-stepper-type="vertical">
                            <!--First item-->
                            <li data-te-stepper-step-ref
                                class="relative h-fit after:absolute after:left-[3rem] after:top-[3.9rem] after:mt-px after:h-[calc(100%-2rem)] after:w-px after:bg-[#e0e0e0] after:content-[''] dark:after:bg-neutral-600">
                                <div data-te-stepper-head-ref
                                    class="flex items-center p-6 leading-[1.3rem] no-underline after:bg-[#e0e0e0] after:content-['']">
                                    <span data-te-stepper-head-icon-ref
                                        class="mr-3 flex h-[3rem] w-[3rem] items-center justify-center rounded-lg text-sm font-medium text-white">
                                        1
                                    </span>
                                    <span data-te-stepper-head-text-ref
                                        class="text-neutral-500 after:absolute after:flex after:text-[0.8rem] after:content-[data-content] dark:text-gray-900">
                                        step1
                                    </span>
                                </div>
                                <div data-te-stepper-content-ref
                                    class="transition-[height, margin-bottom, padding-top, padding-bottom] left-0 overflow-hidden pb-6 pl-[3.75rem] pr-6 ps-1 duration-300 ease-in-out">

                                </div>
                            </li>

                            <!--Second item-->
                            <li data-te-stepper-step-ref
                                class="relative h-fit after:absolute after:left-[2.45rem] after:top-[3.6rem] after:mt-px after:h-[calc(100%-2.45rem)] after:w-px after:bg-[#e0e0e0] after:content-[''] dark:after:bg-neutral-600">
                                <div data-te-stepper-head-ref
                                    class="flex items-center p-6 leading-[1.3rem] no-underline after:bg-[#e0e0e0] after:content-['']">
                                    <span data-te-stepper-head-icon-ref
                                        class="mr-3 flex h-[3rem] w-[3rem] items-center justify-center rounded-lg bg-[#ebedef] text-sm font-medium text-[#40464f]">
                                        2
                                    </span>
                                    <span data-te-stepper-head-text-ref
                                        class="text-neutral-500 after:absolute after:flex after:text-[0.8rem] after:content-[data-content] dark:text-neutral-300">
                                        step2
                                    </span>
                                </div>
                                <div data-te-stepper-content-ref
                                    class="transition-[height, margin-bottom, padding-top, padding-bottom] left-0 overflow-hidden pb-6 pl-[3.75rem] pr-6 ps-1 duration-300 ease-in-out">

                                </div>
                            </li>

                            <!--Third item-->
                            <li data-te-stepper-step-ref class="relative h-fit">
                                <div data-te-stepper-head-ref
                                    class="flex items-center p-6 leading-[1.3rem] no-underline after:bg-[#e0e0e0] after:content-['']">
                                    <span data-te-stepper-head-icon-ref
                                        class="mr-3 flex h-[3rem] w-[3rem] items-center justify-center rounded-lg bg-[#ebedef] text-sm font-medium text-[#40464f]">
                                        3
                                    </span>
                                    <span data-te-stepper-head-text-ref
                                        class="text-neutral-500 after:absolute after:flex after:text-[0.8rem] after:content-[data-content] dark:text-neutral-300">
                                        step3
                                    </span>
                                </div>
                                <div data-te-stepper-content-ref
                                    class="transition-[height, margin-bottom, padding-top, padding-bottom] left-0 overflow-hidden pb-6 pl-[3.75rem] pr-6 ps-1 duration-300 ease-in-out">

                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="">
                        <div class="relative" data-te-dropdown-ref>
                            <div class="" style="margin-left:20%; margin-top:70%">
                                <h5 class="text-sm font-medium text-neutral-800"
                                id="exampleModalScrollableLabel" style="display: flex">
                                Communication Type
                            </h3>
                            <button
                              class="flex items-center whitespace-nowrap rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-gray-900 transition duration-150 ease-in-out motion-reduce:transition-none" style="border: 2px solid black;"
                              type="button"
                              id="dropdownMenuButton4"
                              data-te-dropdown-toggle-ref
                              aria-expanded="false"
                              data-te-ripple-init
                              data-te-ripple-color="light">
                              Monthly Report
                              <span class="ml-2 w-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 20 20"
                                  fill="currentColor"
                                  class="h-5 w-5">
                                  <path
                                    fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                                </svg>
                              </span>
                            </button>
                        </div>

                            <ul
                              class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                              aria-labelledby="dropdownMenuButton4"
                              data-te-dropdown-menu-ref>
                              <li>
                                <a
                                  class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                  href="#"
                                  data-te-dropdown-item-ref
                                  >Action</a
                                >
                              </li>
                              <li>
                                <a
                                  class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                  href="#"
                                  data-te-dropdown-item-ref
                                  >Another action</a
                                >
                              </li>
                              <li>
                                <a
                                  class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                  href="#"
                                  data-te-dropdown-item-ref
                                  >Something else here</a
                                >
                              </li>
                            </ul>
                          </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


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
