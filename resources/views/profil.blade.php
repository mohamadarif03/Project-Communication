@extends('layouts.main')
@section('content')
<div class="content">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="h-80 rounded-md bg-white mt-6 ml-6">
            <div class="h-full">
                <div class="mt-[20%]">
                    <div class="flex justify-center">
                        @if (Auth::user()->profile == 'default.jpg')
                        <img src="{{asset('default.jpg')}}" class="rounded-full w-20 h-20" alt="" srcset="">
                        @else
                        <img src="{{ asset('storage/' . Auth::user()->profile) }}" class="rounded-full w-20 h-20" alt="" srcset="">
                        @endif
                    </div>
                        
                    <h1 class="flex justify-center font-bold text-2xl">{{ Auth::user()->name }}</h1>
                    <h1 class="flex justify-center text-sm">{{ Auth::user()->email }}</h1>
                    <center>
                        <p class="flex justify-center md:py-1.5 px-4 md:inline-block text-xs md:text-sm p-0.5 py-0.5 font-semibold my-auto role-color rounded-md">{{implode(' | ',Auth()->user()->userrole->pluck('role.name')->toarray())}}</p>
                    </center>
                </div>
            </div>
        </div>

        
        <div class="col-span-2">
          <form method="post" action="/profilUpdate/{{ Auth()->user()->id }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="rounded-md bg-white mt-6 w-full" style="height: 283px">
                <div class="flex items-center border-solid border-b-2 border-gray-200">
                    <h1 class="font-bold text-base ml-3">Update Profile</h1>
                </div>
                <div class="py-2">
                    <div class="flex justify-center items-center">
                        <h1 class="text-sm font-bold ml-3 mr-6 m-3">Name</h1>
                        <input type="text"
                            class="block min-h-[auto] w-6/12 rounded border-2 bg-transparent px-3 py-[0.32rem]"
                            id="exampleFormControlInput1" name="name" value="{{ Auth::user()->name }}" />
                    </div>
                    <div class="flex justify-center items-center">
                        <h1 class="text-sm font-bold ml-3 mr-6 m-3">Email</h1>
                        <input type="email"
                            class="block min-h-[auto] w-6/12 rounded border-2 bg-transparent px-3 py-[0.32rem]"
                            id="exampleFormControlInput1" name="email" value="{{ Auth::user()->email }}" />
                    </div>
                    <div class="flex justify-center items-center">
                        <h1 class="text-sm font-bold ml-2 mr-6 m-3">Photo</h1>
                        <input type="file"
                            class="block min-h-[auto] w-6/12 rounded border-2 bg-transparent px-3 py-[0.32rem]"
                            id="exampleFormControlInput1" name="profile"/>
                    </div>
                </div>
                <div class="flex items-center border-solid border-t-2 border-gray-200 my-2">
                    <button type="submit"
                        class="ml-auto inline-block rounded bg-yellow-400 px-3 pb-2 pt-2.5 py-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#B9AF25] transition duration-150 ease-in-out hover:bg-yellow-500 focus:bg-yellow-500 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-yellow-500 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]" style="margin-top: 8px; margin-right:8px;">+
                        Update</button>
                </div>
            </div>
          </form>
            
          <form method="post" action="/resetPassword/{{ Auth()->user()->id }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="rounded-md bg-white mt-6 w-full" style="height: 225px">
                <div class="flex items-center border-solid border-b-2 border-gray-200">
                    <h1 class="font-bold text-base ml-3">Reset Password</h1>
                </div>
                <div class="py-2">
                    <div class="flex justify-center items-center">
                        <h1 class="text-sm font-bold ml-2 mr-6 m-3">New Password</h1>
                        <input type="password"
                            class="block min-h-[auto] w-6/12 rounded border-2 bg-transparent px-3 py-[0.32rem]"
                            id="exampleFormControlInput1" name="password" placeholder="New Password" style="margin-left: 20px"/>
                    </div>
                    <div class="flex justify-center items-center">
                        <h1 class="text-sm font-bold ml-2 mr-6 m-3">Confirm Password</h1>
                        <input type="password"
                            class="block min-h-[auto] w-6/12 rounded border-2 bg-transparent px-3 py-[0.32rem]"
                            id="exampleFormControlInput1" name="confirmPassword" placeholder="Confirm Password" />
                    </div>
                </div>
                <div class="flex items-center border-solid border-t-2 border-gray-200 my-2">
                    <button
                        class="ml-auto inline-block rounded bg-yellow-400 px-3 pb-2 pt-2.5 py-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#B9AF25] transition duration-150 ease-in-out hover:bg-yellow-500 focus:bg-yellow-500 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-yellow-500 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]" style="margin-top: 6px; margin-right:6px">+
                        Update</button>
                </div>
            </div>
          </form>
        </div>
    </div>
</div>
    
@endsection
