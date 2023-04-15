@extends('layouts.main')
@section('Setting.svg', 'white')
@section('content')
    <div class="content">
        <div class="container-fluid flex justify-between mt-3">

            <div class="">
                <button type="button" data-te-toggle="modal" data-te-target="#create" data-te-ripple-init
                    data-te-ripple-color="light"
                    id="btn-create"
                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">+
                    Add
                </button>
            </div>
            <div class="flex">
                <div class="">
                    <select placeholder="all" id="search"
                        class="bg-gray-50 text-gray-900 text-sm rounded-lg block min-w-24 p-2.5 px-4 mr-3 focus:outline-none">
                        <option value="">All Type</option>
                    </select>
                </div>

                <div class="">

                    <button type="button" onclick="GetData()"
                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 flex"><svg
                            style="margin-right: 13px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>Search</button>
                </div>
            </div>

        </div>
        <!-- end container-fluid -->
        <div class="grid mx-3 gap-3 grid-cols-3 mt-4" id="Data">
        </div>


        <button type="button" id="btn-open-modal-create1" data-te-toggle="modal" data-te-target="#create1"
            data-te-ripple-init data-te-ripple-color="light" class="w-0 h-0 hidden">+
        </button>
        <!--Modal Create-->
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
                            Add Rule
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
                                        <h3 class="font-medium leading-tight">Detail</h3>
                                        <p class="text-sm">Name and Type of Communication</p>
                                    </li>
                                    <li class="mb-10 ml-6">
                                        <span
                                            class="absolute flex text-yellow-500 border-yellow-500 border items-center justify-center w-8 h-8 bg-yellow-50 rounded-lg -left-4 ring-4 ring-white ">
                                            2
                                        </span>
                                        <h3 class="font-medium leading-tight">To</h3>
                                        <p class="text-sm">The Receiver of The Communication</p>
                                    </li>
                                </ol>
                            </div>
                            <div>
                                <div class="">
                                    <label for="type" class=" mb-2 text-sm font-medium text-gray-900 ">Communication
                                        Type</label>
                                    <select id="type" class="" placeholder="Choose type">
                                        <option></option>
                                    </select>

                                </div>
                                <div class="mt-1.5">
                                    <label for="type" class=" mb-2 block text-sm font-medium text-gray-900 ">How</label>
                                    <input type="text" id="how"
                                        class="bg-white border border-gray-500 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        style="border-radius: 3px" placeholder="How" required>
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
                            id="btn-next">
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
                            Add Rule
                        </h5>
                        <!--Close button-->
                        <button type="button"
                           id="btn-close-create"
                            class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                            data-te-modal-dismiss aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
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
                                        <h3 class="font-medium leading-tight">Detail</h3>
                                        <p class="text-sm">Name and Type of Communication</p>
                                    </li>
                                    <li class="mb-10 ml-6">
                                        <span
                                            class="absolute flex text-white  items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white ">
                                            2
                                        </span>
                                        <h3 class="font-medium leading-tight">To</h3>
                                        <p class="text-sm">The Receiver of The Communication</p>
                                    </li>
                                </ol>
                            </div>
                            <div>
                                <div class="">
                                    <label for="To" class=" mb-2 text-sm font-medium text-gray-900 ">To</label>
                                    <Select multiple id="To" name="To" class="" placeholder="To Who">
                                        <option value=""></option>
                                    </Select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Modal footer-->
                    <div
                        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
                        <button id="btn-back" type="button"
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

        <button type="button" id="btn-update-modal" data-te-toggle="modal" data-te-target="#update" data-te-ripple-init
            data-te-ripple-color="light" class="w-0 h-0 hidden">+
        </button>
        <button type="button" id="btn-open-modal-update1" data-te-toggle="modal" data-te-target="#update1"
            data-te-ripple-init data-te-ripple-color="light" class="w-0 h-0 hidden">+
        </button>
        <!--Modal Update-->
        <div data-te-modal-init
            class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
            id="update" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
            <div data-te-modal-dialog-ref
                class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-full translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)]">
                <div class="pointer-events-auto relative flex mx-auto flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none "
                    style="width: 60%">
                    <div
                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
                        <!--Modal title-->
                        <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                            Edit Rule
                        </h5>
                        <!--Close button-->
                        <button type="button"
                            class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                            data-te-modal-dismiss aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
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
                                        <h3 class="font-medium leading-tight">Detail</h3>
                                        <p class="text-sm">Name and Type of Communication</p>
                                    </li>
                                    <li class="mb-10 ml-6">
                                        <span
                                            class="absolute flex text-yellow-500 border-yellow-500 border items-center justify-center w-8 h-8 bg-yellow-50 rounded-lg -left-4 ring-4 ring-white ">
                                            2
                                        </span>
                                        <h3 class="font-medium leading-tight">To</h3>
                                        <p class="text-sm">The Receiver of The Communication</p>
                                    </li>
                                </ol>
                            </div>
                            <div>
                                <div class="" id="update-type-form">
                                    <input type="hidden" class="w-0 h-0 hidden" id="update-id" value="">
                                    <label for="update-type"
                                        class=" mb-2 text-sm font-medium text-gray-900 ">Communication Type</label>
                                    <Select id="update-type" name="type" class="" placeholder="Choose Type">
                                        <option value=""></option>
                                    </Select>
                                </div>
                                <div class="mt-1.5">
                                    <label for="update-how"
                                        class=" mb-2 block text-sm font-medium text-gray-900 ">How</label>
                                    <input type="text" id="update-how"
                                        class="bg-white border border-gray-500 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        style="border-radius: 3px" placeholder="How" required>
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
                            id="btn-next2">
                            Next
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal 2-->
        <div data-te-modal-init
            class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
            id="update1" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
            <div data-te-modal-dialog-ref
                class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-full translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)]">
                <div class="pointer-events-auto relative flex mx-auto flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none "
                    style="width: 60%">
                    <div
                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
                        <!--Modal title-->
                        <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                            Edit Rule
                        </h5>
                        <!--Close button-->
                        <button type="button"
                            id="btn-close-update"
                            class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                            data-te-modal-dismiss aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
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
                                        <h3 class="font-medium leading-tight">Detail</h3>
                                        <p class="text-sm">Name and Type of Communication</p>
                                    </li>
                                    <li class="mb-10 ml-6">
                                        <span
                                            class="absolute flex text-white  items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white ">
                                            2
                                        </span>
                                        <h3 class="font-medium leading-tight">To</h3>
                                        <p class="text-sm">The Receiver of The Communication</p>
                                    </li>
                                </ol>
                            </div>
                            <div>
                                <div class="" id="update-to-form">
                                    <label for="update-to" class=" mb-2 text-sm font-medium text-gray-900 ">To</label>
                                    <Select multiple id="update-to" name="To2" class="" placeholder="To Who">
                                        <option value=""></option>
                                    </Select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Modal footer-->
                    <div
                        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
                        <button type="button" id="btn-back2"
                            class="inline-block rounded bg-yellow-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-yellow-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200"
                            data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                            Back
                        </button>
                        <button type="button"
                            onclick="update()"
                            class="ml-1 inline-block rounded bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#B9AF25] transition duration-150 ease-in-out hover:bg-yellow-500 focus:bg-yellow-500 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-yellow-500 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] "
                            data-te-ripple-init data-te-ripple-color="light">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <button type="button" id="btn-delete-modal" data-te-toggle="modal" data-te-target="#delete" data-te-ripple-init
            data-te-ripple-color="light" class="w-0 h-0 hidden">+
        </button>
        <!--Modal Delete-->
        <div data-te-modal-init
            class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
            id="delete" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
            <div data-te-modal-dialog-ref
                class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                <div
                    class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none ">
                    <div
                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
                        <!--Modal title-->
                        <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                            Delete Role
                        </h5>
                        <!--Close button-->
                        <button type="button"
                            id="btn-close-delete"
                            class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                            data-te-modal-dismiss aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!--Modal body-->
                    <div class="relative p-4">
                        <input type="hidden" class="w-0 h-0 hidden" id="delete-id" value="">
                        <p>Are you sure you want to delete this rules?</p>
                    </div>

                    <!--Modal footer-->
                    <div
                        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
                        <button type="button"
                            class="inline-block rounded bg-red-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-red-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200"
                            data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                            Close
                        </button>
                        <button type="button"
                            onclick="remove()"
                            class="ml-1 inline-block rounded bg-red-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#C43B19] transition duration-150 ease-in-out hover:bg-red-500 focus:bg-red-500 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-red-500"
                            data-te-ripple-init data-te-ripple-color="light">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('javascript')
        <script src="{{ asset('js/pages/rule.js') }}"></script>
    @endsection
