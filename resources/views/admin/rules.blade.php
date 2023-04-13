@extends('layouts.main')
@section('Setting.svg','white')
@section('content')
<div class="content">

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
    <!-- end container-fluid -->
    <div class="grid mx-3 gap-3 grid-cols-3 mt-4">
        @foreach ($rule as $row)
            
        <div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">
            <div class="h-8 p-2 items-center w-full flex" data-te-dropdown-ref>
                <button class="ml-auto h-5 w-5 rounded-circle bg-transparent" data-te-dropdown-toggle-ref aria-expanded="false" data-te-ripple-init data-te-ripple-color="light">
                    <svg class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>
                </button>
                <ul class="absolute z-[1000] float-left border-2 m-0 hidden min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                    aria-labelledby="dropdownMenuButton1" data-te-dropdown-menu-ref>
                    <li>
                            <button class="btn-edit flex items-center" data-name="Larry" data-color="#00ffff">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                                <p>Edit</p>
                            </button>         
                        </li>
                        <li>
                            <button class="btn-delete flex items-center" data-color="Larry">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                </svg>
                                <p>Delete</p>
                            </button>
                        </li>
                </ul>           
            </div>
            <div class="h-16 flex p-2 items-center w-full ">
                <div class="h-12 flex w-12 rounded-circle" style="background-color: {{$row->communicationType->color}}">
                    <p class="text-white m-auto font-semibold">FE</p>
                </div>
                <div class="ml-2 flex my-auto">
                    <div class="my-auto">
                        <h1 class="text-md font-semibold">{{$row->communicationType->type}}</h1>
                        <h3 class="text-sm">{{$row->how}}</h3>
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
        @endforeach

        
        
    </div>


<button type="button"
    id="btn-open-modal-create1"
    data-te-toggle="modal"
    data-te-target="#create1"
    data-te-ripple-init
    data-te-ripple-color="light"
    class="w-0 h-0 hidden">+
</button>
<!--Modal Create-->
<div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
id="create"
tabindex="-1"
aria-labelledby="exampleModalCenterTitle"
aria-modal="true"
role="dialog">
    <div data-te-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-full translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)]">
      <div class="pointer-events-auto relative flex mx-auto flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none " style="width: 60%">
        <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
            <!--Modal title-->
            <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                Add Communication Type
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
            <div class="grid grid-cols-2">
                <div>
                    <ol class="relative ml-4 pb-0 mb-0 text-gray-500 border-l border-gray-200">                  
                        <li class="mb-10 ml-6">            
                            <span class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                1
                            </span>
                            <h3 class="font-medium leading-tight">Detail</h3>
                            <p class="text-sm">Name and Type of Communication</p>
                        </li>
                        <li class="mb-10 ml-6">
                            <span class="absolute flex text-yellow-500 border-yellow-500 border items-center justify-center w-8 h-8 bg-yellow-50 rounded-lg -left-4 ring-4 ring-white ">
                                2
                            </span>
                            <h3 class="font-medium leading-tight">To</h3>
                            <p class="text-sm">The Receiver of The Communication</p>
                        </li>
                    </ol>
                </div>
                <div>
                    <div class="">
                        <label for="type" class=" mb-2 text-sm font-medium text-gray-900 ">Commication Type</label>
                        <Select id="communication_type_id" name="communication_type_id" class="" placeholder="Choose Type">
                            <option value=""></option>
                            @foreach ($data as $row)
                            <option value="{{$row->id}}">{{$row->type}}</option>
                            @endforeach
                        </Select>
                    </div>
                    <div class="mt-1.5">
                        <label for="type" class=" mb-2 block text-sm font-medium text-gray-900 ">How</label>
                        <input type="text" id="how" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" style="border-radius: 3px" placeholder="How" required>
                    </div>
                </div>
            </div>     
        </div>

        <!--Modal footer-->
        <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
            <button type="button" id="btn-close-modal1" class="inline-block rounded bg-yellow-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-yellow-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200" data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                Cancel
            </button>
            <button type="button" class="ml-1 inline-block rounded bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#B9AF25] transition duration-150 ease-in-out hover:bg-yellow-500 focus:bg-yellow-500 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-yellow-500 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] " id="btn-next">
                Next
            </button>
        </div>
      </div>
    </div>
</div>

<!--Modal 2-->
<div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
id="create1"
tabindex="-1"
aria-labelledby="exampleModalCenterTitle"
aria-modal="true"
role="dialog">
    <div data-te-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-full translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)]">
      <div class="pointer-events-auto relative flex mx-auto flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none " style="width: 60%">
        <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
            <!--Modal title-->
            <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                Add Communication Type
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
            <div class="grid grid-cols-2">
                <div>
                    <ol class="relative ml-4 pb-0 mb-0 text-gray-500 border-l border-gray-200">                  
                        <li class="mb-10 ml-6">            
                            <span class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                1
                            </span>
                            <h3 class="font-medium leading-tight">Detail</h3>
                            <p class="text-sm">Name and Type of Communication</p>
                        </li>
                        <li class="mb-10 ml-6">
                            <span class="absolute flex text-white  items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white ">
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
                            <option value="Marketing Manager">Marketing Manager</option>
                            <option value="Sales">Sales</option>
                        </Select>
                    </div>
                </div>
            </div>     
        </div>

        <!--Modal footer-->
        <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
            <button id="btn-back" type="button" class="inline-block rounded bg-yellow-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-yellow-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200" data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                Back
            </button>
            <button type="button" onclick="create()" class="ml-1 inline-block rounded bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#B9AF25] transition duration-150 ease-in-out hover:bg-yellow-500 focus:bg-yellow-500 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-yellow-500 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] " data-te-ripple-init data-te-ripple-color="light">
                Save
            </button>
        </div>
      </div>
    </div>
