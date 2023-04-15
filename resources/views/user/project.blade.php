@extends('layouts.user')
@section('Project.li', 'mm-active')
@section('Project.b', 'active')
@section('Project.svg', 'white')
@section('content')

    <div class="content">

        <div class="container-fluid flex justify-between mt-3">

            <div class="">
                <button type="button" data-te-toggle="modal" id="btn-open-crate-step-1" data-te-target="#create-step-1" data-te-ripple-init
                    data-te-ripple-color="light"
                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">+
                    Add
                </button>

            </div>
            <form class="d-flex" action="{{ url('users') }}" method="get">

                <div class="flex">
                    <div class="mr-3">
                        <select id="countries" name="katakunci"
                            class="bg-gray-50 text-gray-900 text-sm rounded-lg block w-full p-2.5 px-4 focus:outline-none"
                            aria-placeholder="email">
                            <option value="1">vgh</option>
                            <option value="1">Email</option>
                            <option value="1">Email</option>
                        </select>
                    </div>
                    <div class="mr-3">
                        <select id="countries" name="katakunci"
                            class="bg-gray-50 text-gray-900 text-sm rounded-lg block w-full p-2.5 px-4 focus:outline-none"
                            aria-placeholder="email">
                            <option value="1">vgh</option>
                            <option value="1">Email</option>
                            <option value="1">Email</option>
                        </select>
                    </div>
                    <div class="mr-3">
                        <select id="countries" name="katakunci"
                            class="bg-gray-50 text-gray-900 text-sm rounded-lg block w-full p-2.5 px-4 focus:outline-none"
                            aria-placeholder="email">
                            <option value="1">vgh</option>
                            <option value="1">Email</option>
                            <option value="1">Email</option>
                        </select>
                    </div>

                    <div class="">

                        <button type="submit"
                            class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 flex"><svg
                                style="margin-right: 13px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-4">
        <div class="h-full rounded-md bg-white mt-6 col-span-3">
            <div class="">

                <div class="flex h-full">
                    <div class="">
                        <h1 class="font-bold text-2xl m-3">Communication Website (App)</h1>
                    </div>
                    <div class="ml-auto">
                        <button type="submit"
                            class="focus:outline-none text-white bg-[#56CCF2] focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 m-3 ml-auto">Small</button>
                    </div>
                </div>
            </div>
            <div class="border-solid border-b-2 border-gray-300">
                <p class="font-bold ml-4 mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque repellat sint, consequatur sapiente porro
                    sed officiis doloremque rerum ex consectetur molestiae distinctio impedit ad odit pariatur, illo earum ea
                    perferendis. Sapiente in enim pariatur accusamus suscipit quae a nulla labore?
                </p>
            </div>
            <div class="h-full">
                <div class="">
                    <div class="grid grid-cols-3 gap-4">
                        <div class="col-span-1 w-[30%] h-[200px] flex flex-col items-center justify-center bg-gray-200 rounded-md m-6 border-dashed border-2 border-gray-400">
                            
                                <h1 class="text-3xl font-bold">Icon</h1>
                                <p class="text-lg font-bold">Junior gamedesigner</p>
                                <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">+ Add
                                </button>
                        </div>
                        <div class="col-span-1 w-[30%] h-[200px] flex flex-col items-center justify-center bg-gray-200 rounded-md m-6 border-dashed border-2 border-gray-400">
                            
                                <h1 class="text-3xl font-bold">Icon</h1>
                                <p class="text-lg font-bold">Junior gamedesigner</p>
                               
                        </div>
                        <div class="col-span-1 w-[30%] h-[200px] flex flex-col items-center justify-center bg-gray-200 rounded-md m-6 border-dashed border-2 border-gray-400">
                            
                                <h1 class="text-3xl font-bold">Icon</h1>
                                <p class="text-lg font-bold">Junior gamedesigner</p>
                               
                        </div>
                       
                       
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--Modal 1-->
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
                                    <h3 class="font-medium leading-tight">Detail</h3>
                                    <p class="text-sm">Detail Project</p>
                                </li>
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex text-yellow-500 border-yellow-500 border items-center justify-center w-8 h-8 bg-yellow-50 rounded-lg -left-4 ring-4 ring-white ">
                                        2
                                    </span>
                                    <h3 class="font-medium leading-tight">Project</h3>
                                    <p class="text-sm">project spesifications</p>
                                </li>
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex text-yellow-500 border-yellow-500 border items-center justify-center w-8 h-8 bg-yellow-50 rounded-lg -left-4 ring-4 ring-white ">
                                        3
                                    </span>
                                    <h3 class="font-medium leading-tight">Designer</h3>
                                    <p class="text-sm">set designer</p>
                                </li>
                            </ol>
                        </div>
                        <div>
                            <div class="">
                                <label for="type" class=" mb-2 text-sm font-medium text-gray-900 ">Project
                                    Name</label>
                                    <input
                                    class="relative m-0 block w-full text-xs min-w-0 flex-auto rounded border bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none"
                                    type="url" id="formFile" placeholder="Project Name"/>
                            </div>
                            <div class="">
                                <label for="type" class=" mb-2 mt-4 text-sm font-medium text-gray-900 ">Description</label><br>
                                <textarea id="description" rows="4"
                                    class="block p-2.5 w-full text-xs text-gray-900 bg-transparent rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Description..."></textarea>

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
                                    <h3 class="font-medium leading-tight">Detail</h3>
                                    <p class="text-sm">Detail Project</p>
                                </li>
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                        2
                                    </span>
                                    <h3 class="font-medium leading-tight">Project</h3>
                                    <p class="text-sm">project spesifications</p>
                                </li>
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex text-yellow-500 border-yellow-500 border items-center justify-center w-8 h-8 bg-yellow-50 rounded-lg -left-4 ring-4 ring-white ">
                                        3
                                    </span>
                                    <h3 class="font-medium leading-tight">Designer</h3>
                                    <p class="text-sm">set designer</p>
                                </li>
                            </ol>
                        </div>
                        <div>
                            <div class="">
                                <label for="project" class=" mb-2 text-sm font-medium">Project Type</label><br>
                                <Select id="type" name="type" class="" placeholder="Choose Type">
                                    <option value=""></option>
                                    <option value="Monthly Report">Monthly Report</option>
                                    <option value="Quarter Report">Quarter Report</option>
                                </Select>

                            </div>
                            <div class="">
                                <label for="project" class=" mb-2 mt-4 text-sm font-medium">Project Size</label><br>
                                <Select id="size" name="size" class="" placeholder="Small">
                                    <option value=""></option>
                                    <option value="Monthly Report">Monthly Report</option>
                                    <option value="Quarter Report">Quarter Report</option>
                                </Select>

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
                                    <h3 class="font-medium leading-tight">Detail</h3>
                                    <p class="text-sm">Detail Project</p>
                                </li>
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                        2
                                    </span>
                                    <h3 class="font-medium leading-tight">Project</h3>
                                    <p class="text-sm">project spesifications</p>
                                </li>
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex text-white items-center justify-center w-8 h-8 bg-yellow-500 rounded-lg -left-4 ring-4 ring-white">
                                        3
                                    </span>
                                    <h3 class="font-medium leading-tight">Designer</h3>
                                    <p class="text-sm">set designer</p>
                                </li>
                            </ol>
                        </div>
                        <div>
                            <div class="">

                                <label for="file" class=" mb-2 text-sm font-medium">Junior</label><br>
                                <Select id="junior" name="junior" class="" placeholder="Junior">
                                    <option value=""></option>
                                    <option value="Monthly Report">Monthly Report</option>
                                    <option value="Quarter Report">Quarter Report</option>
                                </Select>

                            </div>
                            <div class="">

                                <label for="file" class=" mb-2 text-sm font-medium">Medior</label><br>
                                <Select id="medior" name="medior" class="" placeholder="Medior">
                                    <option value=""></option>
                                    <option value="Monthly Report">Monthly Report</option>
                                    <option value="Quarter Report">Quarter Report</option>
                                </Select>

                            </div>
                            <div class="">

                                <label for="file" class=" mb-2 text-sm font-medium">Senior</label><br>
                                <Select id="senior" name="senior" class="" placeholder="Senior">
                                    <option value=""></option>
                                    <option value="Monthly Report">Monthly Report</option>
                                    <option value="Quarter Report">Quarter Report</option>
                                </Select>

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
    <script src="{{ asset('js/pages/project.js') }}"></script>
@endsection

