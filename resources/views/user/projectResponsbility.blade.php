@extends('layouts.user')
@section('Project.li', 'mm-active')
@section('Project.a', 'active')
@section('Project.svg', 'white')
@section('content')

    <div class="content">

        <div class="container-fluid flex justify-between mt-3">

            <div class="">

                <h1 class="text-xl font-semibold ml-3 text-black">{{ $data->name }}</h1>
                <p class="text-sm font-semibold ml-3 text-black">{{ $data->size }}</p>
            </div>
            <div class="">
                <div class="relative mr-2">
                    <button type="button"
                        class=" rounded-lg focus:outline-none text-black focus:ring-4 focus:ring-yellow-300 font-medium text-xs px-5 py-2 mb-2 dark:focus:ring-yellow-900"
                        style="border: 2px solid black">
                        Back
                    </button>
                </div>

            </div>


        </div>



        <div class="flex mt-2 items-center justify-center">
            <a href="/project-team/{{ $data->id }}">
                <button type="button"
                    class="focus:outline-none text-black font-medium text-xs px-5 py-2.5 mb-2 dark:focus:ring-yellow-900"
                    style="background-color: #D9D9D9;">
                    Team
                </button>
            </a>
            <button type="button"
                class=" focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium text-xs px-5 py-2.5 mb-2 dark:focus:ring-yellow-900">
                Responsbility
            </button>
        </div>
        <div class="openSpreadsheet">
            <button type="button"
                class="flex rounded-lg focus:outline-none text-white font-medium text-xs px-5 py-2.5 mb-2"
                style="background-color: #27AE60">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    style="margin-right: 7px" class="bi bi-file-earmark-excel-fill" viewBox="0 0 16 16">
                    <path
                        d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.884 6.68 8 9.219l2.116-2.54a.5.5 0 1 1 .768.641L8.651 10l2.233 2.68a.5.5 0 0 1-.768.64L8 10.781l-2.116 2.54a.5.5 0 0 1-.768-.641L7.349 10 5.116 7.32a.5.5 0 1 1 .768-.64z" />
                </svg>Open Spreadsheet
            </button>
        </div>
        <div class="w-full flex flex-col">
            <div class="coverCard" style="display: grid;">
                <div id="filterMobile" style="grid-row: span 2;" class="filterMobile mt-1 rounded-md bg-white">
                    <div class="h-8 p-2 items-center w-full relative flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="text-black font-bold"
                            style="margin-right: 7px" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                            <path
                                d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                        </svg>
                        <h1 class="font-bold text-base">Filter</h1>

                    </div>
                    <div class=" flex pt-0 items-center w-full ">
                        <div class="ml-2 flex my-auto">
                            <div class="ml-2 my-auto grid grid-cols-2 gap-2 flex justify-evenly">
                                @if ($data->size == 'Small')
                                @elseif($data->size == 'Medium')
                                    <div class="my-6 flex justify-between my-checkbox">
                                        <label class="my-0 font-bold" style="font-size:14px; margin-right:9px">Start
                                            Project</label>
                                        <input type="checkbox" value="startProject" checked name="my-checkbox"
                                            id="">
                                    </div>
                                    <div class="my-6 flex justify-between my-checkbox"
                                        style="margin-left: 30px; margin-right: 7px">
                                        <label class="my-0 font-bold" style="font-size:14px;margin-right:9px">Human
                                            Design</label>
                                        <input type="checkbox" value="humanDesign" name="my-checkbox" id="">
                                    </div>
                                    <div class="my-6 flex justify-between my-checkbox">
                                        <label class="my-0 font-bold"
                                            style="font-size:14px;margin-right:9px">Brainstrom</label>
                                        <input type="checkbox" value="brainStrom" name="my-checkbox" id="">
                                    </div>
                                    <div class="my-6 flex justify-between my-checkbox"
                                        style="margin-left: 30px; margin-right: 7px">
                                        <label class="my-0 font-bold" style="font-size:14px;margin-right:9px">Experience
                                            Design</label>
                                        <input type="checkbox" value="experienceDesign" name="my-checkbox" id="">
                                    </div>
                                    <div class="my-6 flex justify-between my-checkbox">
                                        <label class="my-0 font-bold"
                                            style="font-size:14px;margin-right:9px">GameTrust</label>
                                        <input type="checkbox" value="gameTrust" name="my-checkbox" id="">
                                    </div>
                                    <div
                                        class="my-6 flex justify-between my-checkbox"style="margin-left: 30px; margin-right: 7px">
                                        <label class="my-0 font-bold" style="font-size:14px;margin-right:9px">WOW
                                            Design</label>
                                        <input type="checkbox" value="wowDesign" name="my-checkbox" id="">
                                    </div>
                                    <div class="my-6 flex justify-between my-checkbox">
                                        <label class="my-0 font-bold"
                                            style="font-size:14px;margin-right:9px">Levering</label>
                                        <input type="checkbox" value="levering" name="my-checkbox" id="">
                                    </div>
                                    <div
                                        class="my-6 flex justify-between my-checkbox"style="margin-left: 30px; margin-right: 7px">
                                        <label class="my-0 font-bold"
                                            style="font-size:14px;margin-right:9px">Afsluiting</label>
                                        <input type="checkbox" value="afsluiting" name="my-checkbox" id="">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cardResponsbility col-span-3 grid gap-2" id="Data">
                    <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                    <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                    <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                    <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                    <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                    <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                </div>
                <div id="filterPc" style="grid-row: span 2;"
                    class="filterResponsbility mt-1 col-span-1 rounded-md bg-white">
                    <div class="h-8 p-2 items-center w-full relative flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            class="text-black font-bold" style="margin-right: 7px" fill="currentColor"
                            class="bi bi-filter" viewBox="0 0 16 16">
                            <path
                                d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                        </svg>
                        <h1 class="font-bold text-base">Filter</h1>

                    </div>
                    <div class=" flex pt-0 items-center w-full ">
                        <div class="ml-2 flex my-auto">
                            <div class="ml-2 my-auto">
                                <div class="my-6 flex justify-between my-checkbox mr-1">
                                    <label class="my-0 font-bold" style="font-size:14px; margin-right:9px">Start
                                        Project</label>
                                    <input type="checkbox" value="startProject" checked name="my-checkbox"
                                        id="">
                                </div>
                                <div class="my-6 flex justify-between my-checkbox mr-1">
                                    <label class="my-0 font-bold"
                                        style="font-size:14px;margin-right:9px">Afsluiting</label>
                                    <input type="checkbox" value="afsluiting" name="my-checkbox" id="">
                                </div>
                                @if ($data->size == 'Small')
                                    <div class="my-6 flex justify-between my-checkbox mr-1">
                                        <label class="my-0 font-bold" style="font-size:14px;margin-right:9px">Experience
                                            Impact Design</label>
                                        <input type="checkbox" value="experienceImpact" name="my-checkbox"
                                            id="">
                                    </div>
                                    <div class="my-6 flex justify-between my-checkbox mr-1">
                                        <label class="my-0 font-bold" style="font-size:14px;margin-right:9px">Experience
                                            Design</label>
                                        <input type="checkbox" value="experienceDesign" name="my-checkbox"
                                            id="">
                                    </div>
                                    <div class="my-6 flex justify-between my-checkbox mr-1">
                                        <label class="my-0 font-bold" style="font-size:14px;margin-right:9px">GameTrust +
                                            WOW Design</label>
                                        <input type="checkbox" value="gameTrust" name="my-checkbox" id="">
                                    </div>
                                @elseif($data->size == 'Medium')
                                    <div class="my-6 flex justify-between my-checkbox mr-1">
                                        <label class="my-0 font-bold"
                                            style="font-size:14px;margin-right:9px">GameTrust</label>
                                        <input type="checkbox" value="gameTrust" name="my-checkbox" id="">
                                    </div>
                                    <div class="my-6 flex justify-between my-checkbox mr-1">
                                        <label class="my-0 font-bold" style="font-size:14px;margin-right:9px">Human
                                            Design</label>
                                        <input type="checkbox" value="humanDesign" name="my-checkbox" id="">
                                    </div>
                                    <div class="my-6 flex justify-between my-checkbox mr-1">
                                        <label class="my-0 font-bold"
                                            style="font-size:14px;margin-right:9px">Brainstrom</label>
                                        <input type="checkbox" value="brainStrom" name="my-checkbox" id="">
                                    </div>
                                    <div class="my-6 flex justify-between my-checkbox mr-1">
                                        <label class="my-0 font-bold" style="font-size:14px;margin-right:9px">Experience
                                            Design</label>
                                        <input type="checkbox" value="experienceDesign" name="my-checkbox"
                                            id="">
                                    </div>
                                    <div class="my-6 flex justify-between my-checkbox mr-1">
                                        <label class="my-0 font-bold" style="font-size:14px;margin-right:9px">WOW
                                            Design</label>
                                        <input type="checkbox" value="wowDesign" name="my-checkbox" id="">
                                    </div>
                                    <div class="my-6 flex justify-between my-checkbox mr-1">
                                        <label class="my-0 font-bold"
                                            style="font-size:14px;margin-right:9px">Levering</label>
                                        <input type="checkbox" value="levering" name="my-checkbox" id="">
                                    </div>
                                @elseif($data->size == 'Large')
                                    <div class="my-6 flex justify-between my-checkbox mr-1">
                                        <label class="my-0 font-bold"
                                            style="font-size:14px;margin-right:9px">GameTrust</label>
                                        <input type="checkbox" value="gameTrust" name="my-checkbox" id="">
                                    </div>
                                    <div class="my-6 flex justify-between my-checkbox mr-1">
                                        <label class="my-0 font-bold" style="font-size:14px;margin-right:9px">Human
                                            Design</label>
                                        <input type="checkbox" value="humanDesign" name="my-checkbox" id="">
                                    </div>
                                    <div class="my-6 flex justify-between my-checkbox mr-1">
                                        <label class="my-0 font-bold"
                                            style="font-size:14px;margin-right:9px">Concepting</label>
                                        <input type="checkbox" value="concepting" name="my-checkbox" id="">
                                    </div>
                                    <div class="my-6 flex justify-between my-checkbox mr-1">
                                        <label class="my-0 font-bold" style="font-size:14px;margin-right:9px">Experience
                                            Design</label>
                                        <input type="checkbox" value="experienceDesign" name="my-checkbox"
                                            id="">
                                    </div>
                                    <div class="my-6 flex justify-between my-checkbox mr-1">
                                        <label class="my-0 font-bold" style="font-size:14px;margin-right:9px">WOW
                                            Design</label>
                                        <input type="checkbox" value="wowDesign" name="my-checkbox" id="">
                                    </div>
                                    <div class="my-6 flex justify-between my-checkbox mr-1">
                                        <label class="my-0 font-bold" style="font-size:14px;margin-right:9px">Impact
                                            Design</label>
                                        <input type="checkbox" value="impactDesign" name="my-checkbox" id="">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="" id="project-id" value="{{ $data->id }}">
                <input type="hidden" name="" id="project-size" value="{{ $data->size }}">
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
                    <button type="button" onclick="mark()"
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
    <script src="{{ asset('js/pages/projectresponsbility.js') }}"></script>
@endsection
@section('styling-page')
    <link rel="stylesheet" href="{{ asset('css/projectResponsbility.css') }}">
@endsection
