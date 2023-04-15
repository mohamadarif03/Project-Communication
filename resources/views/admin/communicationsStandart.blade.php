@extends('layouts.main')
@section('Communication.li', 'mm-active')
@section('Communication.a', 'active')
@section('Communication.svg', 'white')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid flex justify-between mt-3">

            <div class="">
                <button type="button" data-te-toggle="modal" data-te-target="#create" data-te-ripple-init
                    data-te-ripple-color="light"
                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">+
                    Add
                </button>
            </div>
            <div class="flex">
                <div class="">
                    <form class="d-flex" action="{{ url('communication-type') }}" method="get">
                        
                        <select id="countries" class="bg-gray-50 text-gray-900 text-sm rounded-lg block w-full p-2.5 px-4 mr-3 focus:outline-none">
                            {{-- <option selected>Choose a country</option> --}}
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                          </select>
                    </form>
                </div>

                <div class="">

                    <button type="button"
                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 flex"><svg
                            style="margin-right: 13px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>Search</button>
                </div>
            </div>

        </div>
        
        <div class="w-full flex">

            <div class="flex flex-col mx-auto rounded-lg" style="background-color: white; margin-top: 3%; width: 95%;">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden flex flex-col items-center justify-center p-4" id="table">
                            <table class="w-full">
                              <thead>
                                <th>
                                  <div class="bg-slate-300 h-6 rounded-sm animate-pulse w-full">
    
                                  </div>
                                </th>
                                <th>
                                  <div class="bg-slate-300 h-6 rounded-sm animate-pulse w-full">
    
                                  </div>
                                </th>
                                <th>
                                  <div class="bg-slate-300 h-6 rounded-sm animate-pulse w-full">
    
                                  </div>
                                </th>
                              </thead>
                              <tbody>
                                <tr class="mt-3">
                                  <td colspan="3">
                                    <div class="my-1.5 bg-slate-300 h-6 rounded-sm animate-pulse w-full"></div>
                                  </td>
                                </tr>
                                <tr class="">
                                  <td colspan="3">
                                    <div class="my-1.5 bg-slate-300 h-6 rounded-sm animate-pulse w-full"></div>
                                  </td>
                                </tr>
                                <tr class="">
                                  <td colspan="3">
                                    <div class="my-1.5 bg-slate-300 h-6 rounded-sm animate-pulse w-full"></div>
                                  </td>
                                </tr>
                                <tr class="">
                                  <td colspan="3">
                                    <div class="my-1.5 bg-slate-300 h-6 rounded-sm animate-pulse w-full"></div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- end container-fluid -->
        
    </div>
    <!--Modal Button-->
    <button type="button" id="btn-update-modal" data-te-toggle="modal" data-te-target="#update" data-te-ripple-init
        data-te-ripple-color="light" class="hidden w-0 h-0">+
    </button>
    <button type="button" id="btn-show-modal" data-te-toggle="modal" data-te-target="#show" data-te-ripple-init
        data-te-ripple-color="light" class="hidden w-0 h-0">+
    </button>
    <button type="button" id="btn-delete-modal" data-te-toggle="modal" data-te-target="#delete" data-te-ripple-init
        data-te-ripple-color="light" class="hidden w-0 h-0">+
    </button>
    <!--Modal Create-->
    <div data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="create" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
            <div
                class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none ">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
                    <!--Modal title-->
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                        Add Responsibilities Type
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

                <div class="relative p-4">
                    <div class="flex gap-4 items-center">
                        <label for="name" class=" mb-2 text-xs font-medium text-gray-900 ml-6">Name</label>
                        <input type="text" id="type"
                            class="ml-1 bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="Responsibilities Type">
                    </div>
                    
                    <div class="flex mt-2 gap-4 items-center">
                        <label for="color" class="mb-2 mr-1 text-xs font-medium text-gray-900 ml-6">Color</label>
                        <div class="flex rounded-md border ml-1"
                        style=" box-sizing: border-box; padding: 0; padding-left: 9px;">
                        <input type="text" class="border-r" id="put"
                        style="background-color: transparent; padding-right: 50px;" placeholder="#000000" disabled>
                        <input type="color" name="" id="color" onchange="fetch()">
                    </div>
                    </div>
                    <div class="flex gap-4 mt-2 items-center">
                        <label for="name" class=" mb-2 text-xs font-medium text-gray-900 ">Description</label>
                        <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:outline-none" placeholder="Description..."></textarea>
                    </div>
                    
                    <div class="flex gap-4 items-center mt-2">
                        <label for="name" class="mb-2 text-xs font-medium text-gray-900 ml-6">To</label>
                        <Select multiple id="to" name="role" class="w-full ml-4" value="2" placeholder="Role">
                            <option value="Test">Test</option>
                            <option value="Iya">Iya</option>
                        </Select>
                    </div>
                </div>
                <!--Modal footer-->
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
                    <button type="button" id="btn-close-modal"
                        class="inline-block rounded bg-yellow-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-yellow-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200"
                        data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                        Close
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

    <!--Modal Update-->
    <div data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="update" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
            <div
                class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none ">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
                    <!--Modal title-->
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                        Update Responsibilities Type
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
                <input type="hidden" id="update-id">

                <!--Modal body-->
                <div class="relative p-4">
                    <div class="flex gap-4 items-center">
                        <label for="update-name" class=" mb-2 text-xs font-medium text-gray-900 ml-6">Name</label>
                        <input type="text" id="update-name" value=""
                            class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="Role" required>
                    </div>
                    <div class="flex mt-2 gap-4 items-center">
                        <label for="color" class="mb-2 mr-1 text-xs font-medium text-gray-900 ml-6">Color</label>
                        <div class="flex rounded-md border"
                            style="box-sizing: border-box; padding: 0; padding-left: 9px;">
                            <input type="text" class="border-r" value="" id="put2"
                                style="background-color: transparent; padding-right: 50px;" disabled>
                            <input type="color" name="" value="" id="update-color" onchange="fetch()">
                        </div>
                    </div>
                    <div class="flex gap-4 mt-2 items-center">
                        <label for="name" class=" mb-2 text-xs font-medium text-gray-900 ">Description</label>
                        <textarea id="update-description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:outline-none" placeholder="Description..."></textarea>
                    </div>
                    <div class="flex gap-4 items-center mt-2">
                        <label for="name" class="mb-2 text-xs font-medium text-gray-900 ml-6">To</label>
                        <Select multiple id="to2" name="role" class="w-full ml-4" value="2" placeholder="Role">
                            <option value="Test">Test</option>
                            <option value="Iya">Iya</option>
                        </Select>
                    </div>
                </div>

                <!--Modal footer-->
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
                    <button type="button" id="btn-close-update"
                        class="inline-block rounded bg-yellow-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-yellow-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200"
                        data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                        Close
                    </button>
                    <button type="button" onclick="update()"
                        class="ml-1 inline-block rounded bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#B9AF25] transition duration-150 ease-in-out hover:bg-yellow-500 focus:bg-yellow-500 "
                        data-te-ripple-init data-te-ripple-color="light">
                        Update
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--Modal Update-->
    <div data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="show" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
            <div
                class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none ">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
                    <!--Modal title-->
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
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
                <input type="hidden" id="update-id">

                <!--Modal body-->
                <div class="relative p-4">
                        <p class="text-xs" id="show-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur magni iure repellendus voluptatem officiis obcaecati nulla, neque incidunt tenetur? Soluta modi quibusdam corrupti saepe distinctio aperiam assumenda ut doloribus in?</p>
                </div>

                <!--Modal footer-->
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
                    <button type="button" id="btn-close-update"
                        class="inline-block rounded bg-yellow-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-yellow-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200"
                        data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!--Modal Detail-->
    <div data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="detail" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
            <div
                class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none ">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
                    <!--Modal title-->
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                        Delete Responsibilities Type
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
                    <input type="hidden" class="hidden w-0 h-0" value="" id="delete-id">
                    <p>Are you sure you want to delete responsibilities <span id="responbilities-type"></span>?</p>
                </div>

                <!--Modal footer-->
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
                    <button type="button" id="btn-close-delete"
                        class="inline-block rounded bg-red-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-red-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200"
                        data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                        Close
                    </button>
                    <button type="button" onclick="remove()"
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
    <script src="{{ asset('js/pages/communication-type-standart.js') }}"></script>
@endsection
