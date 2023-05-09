@extends('layouts.user')

@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <h1 class="text-xl font-bold mb-2">Hi, {{ Auth()->user()->name }}</h1>
            <div class="grid grid-cols-12 gap-2">

                <div class="rounded-md border bg-white col-span-12 md:col-span-6 lg:col-span-3">
                    <div class="border-b-2 pb-2">
                        <h1 class="ml-2 mt-2 text-sm font-bold ">Complete Responsbility</h1>
                    </div>
                    <div class=" w-full h-auto px-2 py-1 mt-1 rounded-md" id="Complete">

                    </div>
                    
                </div>
                <div class="rounded-md border bg-white col-span-12 md:col-span-6 lg:col-span-3">
                    <div class="border-b-2 pb-2">
                        <h1 class="ml-2 mt-2 text-sm font-bold ">Uncomplete Responsbility</h1>
                        <a href="" class="hidden" id="detail-show" data-te-toggle="modal" data-te-target="#show">Detail</a>
                    </div>
                    <div class=" w-full h-auto px-2 py-1 mt-1 rounded-md" id="Uncomplete">

                    </div>
                </div>
                <div
                    class="rounded-md bg-white flex col-span-12 md:col-span-4 flex-col lg:col-span-2 text-center bg-transparent">
                    <div class="rounded-md my-auto bg-white" style="height: 32%;">
                        <div class="flex flex-col h-full w-full items-center justify-center">
                            <div class="">
                                <h1 class="text-5xl font-bold">{{ $communicationCount }}</h1>
                            </div>
                            <div class="">
                                <p class="text-xs font-bold">Total Responsbility</p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-md my-auto bg-white" style="height: 32%;">
                        <div class="flex flex-col h-full w-full items-center justify-center">
                            <div class="">
                                <h1 class="text-5xl font-bold">{{ $complete }}</h1>
                            </div>
                            <div class="">
                                <p class="text-xs font-bold">Complete Responsbility</p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-md my-auto bg-white" style="height: 32%;">
                        <div class="flex flex-col h-full w-full items-center justify-center">
                            <div class="">
                                <h1 class="text-5xl font-bold">{{ $uncomplete }}</h1>
                            </div>
                            <div class="">
                                <p class="text-xs font-bold">Uncomplete Responsbility</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-md bg-white col-span-12 md:col-span-8 lg:col-span-4">
                    <select id="month" name="month"
                        class="border border-gray-500 block w-[30%] m-3 ml-auto px-4 py-2 text-sm leading-tight border-gray-300 rounded-md appearance-none focus:outline-none focus:border-yellow-500 bg-white ">
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                        <canvas id="mychart" class="h-auto"></canvas>
                </div>
            </div>
        </div> <!-- end container-fluid -->

        {{-- Modal Konfirmasi Check --}}
        <div data-te-modal-init
            class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
            id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true"
            role="dialog">
            <div data-te-modal-dialog-ref
                class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                <div
                    class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none ">
                    <div
                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
                        <!--Modal title-->
                        <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
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
                        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
                        <button type="button" id="btn-close"
                            class="inline-block rounded bg-white px-6 py-2 text-xs font-medium uppercase leading-normal text-gray-900 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200"
                            data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light"
                            style="border: 2px solid black">
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

        <div data-te-modal-init
            class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
            id="show1" tabindex="-1" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
            <div data-te-modal-dialog-ref
                class="pointer-events-none relative h-[calc(100%-1rem)] w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                <div
                    class="pointer-events-auto relative flex max-h-[100%] w-full flex-col overflow-hidden rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                    <div
                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                        <!--Modal title-->
                        <h5 class="text-xl font-medium leading-normal text-neutral-800" id="exampleModalScrollableLabel">
                            Detail
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

                    <div class="relative overflow-y-auto p-4">
                        <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                            Detail
                        </h5>
                        <p id="show-detail1"></p>

                        <h5 class="text-xl font-medium leading-normal text-neutral-800 ">
                            Message
                        </h5>
                        <p id="show-message1"></p>
                    </div>

                    <!--Modal footer-->
                    <div
                        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
                        <button type="button"
                            class="inline-block rounded bg-white px-6 py-2 text-xs font-medium uppercase leading-normal text-gray-900 transition duration-150 ease-in-out hover:bg-yellow-accent-100 focus:bg-yellow-accent-100 focus:outline-none focus:ring-0 active:bg-yellow-accent-200"
                            data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light"
                            style="border: 2px solid black">
                            Close
                        </button>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="show" tabindex="-1" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative h-[calc(100%-1rem)] w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
            <div
                class="pointer-events-auto relative flex max-h-[100%] w-full flex-col overflow-hidden rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-2 dark:border-opacity-50">
                    <!--Modal title-->
                    <h5 class="text-lg font-bold leading-normal text-neutral-800" id="exampleModalScrollableLabel">
                        Detail
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

                <div class="relative overflow-y-auto p-4">
                    <p class="font-bold leading-normal" id="exampleModalScrollableLabel">
                        Description
                    </p>
                    <p id="show-detail"></p>

                    <p class="font-bold leading-normal" id="exampleModalScrollableLabel">
                        How
                    </p>
                    <p id="show-how"></p>
                    {{-- <a href="" id="show-file" target="_blank"></a> --}}

                </div>

                <!--Modal footer-->

                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-1">
                    <a href="" id="show-link" target="_blank">
                        <button type="button"
                            class="flex inline-block rounded bg-yellow-400 hover:bg-yellow-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white"
                            style="margin: 7px" data-te-ripple-init data-te-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="font-bold bi bi-link-45deg" viewBox="0 0 16 16">
                                <path
                                    d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
                                <path
                                    d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
                            </svg>Open Link
                        </button>
                    </a>
                    <a href="" id="show-file" target="_blank">
                        <button type="button"
                            class="flex inline-block rounded bg-yellow-400 hover:bg-yellow-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white"
                            style="margin: 7px" data-te-ripple-init data-te-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="font-bold mr-1 bi bi-download" viewBox="0 0 16 16">
                                <path
                                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                            </svg>
                            Download File
                        </button>
                    </a>
                    <button type="button"
                        class="btn-hover col-span-1 text-black focus:ring-yellow-300 font-medium rounded-lg text-xs px-6 py-2.5 mr-2 flex items-center"
                        data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light"
                        style="border: 2px solid #828282; color:#828282; margin: 7px">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/pages/dashboard.js') }}"></script>
    <script src="{{asset('plugin/chart.js/dist/chart.umd.js')}}"></script>
    <script>
        const ctx = document.getElementById('mychart');
        new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Complete', 'Uncomplete'],
            datasets: [{
            label: 'Responsbility',
            data: [{{$complete}},{{$uncomplete}}],
            borderWidth: 2,
            backgroundColor: [
                'green',
                'red',
                ],
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            },
            responsive: false,
            maintainAspectRatio: false,
            }
        });
    </script>
@endsection
