@extends('layouts.user')
@section('Project.li', 'mm-active')
@section('Project.b', 'active')
@section('Project.svg', 'white')
@section('content')

    <div class="content">
        <div id="stepper1" class="mt-6">
            <!-- Form Steps / Progress Bar -->
            <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
                <!-- Step 1 -->
                <li id="stepper1-step1" class="form-stepper-active text-center form-stepper-list" step="1">
                    <a class="mx-2">
                        <span class="form-stepper-circle" style="background-color: #FFD93D; cursor:pointer;">
                            <span class="text-white">1</span>
                        </span>
                        <div class="label font-bold">Project Size</div>
                    </a>
                </li>
                <!-- Step 2 -->
                <li id="stepper1-step2" class="form-stepper-unfinished text-center form-stepper-list" step="2">
                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted" style="background-color: #FBF5DE; cursor:pointer;">
                            <span style="color: #FFD93D">2</span>
                        </span>
                        <div class="label text-muted font-bold">Project Team</div>
                    </a>
                </li>
                <!-- Step 3 -->
                <li id="stepper1-step3" class="form-stepper-unfinished text-center form-stepper-list" step="2">
                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted" style="background-color: #FBF5DE; cursor:pointer;">
                            <span style="color: #FFD93D">3</span>
                        </span>
                        <div class="label text-muted font-bold">Creatives</div>
                    </a>
                </li>
                <!-- Step 4 -->
                <li id="stepper1-step4" class="form-stepper-unfinished text-center form-stepper-list" step="3">
                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted" style="background-color: #FBF5DE; cursor:pointer;">
                            <span style="color: #FFD93D">4</span>
                        </span>
                        <div class="label text-muted font-bold">Chaperones</div>
                    </a>
                </li>
            </ul>
        </div>
        <div id="form1" class="grid grid-cols-1">
           
            <div class=" rounded-md bg-white mt-6 ml-6">
                <div class="h-full">
                    <div class="grid grid-cols-1 mx-6">
                        <div class="mr-2 mt-6 rounded-lg" style="background-color: #FBF5DE">
                            <div class="">
                                <ul class="list-disc">
                                    <li class="mt-3 font-bold" style="list-style-type: none; margin-left:30px">Information
                                    </li>
                                </ul>
                            </div>
                            <div class="">
                                <ul class="list-disc">
                                    <li class="ml-16">Download excel template & upload into google spreadsheet</li>
                                    <li class="ml-16">Copy link & paste into <b class="text-black">Link</b> field</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mx-6">
                        <div class="mr-2 mt-6">
                            <label for="type" class="mb-2 text-sm font-bold text-gray-900">Project Size
                            </label>
                            <Select multiple id="project_size" name="project_size" class="w-full"
                                placeholder="Project Size">
                                
                            </Select>
                        </div>
                        <div class="mr-2 mt-6">
                            <button type="button" style="margin-top: 27px; background-color: #27AE60;"
                                class="col-span-1 focus:outline-none text-white font-medium rounded-lg text-xs px-5 py-2.5 mr-2 mb-2 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    style="margin-right: 7px" fill="currentColor" class="bi bi-file-earmark-excel-fill"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.884 6.68 8 9.219l2.116-2.54a.5.5 0 1 1 .768.641L8.651 10l2.233 2.68a.5.5 0 0 1-.768.64L8 10.781l-2.116 2.54a.5.5 0 0 1-.768-.641L7.349 10 5.116 7.32a.5.5 0 1 1 .768-.64z" />
                                </svg> Download Template
                            </button>
                        </div>

                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mx-6">
                        <div class="mr-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Link
                            </label>
                            <input type="Links"
                                class="peer block min-h-[auto] w-full rounded border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear"
                                placeholder="Http://" id="link" name="link" aria-label="" />
                        </div>

                    </div>
                    <div class="" style="margin-right: 40px; margin-top: 20px; margin-bottom: 20px; float: right;">
                        <button id="next1" type="button"
                            class="col-span-1 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-xs px-5 py-2.5 mr-2 mb-2 flex items-center">
                            Next
                        </button>
                    </div>
                    
                </div>
            </div>


        </div>
        <div id="stepper2" class="mt-6 hidden">
            <!-- Form Steps / Progress Bar -->
            <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
                <!-- Step 1 -->
                <li id="stepper2-step1" class="form-stepper-active text-center form-stepper-list" step="1">
                    <a class="mx-2">
                        <span class="form-stepper-circle" style="background-color: #FFD93D; cursor:pointer;">
                            <span class="text-white">✓</span>
                        </span>
                        <div class="label font-bold">Project Size</div>
                    </a>
                </li>
                <!-- Step 2 -->
                <li class="form-stepper-active text-center form-stepper-list" step="2">
                    <a class="mx-2">
                        <span class="form-stepper-circle" style="background-color: #FFD93D; cursor:pointer;">
                            <span class="text-white">2</span>
                        </span>
                        <div class="label font-bold">Project Team</div>
                    </a>
                </li>
                <!-- Step 3 -->
                <li id="stepper2-step3" class="form-stepper-unfinished text-center form-stepper-list" step="3">
                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted" style="background-color: #FBF5DE; cursor:pointer;">
                            <span style="color: #FFD93D">3</span>
                        </span>
                        <div class="label text-muted font-bold">Creatives</div>
                    </a>
                </li>
                <!-- Step 4 -->
                <li id="stepper2-step4" class="form-stepper-unfinished text-center form-stepper-list" step="4">
                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted" style="background-color: #FBF5DE; cursor:pointer;">
                            <span style="color: #FFD93D">4</span>
                        </span>
                        <div class="label text-muted font-bold">Chaperones</div>
                    </a>
                </li>
            </ul>
        </div>
        <div id="form2" class="grid grid-cols-1 gap-4 w-full hidden">
            
            <div class=" rounded-md bg-white mt-6 ml-6">
                <div class="h-full">
                    <div class="mt-6 mr-6 ml-6">
                        <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Project
                            Name</label>
                        <input type="text"
                            class="peer block min-h-[auto] w-full rounded border-2 px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear"
                            placeholder="Project Name" id="project-name" aria-label="" />
                    </div>
                    <div class="grid grid-cols-2 gap-4 mx-6">
                        <div class="mr-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Service
                                Manager</label>
                            <Select multiple id="service" name="service" class="w-full" placeholder="Service Manager">
                            </Select>
                        </div>
                        <div class="ml-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Office
                                Manager</label>
                            <Select multiple id="office" name="office" class="w-full" placeholder="Office Manager">
                            </Select>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mx-6">
                        <div class="mr-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Service
                                Manager</label>
                            <Select multiple id="service2" name="service2" class="w-full" placeholder="Service Manager">
                            </Select>
                        </div>
                        <div class="ml-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Office
                                Manager</label>
                            <Select multiple id="office2" name="office2" class="w-full" placeholder="Office Manager">
                            </Select>
                        </div>
                    </div>
                    {{-- <div class="" style="margin-right: 40px; margin-top: 20px; margin-bottom: 20px; float: right;">
                        <button id="next1" type="button"
                            class="col-span-1 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-xs px-5 py-2.5 mr-2 mb-2 flex items-center">
                            Next
                        </button>
                    </div> --}}
                    <div class="flex" style="margin-right: 40px; margin-top: 20px; margin-bottom: 20px; float: right;">
                        <button id="back2" type="button"
                            class="col-span-1 text-black focus:ring-yellow-300 font-medium rounded-lg text-xs px-5 py-2.5 mr-2 mb-2 flex items-center"
                            style="border: 2px solid #828282; color:#828282">
                            Back
                        </button>
                        <button id="next2" type="button"
                            class="col-span-1 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-xs px-5 py-2.5 mr-2 mb-2 flex items-center">
                            Next
                        </button>
                    </div>
                </div>
            </div>


        </div>
        <div id="stepper3" class="mt-6 hidden">
            <!-- Form Steps / Progress Bar -->
            <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
                <!-- Step 1 -->
                <li id="stepper3-step1" class="form-stepper-active text-center form-stepper-list" step="1">
                    <a class="mx-2">
                        <span class="form-stepper-circle" style="background-color: #FFD93D; cursor:pointer;">
                            <span class="text-white">✓</span>
                        </span>
                        <div class="label font-bold">Project Size</div>
                    </a>
                </li>
                <!-- Step 2 -->
                <li id="stepper3-step2" class="form-stepper-active text-center form-stepper-list" step="1">
                    <a class="mx-2">
                        <span class="form-stepper-circle" style="background-color: #FFD93D; cursor:pointer;">
                            <span class="text-white">✓</span>
                        </span>
                        <div class="label font-bold">Project Team</div>
                    </a>
                </li>
                <!-- Step 3 -->
                <li class="form-stepper-active text-center form-stepper-list" step="1">
                    <a class="mx-2">
                        <span class="form-stepper-circle" style="background-color: #FFD93D; cursor:pointer;">
                            <span class="text-white">3</span>
                        </span>
                        <div class="label font-bold">Creatives</div>
                    </a>
                </li>
                <!-- Step 4 -->
                <li id="stepper3-step4" class="form-stepper-unfinished text-center form-stepper-list" step="3">
                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted" style="background-color: #FBF5DE; cursor:pointer;">
                            <span style="color: #FFD93D">4</span>
                        </span>
                        <div class="label text-muted font-bold">Chaperones</div>
                    </a>
                </li>
            </ul>
        </div>
        <div id="form3" class="grid grid-cols-1 gap-4 w-full hidden">
            
            <div class="rounded-md bg-white mt-6 ml-6">
                <div class="h-full">
                    <div class="grid grid-cols-2 md:grid-cols-3 mx-6 gap-6">
                        <div class="mr-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Gamedesigner
                                Senior</label>
                            <Select multiple id="game_senior" name="game_senior" class="w-full"
                                placeholder="Gamedesigner Senior">
                                
                            </Select>
                        </div>
                        <div class="ml-2 mr-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Gamedesigner
                                Medior</label>
                            <Select multiple id="game_medior" name="game_medior" class="w-full"
                                placeholder="Gamedesigner Medior">
                                
                            </Select>
                        </div>
                        <div class="ml-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Gamedesigner
                                Junior</label>
                            <Select multiple id="game_junior" name="game_junior" class="w-full"
                                placeholder="Gamedesigner Junior">
                                
                            </Select>
                        </div>

                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 mx-6 gap-6">
                        <div class="mr-2 mt-4">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Experience Designer
                                Senior</label>
                            <Select multiple id="experience_senior" name="experience_senior" class="w-full"
                                placeholder="Experience Designer Senior">
                                
                            </Select>
                        </div>
                        <div class="ml-2 mr-2 mt-4">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Experience Designer
                                Medior</label>
                            <Select multiple id="experience_medior" name="experience_medior" class="w-full"
                                placeholder="Experience Designer Medior">
                                
                            </Select>
                        </div>
                        <div class="ml-2 mt-4">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Experience Designer
                                Junior</label>
                            <Select multiple id="experience_junior" name="experience_junior" class="w-full"
                                placeholder="Experience Designer Junior">
                                
                            </Select>
                        </div>

                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 mx-2 gap-6 ml-3 mr-4">

                        <div class="ml-2 mt-4">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">UI/UX Junior</label>
                            <Select multiple id="ui_ux" name="ui_ux" class="w-full" placeholder="UI/UX Junior">
                                
                            </Select>
                        </div>

                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 mx-6 gap-6">
                        <div class="mr-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Productontwerp
                                Senior</label>
                            <Select multiple id="productonwerp_senior" name="productonwerp_senior" class="w-full"
                                placeholder="Productontwerp Senior">
                                
                            </Select>
                        </div>
                        <div class="ml-2 mr-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Productontwerp
                                Medior</label>
                            <Select multiple id="productonwerp_medior" name="productonwerp_medior" class="w-full"
                                placeholder="Productontwerp Medior">
                                
                            </Select>
                        </div>
                        <div class="ml-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Productontwerp
                                Junior</label>
                            <Select multiple id="productonwerp_junior" name="productonwerp_junior" class="w-full"
                                placeholder="Productontwerp Junior">
                                
                            </Select>
                        </div>

                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 mx-6 gap-6">
                        <div class="mr-2 mt-4">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Programmer Senior</label>
                            <Select multiple id="programmer_senior" name="programmer_senior" class="w-full"
                                placeholder="Programmer Senior">
                                
                            </Select>
                        </div>
                        <div class="ml-2 mr-2 mt-4">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Programmer Medior</label>
                            <Select multiple id="programmer_medior" name="programmer_medior" class="w-full"
                                placeholder="Programmer Medior">
                                
                            </Select>
                        </div>
                        <div class="ml-2 mt-4">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Programmer Junior</label>
                            <Select multiple id="programmer_junior" name="programmer_junior" class="w-full"
                                placeholder="Programmer Junior">
                                
                            </Select>
                        </div>

                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 mx-6 mt-3 gap-6">
                        <div class="mr-2 mt-4">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Story Senior</label>
                            <Select multiple id="story_senior" name="story_senior" class="w-full"
                                placeholder="Story Senior">
                                
                            </Select>
                        </div>
                        <div class="ml-2 mr-2 mt-4">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Story Medior</label>
                            <Select multiple id="story_medior" name="story_medior" class="w-full"
                                placeholder="Story Medior">
                                
                            </Select>
                        </div>
                        <div class="ml-2 mt-4">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Story Junior</label>
                            <Select multiple id="story_junior" name="story_junior" class="w-full"
                                placeholder="Story Junior">
                                
                            </Select>
                        </div>

                    </div>
                    <div class="flex" style="margin-right: 40px; margin-top: 20px; margin-bottom: 20px; float: right;">
                        <button id="back3" type="button"
                            class="col-span-1 text-black focus:ring-yellow-300 font-medium rounded-lg text-xs px-5 py-2.5 mr-2 mb-2 flex items-center"
                            style="border: 2px solid #828282; color:#828282">
                            Back
                        </button>
                        <button id="next3" type="button"
                            class="col-span-1 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-xs px-5 py-2.5 mr-2 mb-2 flex items-center">
                            Next
                        </button>
                    </div>
                    {{-- <div class="flex" style="margin-right: 40px; margin-top: 20px; margin-bottom: 20px; float: right;">
                        <button id="back2" type="button"
                            class="col-span-1 text-black focus:ring-yellow-300 font-medium rounded-lg text-xs px-5 py-2.5 mr-2 mb-2 flex items-center"
                            style="border: 2px solid #828282; color:#828282">
                            Back
                        </button>
                        <button id="next2" type="button"
                            class="col-span-1 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-xs px-5 py-2.5 mr-2 mb-2 flex items-center">
                            Next
                        </button>
                    </div> --}}
                </div>
            </div>



        </div>
        <div id="stepper4" class="mt-6 hidden">
            <!-- Form Steps / Progress Bar -->
            <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
                <!-- Step 1 -->
                <li id="stepper4-step1" class="form-stepper-active text-center form-stepper-list" step="1">
                    <a class="mx-2">
                        <span class="form-stepper-circle" style="background-color: #FFD93D; cursor:pointer;">
                            <span class="text-white">✓</span>
                        </span>
                        <div class="label font-bold">Project Size</div>
                    </a>
                </li>
                <!-- Step 2 -->
                <li id="stepper4-step2" class="form-stepper-active text-center form-stepper-list" step="1">
                    <a class="mx-2">
                        <span class="form-stepper-circle" style="background-color: #FFD93D; cursor:pointer;">
                            <span class="text-white">✓</span>
                        </span>
                        <div class="label font-bold">Project Team</div>
                    </a>
                </li>
                <!-- Step 3 -->
                <li id="stepper4-step3" class="form-stepper-active text-center form-stepper-list" step="1">
                    <a class="mx-2">
                        <span class="form-stepper-circle" style="background-color: #FFD93D; cursor:pointer;">
                            <span class="text-white">✓</span>
                        </span>
                        <div class="label font-bold">Creatives</div>
                    </a>
                </li>
                <!-- Step 4 -->
                <li class="form-stepper-active text-center form-stepper-list" step="1">
                    <a class="mx-2">
                        <span class="form-stepper-circle" style="background-color: #FFD93D; cursor:pointer;">
                            <span class="text-white">4</span>
                        </span>
                        <div class="label font-bold">Chaperones</div>
                    </a>
                </li>

            </ul>
        </div>
        <div id="form4" class="grid grid-cols-1 gap-4 w-full hidden">
            <div class=" rounded-md bg-white mt-6 ml-6">
                <div class="h-full">
                    <div class="grid grid-cols-2 gap-4 mx-6">
                        <div class="mr-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Host
                            </label>
                            <Select multiple id="host" name="host" class="w-full" placeholder="Host">
                                
                            </Select>
                        </div>
                        <div class="ml-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Techniek
                            </label>
                            <Select multiple id="techniek" name="techniek" class="w-full" placeholder="Techniek">
                                
                            </Select>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mx-6">
                        <div class="mr-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Muziek
                            </label>
                            <Select multiple id="muziek" name="muziek" class="w-full" placeholder="Muziek">
                                
                            </Select>
                        </div>
                        <div class="ml-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Props
                            </label>
                            <Select multiple id="props" name="props" class="w-full" placeholder="Props">
                                
                            </Select>
                        </div>
                    </div>
                    <div class="flex" style="margin-right: 40px; margin-top: 20px; margin-bottom: 20px; float: right;">
                        <button id="back4" type="button"
                            class="col-span-1 text-black focus:ring-yellow-300 font-medium rounded-lg text-xs px-5 py-2.5 mr-2 mb-2 flex items-center"
                            style="border: 2px solid #828282; color:#828282">
                            Back
                        </button>
                        <button type="button"
                            class="col-span-1 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-xs px-5 py-2.5 mr-2 mb-2 flex items-center">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

@section('javascript')
    <script src="{{ asset('js/pages/project.js') }}"></script>
@endsection
