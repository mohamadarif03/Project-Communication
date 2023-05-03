@extends('layouts.user')
@section('Project.li', 'mm-active')
@section('Project.b', 'active')
@section('Project.svg', 'white')
@section('content')

    <div class="content">
        <div class="grid grid-cols-1 md:grid-cols-12 mx-6 gap-4">
            <div class=" rounded-md bg-white mt-6 ml-6">
                <div class="h-full">
                    <div class="mt-6 mr-6 ml-6">
                        <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Project
                            Name</label>
                        <input type="text"
                            class="peer block min-h-[auto] w-full rounded border-2 px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear"
                            placeholder="Project Name" id="date" aria-label="" />
                    </div>
                    <div class="grid grid-cols-2 gap-4 mx-6">
                        <div class="mr-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Service
                                Manager</label>
                                <Select multiple id="service" name="service" class="w-full" placeholder="Service Manager">
                                    <option value="Test">Test</option>                       
                                </Select>
                        </div>
                        <div class="ml-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Office
                                Manager</label>
                                <Select multiple id="office"  name="office" class="w-full" placeholder="Office Manager">
                                    <option value="Test">Test</option>                       
                                </Select>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mx-6">
                        <div class="mr-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Service
                                Manager</label>
                                <Select multiple id="service2"  name="service2" class="w-full" placeholder="Service Manager">
                                    <option value="Test">Test</option>                       
                                </Select>
                        </div>
                        <div class="ml-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Office
                                Manager</label>
                                <Select multiple id="office2"  name="office2" class="w-full" placeholder="Office Manager">
                                    <option value="Test">Test</option>                       
                                </Select>
                        </div>
                    </div>
                    <div class="" style="margin-left: 50px; margin-right: 40px; margin-top: 20px; margin-bottom: 20px; float: right;">
                    <button type="button" class="col-span-1 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-xs px-5 py-2.5 mr-2 mb-2 flex items-center">
                        Next
                    </button>
                    </div>
                </div>
            </div>



        </div>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
            <div class=" rounded-md bg-white mt-6 ml-6">
                <div class="h-full">
                    <div class="grid grid-cols-3 mx-6 gap-6">
                        <div class="mr-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Gamedesigner Senior</label>
                                <Select multiple id="game_senior" name="game_senior" class="w-full" placeholder="Gamedesigner Senior">
                                    <option value="Test">Test</option>                       
                                </Select>
                        </div>
                        <div class="ml-2 mr-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Gamedesigner Medior</label>
                                <Select multiple id="game_medior" name="game_medior" class="w-full" placeholder="Gamedesigner Medior">
                                    <option value="Test">Test</option>                       
                                </Select>
                        </div>
                        <div class="ml-2 mt-6">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Gamedesigner Junior</label>
                                <Select multiple id="game_junior" name="game_junior" class="w-full" placeholder="Gamedesigner Junior">
                                    <option value="Test">Test</option>                       
                                </Select>
                        </div>
                        
                    </div>
                    <div class="grid grid-cols-3 mx-6 gap-6">
                        <div class="mr-2 mt-4">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Experience Designer Senior</label>
                                <Select multiple id="experience_senior" name="experience_senior" class="w-full" placeholder="Experience Designer Senior">
                                    <option value="Test">Test</option>                       
                                </Select>
                        </div>
                        <div class="ml-2 mr-2 mt-4">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Experience Designer Medior</label>
                                <Select multiple id="experience_medior" name="experience_medior" class="w-full" placeholder="Experience Designer Medior">
                                    <option value="Test">Test</option>                       
                                </Select>
                        </div>
                        <div class="ml-2 mt-4">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">Experience Designer Junior</label>
                                <Select multiple id="experience_junior" name="experience_junior" class="w-full" placeholder="Experience Designer Junior">
                                    <option value="Test">Test</option>                       
                                </Select>
                        </div>
                        
                    </div>
                    <div class="grid grid-cols-3 mx-6 gap-6">
                        
                        <div class="ml-2 mt-4">
                            <label for="type" class=" mb-2 text-sm font-bold text-gray-900">UI/UX Junior</label>
                                <Select multiple id="ui_ux" name="ui_ux" class="w-full" placeholder="UI/UX Junior">
                                    <option value="Test">Test</option>                       
                                </Select>
                        </div>
                        
                    </div>
                    
                    <div class="" style="margin-left: 50px; margin-right: 40px; margin-top: 20px; margin-bottom: 20px; float: right;">
                    <button type="button" class="col-span-1 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-xs px-5 py-2.5 mr-2 mb-2 flex items-center">
                        Next
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
