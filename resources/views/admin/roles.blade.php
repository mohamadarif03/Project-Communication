@extends('layouts.main')
@section('Roles.li','mm-active')
@section('Roles.a','active')

@section('content')
<div class="content">

  <div class="container-fluid flex flex-col md:flex-row justify-evenly md:justify-between mt-3">

    <div class="">
        <button type="button" data-te-toggle="modal" data-te-target="#create" data-te-ripple-init
            data-te-ripple-color="light"
            class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">+
            Add
        </button>
    </div>
    <div class="flex grid grid-cols-2">
      <input type="text" id="search" name="search" placeholder="Name" class="focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 flex">
      <button onclick="GetData()" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 flex">
          <svg style="margin-right: 13px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
      </svg>Search</button>
  </div>
  </div>
    <!-- end container-fluid -->
    <div class="w-full flex flex-col">

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
        <div class="mx-auto mt-8" id="paginate">
        </div>
    </div>
</div>

<button type="button"
  id="btn-update-modal"
  data-te-toggle="modal"
  data-te-target="#update"
  data-te-ripple-init
  data-te-ripple-color="light"
  class="hidden w-0 h-0">+
</button>
<button type="button"
  id="btn-delete-modal"
  data-te-toggle="modal"
  data-te-target="#delete"
  data-te-ripple-init
  data-te-ripple-color="light"
  class="hidden w-0 h-0">+
</button>
<!--Modal Create-->
<div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="create"
  tabindex="-1"
  aria-labelledby="exampleModalCenterTitle"
  aria-modal="true"
  role="dialog">
  <div data-te-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
    <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none ">
      <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
        <!--Modal title-->
        <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
          Add Roles
        </h5>
        <!--Close button-->
        <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!--Modal body-->
      <div class="relative p-4">
        <div class="flex gap-4 items-center">
          <label for="name" class=" mb-2 text-sm font-medium text-gray-900 ">Name</label>
          <input type="text" id="name" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Role" required>
        </div>
      </div>

      <!--Modal footer-->
      <div
        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
        <button type="button" id="btn-close-add" class="btn-close inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-yellow-500 transition duration-150 ease-in-out focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200" data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
          Close
        </button>
        <button type="button" onclick="create()" class="ml-1 inline-block rounded bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#B9AF25] transition duration-150 ease-in-out hover:bg-yellow-500 focus:bg-yellow-500 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-yellow-500 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]" data-te-ripple-init data-te-ripple-color="light">
          Save
        </button>
      </div>
    </div>
  </div>
</div>

<!--Modal Update-->
<div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="update"
  tabindex="-1"
  aria-labelledby="exampleModalCenterTitle"
  aria-modal="true"
  role="dialog">
  <div data-te-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
    <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none ">
      <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
        <!--Modal title-->
        <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
          Update Role
        </h5>
        <!--Close button-->
        <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!--Modal body-->
      <div class="relative p-4">
        <form class="flex gap-4 items-center">
          <input type="hidden" class="w-0 h-0 hidden" value="" id="update-id">
          <label for="update-name" class=" mb-2 text-sm font-medium text-gray-900 ">Name</label>
          <input type="text" id="update-name" value="" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Role" required>
        </form>
      </div>

      <!--Modal footer-->
      <div
        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
        <button type="button" id="btn-close-update" class="btn-close inline-block rounded bg-yellow-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-yellow-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200" data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
          Close
        </button>
        <button type="button" onclick="update()" class="ml-1 inline-block rounded bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#B9AF25] transition duration-150 ease-in-out hover:bg-yellow-500 focus:bg-yellow-500 " data-te-ripple-init data-te-ripple-color="light">
          Save
        </button>
      </div>
    </div>
  </div>
</div>

<!--Modal Delete-->
<div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="delete"
  tabindex="-1"
  aria-labelledby="exampleModalCenterTitle"
  aria-modal="true"
  role="dialog">
  <div data-te-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
    <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none ">
      <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
        <!--Modal title-->
        <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
          Delete Role
        </h5>
        <!--Close button-->
        <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!--Modal body-->
      <div class="relative p-4">
        <input type="hidden" class="hidden w-0 h-0" value="" id="delete-id">
        <p>Are you sure you want to delete role <span id="roles-name"></span>?</p>
      </div>

      <!--Modal footer-->
      <div
        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
        <button type="button" id="btn-close-delete" class="btn-close-delete-hover inline-block rounded bg-red-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-red-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200" data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
          Close
        </button>
        <button onclick="remove()" type="button" class="ml-1 inline-block rounded bg-red-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#C43B19] transition duration-150 ease-in-out hover:bg-red-500 focus:bg-red-500 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-red-500" data-te-ripple-init data-te-ripple-color="light">
          Delete
        </button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('javascript')
<script src="{{asset('js/pages/role.js')}}"></script>
@endsection