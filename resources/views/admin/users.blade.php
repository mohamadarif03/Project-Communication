@extends('layouts.main')
@section('Users.li', 'mm-active')
@section('Users.a', 'active')
@section('Users.svg', 'white')
@section('content')
    <div class="content">

        <div class="filterUser container-fluid flex flex-col justify-between mt-3">

            <div class="">
                <button type="button" data-te-toggle="modal" data-te-target="#create" data-te-ripple-init
                    data-te-ripple-color="light"
                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">+
                    Add
                </button>
            </div>
            <div class="flex">
                <div class="flex">
                    <div class="mr-3">
                        <select id="search" name="search" class="bg-white block w-full px-4 py-2.5 text-sm leading-tight border-gray-300 rounded-md appearance-none focus:outline-none focus:border-yellow-500">
                            <option value="">All Role</option>
                         </select>
                    </div>
                    <div class="">
                        <button onclick="GetData()" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 flex">
                            <svg style="margin-right: 13px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="w-full flex flex-col">
        <div class="cardUser grid mx-3 gap-3 mt-4" id="Data">
            <div class="col-span-1 bg-slate-300 rounded-md animate-pulse h-36"></div>
            <div class="col-span-1 bg-slate-300 rounded-md animate-pulse h-36"></div>
            <div class="col-span-1 bg-slate-300 rounded-md animate-pulse h-36"></div>
            <div class="col-span-1 bg-slate-300 rounded-md animate-pulse h-36"></div>
            <div class="col-span-1 bg-slate-300 rounded-md animate-pulse h-36"></div>
            <div class="col-span-1 bg-slate-300 rounded-md animate-pulse h-36"></div>
        </div> 
        <div class="mx-auto mt-8" id="paginate">
            
        </div>
    </div>     
    <!--Modal Create-->
    <form action="/insertuser" method="post">
        @csrf
        <div data-te-modal-init
            class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
            id="create" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
            <div data-te-modal-dialog-ref
                class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-full translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)]">
                <div class="pointer-events-auto w-full md:w-[60%] relative flex mx-auto flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none "
                    style="">
                    <div
                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
                        <!--Modal title-->
                        <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                            Add Users
                        </h5>
                        <!--Close button-->
                        <button type="button"
                            id="btn-close-create"
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
                        <div>
                            <div class="mb-1.5 flex items-center gap-3">
                                <label for="name"
                                    class="w-36 mb-2 block text-sm font-medium text-gray-900 ">Name</label>
                                <input type="text" id="name" name="name"
                                    class="bg-gray-50 border border-gray-500 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    style="border-radius: 3px" placeholder="Name" required>
                            </div>
                            <div class="mb-1.5 flex items-center gap-3">
                                <label for="email"
                                    class="w-36 mb-2 block text-sm font-medium text-gray-900 ">Email</label>
                                <input type="email" id="email" name="email"
                                    class="bg-gray-50 border border-gray-500 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    style="border-radius: 3px" placeholder="Email" required>
                            </div>
                            <div class="mb-1.5 flex items-center gap-3">
                                <label for="password"
                                    class="w-36 mb-2 block text-sm font-medium text-gray-900 ">Password</label>
                                <input type="password" name="password" id="password"
                                    class="bg-gray-50 border border-gray-500 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    style="border-radius: 3px" placeholder="Password" required>
                            </div>
                            <div class="mb-1.5 flex items-center gap-3">
                                <label for="password_confirmation"
                                    class="w-36 mb-2 block text-sm font-medium text-gray-900 ">Password
                                    Confirmation</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="bg-gray-50 border border-gray-500 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    style="border-radius: 3px" placeholder="Password Confirmation" required>
                            </div>
                            <div class="mb-1.5 flex items-center gap-3">
                                <label for="role"
                                    class="w-36 mb-2 block text-sm font-medium text-gray-900 ">Role</label>
                                <Select multiple id="role" name="role" class="w-full" placeholder="Role">
                                    <option value=""></option>
                                </Select>
                            </div>
                        </div>

                    </div>



                    <!--Modal footer-->
                    <div
                        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
                        <button type="button" id="btn-close-modal"
                            class="btn-close inline-block rounded bg-yellow-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-yellow-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200"
                            data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                            Cancel
                        </button>
                        <button type="button" onclick="create()" class="ml-1 inline-block rounded bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#B9AF25] transition duration-150 ease-in-out hover:bg-yellow-500 focus:bg-yellow-500 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-yellow-500 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] " data-te-ripple-init data-te-ripple-color="light">
                            Save
                          </button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <button type="button" id="btn-update-modal" data-te-toggle="modal" data-te-target="#update" data-te-ripple-init
        data-te-ripple-color="light" class="w-0 h-0 hidden">+
    </button>
    <!--Modal Update-->
    <div data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="update" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-full translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)]">
            <div class="pointer-events-auto w-full md:w-[60%] relative flex mx-auto flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none "
                style="">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
                    <!--Modal title-->
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                        Edit Users
                    </h5>
                    <!--Close button-->
                    <button type="button"
                        id="btn-close-update"
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
                    <div>
                        <div class="mb-1.5 flex items-center gap-3">
                            <label for="update-name"
                                class="w-36 mb-2 block text-sm font-medium text-gray-900 ">Name</label>
                            <input type="text" id="update-name"
                                class="bg-gray-50 border border-gray-500 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                style="border-radius: 3px" placeholder="Name" required>
                        </div>
                        <div class="mb-1.5 flex items-center gap-3">
                            <label for="update-email"
                                class="w-36 mb-2 block text-sm font-medium text-gray-900 ">Email</label>
                            <input type="email" id="update-email"
                                class="bg-gray-50 border border-gray-500 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                style="border-radius: 3px" placeholder="Email" required>
                        </div>
                        <div class="mb-1.5 flex items-center gap-3">
                            <label for="update-password"
                                class="w-36 mb-2 block text-sm font-medium text-gray-900 ">Password</label>
                            <input type="password" id="update-password"
                                class="bg-gray-50 border border-gray-500 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                style="border-radius: 3px" placeholder="Password" required>
                        </div>
                        <div class="mb-1.5 flex items-center gap-3">
                            <label for="update-password_confirmation"
                                class="w-36 mb-2 block text-sm font-medium text-gray-900 ">Password Confirmation</label>
                            <input type="password" id="update-password_confirmation"
                                class="bg-gray-50 border border-gray-500 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                style="border-radius: 3px" placeholder="Password Confirmation" required>
                        </div>
                        <div class="mb-1.5 flex items-center gap-3" id="update-role-form">
                            <label for="role"
                                class="w-36 mb-2 block text-sm font-medium text-gray-900 ">Role</label>
                            <Select multiple id="update-role" name="role" value="2" class="w-full" placeholder="Role">
                                <option value=""></option>
                            </Select>
                        </div>
                        <input type="hidden" name="hidden w-0 h-0" id="update-id">
                    </div>
                </div>

                <!--Modal footer-->
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
                    <button type="button" id="btn-close-modal1"
                        class="btn-close inline-block rounded bg-yellow-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-yellow-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200"
                        data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                        Cancel
                    </button>
                    <button type="submit"
                    onclick="update()"
                        class="ml-1 inline-block rounded bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#B9AF25] transition duration-150 ease-in-out hover:bg-yellow-500 focus:bg-yellow-500 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-yellow-500 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] "
                        id="btn-next">
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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!--Modal body-->
                <div class="relative p-4">
                    <input type="hidden" id="delete-id" class="hidden w-0 h-0" value="">
                    <p>Are you sure you want to delete this user <span id="delete-name"></span> ?</p>
                </div>

                <!--Modal footer-->
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
                    <button type="button"
                    id="btn-close-modal-delete"
                        class="btn-close-delete-hover inline-block rounded bg-red-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-red-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200"
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
    <script src="{{ asset('js/pages/user.js') }}"></script>
@endsection