</div>

<button type="button"
    id="btn-update-modal"
    data-te-toggle="modal"
    data-te-target="#update"
    data-te-ripple-init
    data-te-ripple-color="light"
    class="w-0 h-0 hidden">+
</button>
<button type="button"
    id="btn-open-modal-update1"
    data-te-toggle="modal"
    data-te-target="#update1"
    data-te-ripple-init
    data-te-ripple-color="light"
    class="w-0 h-0 hidden">+
</button>
<!--Modal Create-->
<div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
id="update"
tabindex="-1"
aria-labelledby="exampleModalCenterTitle"
aria-modal="true"
role="dialog">
    <div data-te-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-full translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)]">
      <div class="pointer-events-auto relative flex mx-auto flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none " style="width: 60%">
        <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
            <!--Modal title-->
            <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                Add Communication Type
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
            <div class="grid grid-cols-2">
                <div>
                    <ol class="relative ml-4 pb-0 mb-0 text-gray-500 border-l border-gray-200">                  
                        <li class="mb-10 ml-6">            
                            <span class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                1
                            </span>
                            <h3 class="font-medium leading-tight">Detail</h3>
                            <p class="text-sm">Name and Type of Communication</p>
                        </li>
                        <li class="mb-10 ml-6">
                            <span class="absolute flex text-yellow-500 border-yellow-500 border items-center justify-center w-8 h-8 bg-yellow-50 rounded-lg -left-4 ring-4 ring-white ">
                                2
                            </span>
                            <h3 class="font-medium leading-tight">To</h3>
                            <p class="text-sm">The Receiver of The Communication</p>
                        </li>
                    </ol>
                </div>
                <div>
                    <div class="">
                        <label for="type" class=" mb-2 text-sm font-medium text-gray-900 ">Communication Type</label>
                        <Select id="type2" name="type" class="" placeholder="Choose Type">
                            <option value=""></option>
                            <option value="Monthly Report">Monthly Report</option>
                            <option value="Quarter Report">Quarter Report</option>
                        </Select>
                    </div>
                    <div class="mt-1.5">
                        <label for="type" class=" mb-2 block text-sm font-medium text-gray-900 ">How</label>
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" style="border-radius: 3px" placeholder="How" required>
                    </div>
                </div>
            </div>     
        </div>

        <!--Modal footer-->
        <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
            <button type="button" id="btn-close-modal2" class="inline-block rounded bg-yellow-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-yellow-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200" data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                Cancel
            </button>
            <button type="button" class="ml-1 inline-block rounded bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#B9AF25] transition duration-150 ease-in-out hover:bg-yellow-500 focus:bg-yellow-500 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-yellow-500 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] " id="btn-next2">
                Next
            </button>
        </div>
      </div>
    </div>
</div>

<!--Modal 2-->
<div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
id="update1"
tabindex="-1"
aria-labelledby="exampleModalCenterTitle"
aria-modal="true"
role="dialog">
    <div data-te-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-full translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)]">
      <div class="pointer-events-auto relative flex mx-auto flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none " style="width: 60%">
        <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
            <!--Modal title-->
            <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                Add Communication Type
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
            <div class="grid grid-cols-2">
                <div>
                    <ol class="relative ml-4 pb-0 mb-0 text-gray-500 border-l border-gray-200">                  
                        <li class="mb-10 ml-6">            
                            <span class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                1
                            </span>
                            <h3 class="font-medium leading-tight">Detail</h3>
                            <p class="text-sm">Name and Type of Communication</p>
                        </li>
                        <li class="mb-10 ml-6">
                            <span class="absolute flex text-white  items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white ">
                                2
                            </span>
                            <h3 class="font-medium leading-tight">To</h3>
                            <p class="text-sm">The Receiver of The Communication</p>
                        </li>
                    </ol>
                </div>
                <div>
                    <div class="">
                        <label for="To2" class=" mb-2 text-sm font-medium text-gray-900 ">To</label>
                        <Select multiple id="To2" name="To2" class="" placeholder="To Who">
                            <option value=""></option>
                            <option value="Marketing Manager">Marketing Manager</option>
                            <option value="Sales">Sales</option>
                        </Select>
                    </div>
                </div>
            </div>     
        </div>

        <!--Modal footer-->
        <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
            <button type="button" id="btn-back2" class="inline-block rounded bg-yellow-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-yellow-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200" data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                Back
            </button>
            <button type="button" class="ml-1 inline-block rounded bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#B9AF25] transition duration-150 ease-in-out hover:bg-yellow-500 focus:bg-yellow-500 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-yellow-500 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] " data-te-ripple-init data-te-ripple-color="light">
                Save
            </button>
        </div>
      </div>
    </div>
</div>

<button type="button"
    id="btn-delete-modal"
    data-te-toggle="modal"
    data-te-target="#delete"
    data-te-ripple-init
    data-te-ripple-color="light"
    class="w-0 h-0 hidden">+
</button>
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
        <p>Are you sure you want to delete this rules?</p>
      </div>

      <!--Modal footer-->
      <div
        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
        <button type="button" class="inline-block rounded bg-red-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-red-500 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200" data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
          Close
        </button>
        <button type="button" class="ml-1 inline-block rounded bg-red-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#C43B19] transition duration-150 ease-in-out hover:bg-red-500 focus:bg-red-500 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-red-500" data-te-ripple-init data-te-ripple-color="light">
          Delete
        </button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('javascript')
<script src="{{asset('js/pages/rule.js')}}"></script>
@endsection