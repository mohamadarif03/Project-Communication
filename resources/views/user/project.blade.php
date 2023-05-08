@extends('layouts.user')
@section('Project.li', 'mm-active')
@section('Project.b', 'active')
@section('Project.svg', 'white')
@section('content')

    <div class="content">

        <div class="container-fluid flex flex-col md:flex-row justify-evenly md:justify-between mt-3">
            <div class="">
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                <div class="relative mr-2">
                    <select id="year" name="year"
                        class="bg-white block w-full px-4 py-2 text-sm leading-tight border-gray-300 rounded-md appearance-none focus:outline-none focus:border-yellow-500">
                        <option value="-1">All Years</option>
                    </select>
                </div>
                <div class="relative mr-2">
                    <select id="status" name="status"
                        class="bg-white block w-full px-4 py-2 text-sm leading-tight border-gray-300 rounded-md appearance-none focus:outline-none focus:border-yellow-500">
                        <option value="-1">All Status</option>
                        <option value="done">Complete</option>
                        <option value="progres">Uncomplete</option>
                    </select>
                </div>

                <button type="button" onclick="search()"
                    class="col-span-1 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-xs px-5 py-2.5 mr-2 mb-2 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search md:mr-2" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>Search
                </button>
            </div>
            
    
        </div>
        <div class="w-full flex flex-col">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 mx-3 mt-4" id="Data">
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
            </div>
            <div class="mx-auto" id="paginate">
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


   
@endsection

@section('javascript')
    <script src="{{ asset('js/pages/project.js') }}"></script>
@endsection


