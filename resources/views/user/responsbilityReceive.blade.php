@extends('layouts.user')
@section('Responsbility.li', 'mm-active')
@section('Responsbility.b', 'active')
@section('Responsbility.svg', 'white')
@section('content')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid flex flex-col md:flex-row justify-evenly md:justify-between mt-3">
        <div class="">
            <button type="button" data-te-toggle="modal" id="btn-open-crate-step-1" data-te-target="#create-step-1"
                data-te-ripple-init data-te-ripple-color="light"
                class="hidden focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-xs px-5 py-2.5 mr-2 mb-2">+
                Add
            </button>
        </div>
        <div class="filterResponsbility grid">
            <div class="relative mr-2 col-span-1">
                <select id="year" name="year" class="bg-white block w-full px-4 py-2 text-sm leading-tight border-gray-300 rounded-md appearance-none focus:outline-none focus:border-yellow-500">
                    <option value="-1">All Years</option>
                </select>
            </div>
            <div class="relative mr-2 col-span-1">
                <select id="month" name="month" class="bg-white block w-full px-4 py-2 text-sm leading-tight border-gray-300 rounded-md appearance-none focus:outline-none focus:border-yellow-500">
                    <option value="-1">All Month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
            <div class="relative mr-2 col-span-1">
                <select id="comtype" name="comtype" class="bg-white block w-full px-4 py-2 text-sm leading-tight border-gray-300 rounded-md appearance-none focus:outline-none focus:border-yellow-500">
                    <option value="-1">All Type</option>
                </select>
            </div>
            <div class="relative mr-2 col-span-1">
                <select id="status" name="status" class="bg-white block w-full px-4 py-2 text-sm leading-tight border-gray-300 rounded-md appearance-none focus:outline-none focus:border-yellow-500">
                   <option value="-1">All Status</option>
                   <option value="done">Complete</option>
                   <option value="progress">Uncomplete</option>
                </select>
            </div>
            <div class="dropCol col-span-1"></div> 
            <div class="dropCol col-span-1"></div> 
            <div class="dropCol col-span-1"></div> 

            
            <button type="button" onclick="search()"
                    class="col-span-1 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-xs mr-2 mb-2 flex items-center justify-center" style="height: 35px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search md:mr-2" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>Search
                </button>
        </div>
        

    </div>
    <!-- end container-fluid -->
    
    <div class="cardSent grid" style="margin-top: 10px" id="Receive">
        <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
        <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
        <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
    </div>
    <div class="mx-auto" id="pagination-receive">
    </div>
