@extends('layouts.user')
@section('Project.li', 'mm-active')
@section('Project.b', 'active')
@section('Project.svg', 'white')
@section('content')

    <div class="content">

        <div class="container-fluid flex flex-col md:flex-row justify-evenly md:justify-between mt-3">
            <div class="">
                <a href="/addproject">
                    <button type="button" data-te-toggle="modal" id="btn-open-crate-step-1" data-te-target="#create-step-1"
                    data-te-ripple-init data-te-ripple-color="light"
                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-xs px-5 py-2.5 mr-2 mb-2">+
                    Add
                </button>
            </a>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                <div class="relative mr-2">
                    <select id="year" name="year" class="bg-white block w-full px-4 py-2 text-sm leading-tight border-gray-300 rounded-md appearance-none focus:outline-none focus:border-yellow-500">
                        <option value="-1">All Years</option>
                    </select>
                </div>
                <div class="relative mr-2">
                    <select id="comtype" name="comtype" class="bg-white block w-full px-4 py-2 text-sm leading-tight border-gray-300 rounded-md appearance-none focus:outline-none focus:border-yellow-500">
                       <option value="-1">All Type</option>
                    </select>
                </div>
                
                <button type="button" onclick="search()" class="col-span-1 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-xs px-5 py-2.5 mr-2 mb-2 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search md:mr-2" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
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
        </div>
    </div>


   
@endsection

@section('javascript')
    <script src="{{ asset('js/pages/project.js') }}"></script>
@endsection


