@extends('layouts.user')
@section('Project.li', 'mm-active')
@section('Project.b', 'active')
@section('Project.svg', 'white')
@section('content')

    <div class="content">

        <div class="container-fluid flex justify-between mt-3">

            <div class="">
                    <h1 class="text-xl font-semibold ml-3 text-black">{{$data->name}}</h1>
                    <p class="text-sm font-semibold ml-3 text-black">{{$data->size}}</p>

            </div>
            <div class="grid grid-cols-1 gap-2 md:grid-cols-2">
                <div class="relative mr-2">
                    <button type="button" class=" rounded-lg focus:outline-none text-black focus:ring-4 focus:ring-yellow-300 font-medium text-xs px-5 py-2 mb-2 dark:focus:ring-yellow-900" style="border: 2px solid black">
                        {{$data->size}}
                    </button>
                </div>
                <div class="relative mr-2">
                    <button type="button" class="flex rounded-lg focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium text-xs px-5 py-2.5 mb-2 dark:focus:ring-yellow-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin-right: 7px" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                          </svg>
                        Edit
                    </button>
                </div>
               
            </div>
            

        </div>
       
        <div class="flex mt-2 items-center justify-center">
            <button type="button" class=" focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium text-xs px-5 py-2.5 mb-2 dark:focus:ring-yellow-900">
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