</div>
   
    <div data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="create-step-1" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-full translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)]">
            <div class="pointer-events-auto w-full md:w-[60%] relative flex mx-auto flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none "
                style="">
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
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div>
                            <ol class="relative ml-4 pb-0 mb-0 text-gray-500 border-l border-gray-200">
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                        1
                                    </span>
                                    <h3 class="font-medium text-xl leading-tight">Task</h3>
                                    <p class="text-sm">type of task</p>
                                </li>
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex text-yellow-500 border-yellow-500 border items-center justify-center w-8 h-8 bg-yellow-50 rounded-lg -left-4 ring-4 ring-white ">
                                        2
                                    </span>
                                    <h3 class="font-medium text-xl leading-tight">Date</h3>
                                    <p class="text-sm">task creation date</p>
                                </li>
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex text-yellow-500 border-yellow-500 border items-center justify-center w-8 h-8 bg-yellow-50 rounded-lg -left-4 ring-4 ring-white ">
                                        3
                                    </span>
                                    <h3 class="font-medium text-xl leading-tight">Files / Links</h3>
                                    <p class="text-sm">attachment files or links</p>
                                </li>
                            </ol>
                        </div>
                        <div>
                            <div class="">
                                <label for="type" class=" mb-2 text-sm font-medium text-gray-900">Task
                                    Type</label>
                                <Select id="type" name="type" class="" placeholder="Choose Type">
                                    <option value=""></option>
                                </Select>
                            </div>
                            <div class="" id="to-form">
                                <label for="to"
                                    class="w-36 mb-2 block text-xs font-medium text-gray-900 mt-3">To</label>
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
            <div class="pointer-events-auto w-full md:w-[60%] relative flex mx-auto flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none "
                style="">
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
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div>
                            <ol class="relative ml-4 pb-0 mb-0 text-gray-500 border-l border-gray-200">
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                        1
                                    </span>
                                    <h3 class="font-medium text-xl leading-tight">Task</h3>
                                    <p class="text-sm">type of task</p>
                                </li>
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                        2
                                    </span>
                                    <h3 class="font-medium text-xl leading-tight">Date</h3>
                                    <p class="text-sm">task creation date</p>
                                </li>
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex text-yellow-500 border-yellow-500 border items-center justify-center w-8 h-8 bg-yellow-50 rounded-lg -left-4 ring-4 ring-white ">
                                        3
                                    </span>
                                    <h3 class="font-medium text-xl leading-tight">Files / Links</h3>
                                    <p class="text-sm">attachment files or links</p>
                                </li>
                            </ol>
                        </div>
                        <div>
                            <div class="">
                                <label for="project" class=" mb-2 text-sm font-medium">Date</label><br>
                                <input type="date"
                                    class="peer block min-h-[auto] w-full rounded border-2 bg-neutral-100 px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear"
                                    placeholder="Task" id="date" aria-label="" />

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
                    <button type="button" id="btn-close-modal-create-step-2" data-te-modal-dismiss data-te-ripple-init
                        data-te-ripple-color="light" class="hidden">
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
            <div class="pointer-events-auto w-full md:w-[60%] relative flex mx-auto flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none "
                style="">
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
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div>
                            <ol class="relative ml-4 pb-0 mb-0 text-gray-500 border-l border-gray-200">
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                        1
                                    </span>
                                    <h3 class="font-medium text-xl leading-tight">Task</h3>
                                    <p class="text-sm">type of task</p>
                                </li>
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                        2
                                    </span>
                                    <h3 class="font-medium text-xl leading-tight">Date</h3>
                                    <p class="text-sm">task creation date</p>
                                </li>
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                        3
                                    </span>
                                    <h3 class="font-medium text-xl leading-tight">Files / Links</h3>
                                    <p class="text-sm">attachment files or links</p>
                                </li>
                            </ol>
                        </div>
                        <div>
                            <div class="">
                                <label for="project" class=" mb-2 text-sm font-medium">Files</label><br>
                                <input type="file"
                                    class="peer block min-h-[auto] w-full rounded border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear"
                                    placeholder="Task" id="file" aria-label="" />

                            </div>
                            <div class="mt-3">
                                <label for="project" class=" mb-2 text-sm font-medium">Link</label><br>
                                <input type="Links"
                                    class="peer block min-h-[auto] w-full rounded border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear"
                                    placeholder="Http://" id="link" aria-label="" />

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
                    <button type="button" onclick="create()"
                        class="ml-1 inline-block rounded bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#B9AF25] transition duration-150 ease-in-out hover:bg-yellow-500 focus:bg-yellow-500 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-yellow-500 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] "
                        data-te-ripple-init data-te-ripple-color="light">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="show" tabindex="-1" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative h-[calc(100%-1rem)] w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
            <div
                class="pointer-events-auto relative flex max-h-[100%] w-full flex-col overflow-hidden rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-2 dark:border-opacity-50">
                    <!--Modal title-->
                    <h5 class="text-lg font-bold leading-normal text-neutral-800" id="exampleModalScrollableLabel">
                        Detail
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

                <div class="relative overflow-y-auto p-4">
                    <p class="font-bold leading-normal" id="exampleModalScrollableLabel">
                        Description
                    </p>
                    <p id="show-detail"></p>

                    <p class="font-bold leading-normal" id="exampleModalScrollableLabel">
                        How
                    </p>
                    <p id="show-how"></p>
                    {{-- <a href="" id="show-file" target="_blank"></a> --}}
                    
                </div>

                <!--Modal footer-->
                
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-1">
                    <a href="" id="show-link" target="_blank">
                        <button type="button"  class="flex inline-block rounded bg-yellow-400 hover:bg-yellow-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white" style="margin: 7px"
                        data-te-ripple-init data-te-ripple-color="light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="font-bold bi bi-link-45deg" viewBox="0 0 16 16">
                            <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                            <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                          </svg>Open Link
                        </button>
                        </a>
                        <a href="" id="show-file" target="_blank">
                            <button type="button"  class="flex inline-block rounded bg-yellow-400 hover:bg-yellow-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white" style="margin: 7px"
                            data-te-ripple-init data-te-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="font-bold mr-1 bi bi-download" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                              </svg>
                                Download File
                            </button>
                        </a>
                        <button type="button"
                        class="btn-hover col-span-1 text-black focus:ring-yellow-300 font-medium rounded-lg text-xs px-6 py-2.5 mr-2 flex items-center"
                        data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light"
                        style="border: 2px solid #828282; color:#828282; margin: 7px">
                        Close
                </button>

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
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100">
                    <!--Modal title-->
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 ml-3" id="exampleModalScrollableLabel">
                        Confirmation
                    </h5>

                </div>

                <!--Modal body-->
                <div class="relative p-4">
                    <input type="hidden" class="hidden w-0 h-0" value="" id="check-id">
                    <p>are you sure that you have done ?</p>
                </div>

                <!--Modal footer-->
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-2">
                    <button type="button" id="btn-close"
                        class="inline-block rounded bg-white px-6 py-2 text-xs font-medium uppercase leading-normal text-gray-900 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200"
                        data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light"
                        style="border: 2px solid #4F4F4F">
                        Close
                    </button>
                    <button type="button" onclick="check()"
                        class="ml-1 inline-block rounded bg-green-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white"
                        data-te-ripple-init data-te-ripple-color="light">
                        i'm sure
                    </button>
                </div>
            </div>
        </div>
    </div>
<input type="hidden" value="receive" id="check">

@endsection

@section('javascript')
    <script src="{{ asset('js/pages/responsbility.js') }}"></script>
@endsection
@section('styling-page')
<link rel="stylesheet" href="{{asset ('css/responsbility.css')}}">
@endsection