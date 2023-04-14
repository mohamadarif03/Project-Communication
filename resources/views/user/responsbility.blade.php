@extends('layouts.user')
@section('Communicationuser.li', 'mm-active')
@section('Communicationuser.a', 'active')
@section('Communicationuser.svg', 'white')
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
            <div class="flex h-full">
                <div class="h-96 bg-red-200">
                    Test
                </div>
            </div>

        </div>
    </div>
@endsection
