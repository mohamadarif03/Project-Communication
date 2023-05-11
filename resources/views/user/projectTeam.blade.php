@extends('layouts.user')
@section('Project.li', 'mm-active')
@section('Project.a', 'active')
@section('Project.svg', 'white')
@section('content')

    <div class="content">

        <div class="container-fluid flex justify-between mt-3">

            <div class="">
                    <h1 class="text-xl font-semibold ml-3 text-black">{{$data->name}}</h1>
                    <p class="text-sm font-semibold ml-3 text-black">{{$data->size}}</p>

            </div>
            <div class="">
                <div class="relative mr-2">
                    <a href="../project" type="button" class="rounded-lg focus:outline-none text-black font-medium text-xs px-5 py-2 mb-2" style="border: 2px solid black; color:black">
                        Back
                    </a>
                </div>
            </div>
            

        </div>
       
        <div class="flex mt-2 items-center justify-center">
            <button type="button" class=" focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium text-xs px-5 py-2.5 mb-2">
                Team
            </button>
            <a href="/project-responsbility/{{$data->id}}">
                <button type="button" class="focus:outline-none text-black font-medium text-xs px-5 py-2.5 mb-2 dark:focus:ring-yellow-900" style="background-color: #D9D9D9;">
                    Responsbility
                </button>
            </a>
        </div>
        <div class="w-full flex flex-col">
            <div class="cover-team grid mx-3 gap-3 mt-4" id="team">
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
            </div>
            <div class="flex flex-col mt-2 w-full">
                <h1 class="text-xl font-semibold ml-3 text-black">Creatives</h1>
            </div>
            <div class="cover-team grid mx-3 gap-3 mt-4" id="creative">
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
            </div>
            <div class="flex flex-col mt-2 w-full">
                <h1 class="text-xl font-semibold ml-3 text-black">Chaperones</h1>
            </div>
            <div class="cover-team grid mx-3 gap-3 mt-4" id="chaperone">
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
            </div>         
        </div>
    </div>

   <input type="hidden" id="spreadSheetId" value="{{$data->sheetId}}">
@endsection

@section('javascript')
    <script src="{{ asset('js/pages/projectteam.js') }}"></script>
@endsection
@section('styling-page')
<link rel="stylesheet" href="{{asset ('css/projectTeam.css')}}">
@endsection

