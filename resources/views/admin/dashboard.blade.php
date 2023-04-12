@extends('layouts.main')
@section('Dashboard.li','mm-active')
@section('Dashboard.a','active')
@section('content')

    <div class="content">


        <div class="flex" style="margin-top: 70px">

            <div class="flex items-center block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]"
                style="width: 150px; height:150px;">
                <div class="">

                    <div class="">

                        <div class="w-full justify-between ">
                            <svg fill="@yield('Users.svg')" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 96 960 960" width="48">
                                <path
                                    d="M0 816v-53q0-38.567 41.5-62.784Q83 676 150.376 676q12.165 0 23.395.5Q185 677 196 678.652q-8 17.348-12 35.165T180 751v65H0Zm240 0v-65q0-32 17.5-58.5T307 646q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-19.861-3.5-37.431Q773 696 765 678.727q11-1.727 22.171-2.227 11.172-.5 22.829-.5 67.5 0 108.75 23.768T960 763v53H780Zm-480-60h360v-6q0-37-50.5-60.5T480 666q-79 0-129.5 23.5T300 751v5ZM149.567 646Q121 646 100.5 625.438 80 604.875 80 576q0-29 20.562-49.5Q121.125 506 150 506q29 0 49.5 20.5t20.5 49.933Q220 605 199.5 625.5T149.567 646Zm660 0Q781 646 760.5 625.438 740 604.875 740 576q0-29 20.562-49.5Q781.125 506 810 506q29 0 49.5 20.5t20.5 49.933Q880 605 859.5 625.5T809.567 646ZM480 576q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600 456q0 50-34.5 85T480 576Zm.351-60Q506 516 523 498.649t17-43Q540 430 522.851 413t-42.5-17Q455 396 437.5 413.149t-17.5 42.5Q420 481 437.351 498.5t43 17.5ZM480 756Zm0-300Z" />
                            </svg>
                        </div>
                    </div>

                    <div class="h-16 flex justify-center">

                        <div class="ml-2 flex justify-center">
                            <div class="my-auto">
                                <h1 class="text-5xl text-gray-900 font-semibold">100</h1>
                                <h3 class="text-sm text-gray-900 font-semibold ml-3">Meeting</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="exampleModalCenter1" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
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
                                <h5 class="text-sm font-medium text-neutral-800" id="exampleModalScrollableLabel"
                                    style="display: flex">
                                    Communication Type
                                    </h3>
                                    <button
                                        class="flex items-center whitespace-nowrap rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-gray-900 transition duration-150 ease-in-out motion-reduce:transition-none"
                                        style="border: 2px solid black;" type="button" id="dropdownMenuButton4"
                                        data-te-dropdown-toggle-ref aria-expanded="false" data-te-ripple-init
                                        data-te-ripple-color="light">
                                        Monthly Report
                                        <span class="ml-2 w-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                class="h-5 w-5">
                                                <path fill-rule="evenodd"
                                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                            </div>

                            <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                                aria-labelledby="dropdownMenuButton4" data-te-dropdown-menu-ref>
                                <li>
                                    <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                        href="#" data-te-dropdown-item-ref>Action</a>
                                </li>
                                <li>
                                    <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                        href="#" data-te-dropdown-item-ref>Another action</a>
                                </li>
                                <li>
                                    <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                        href="#" data-te-dropdown-item-ref>Something else here</a>
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
        id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
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