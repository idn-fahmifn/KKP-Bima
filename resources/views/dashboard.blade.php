@extends('template.template')

@section('content')


<div class="bg-slate-100  mt-[77px]  py-3 px-3">
    <section class="relative overflow-hidden">
        <div class="container">
            <div class="flex">
                <div class="w-full">
                    <h3 class="text-xl text-gray-800 mt-2">Hi Greeva</h3>
                    <p class="mt-1 font-medium mb-4">Welcome to Prompt!</p>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-6 mt-2">
                <!-- profile widget star -->
                <div class="lg:col-span-5 col-span-12">
                    <div class="bg-white rounded">
                        <div class="p-6">
                            <div class="flex">
                                <div class="grow">
                                    <div class="flex">
                                        <img src="assets/images/avatars/img-8.jpg" class="img-fluid w-12 h-12 rounded me-3" alt="...">
                                        <div class="grow">
                                            <h4 class="tetx-lg text-gray-800 mb-1 mt-0 font-semibold">Ms. Greeva Navadiya</h4>
                                            <p class="text-gray-400 pb-0 text-sm mb-4 font-medium">Web &amp; Graphic Designer</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="shrink text-end">
                                    <button class="text-gray-800" data-fc-target="dropdown-target" data-fc-type="dropdown" data-fc-placement="bottom-end" type="button">
                                        <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon icon-xs">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </button>

                                    <div id="dropdown-target" class="hidden bg-white  shadow rounded py-2 px-1.5 min-w-[10rem]">
                                        <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded" href="javascript:void(0)">
                                            <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit icon-xxs icon me-2">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                            <span class="">Share</span>
                                        </a>
                                        <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded" href="javascript:void(0)">
                                            <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw icon-xxs icon me-2">
                                                <polyline points="23 4 23 10 17 10"></polyline>
                                                <polyline points="1 20 1 14 7 14"></polyline>
                                                <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                                            </svg>
                                            <span class="">Refresh</span>
                                        </a>

                                        <hr class="my-2">

                                        <a class="flex items-center py-1.5 px-5 text-base text-red-500 hover:bg-slate-100 rounded" href="javascript:void(0)">
                                            <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon-xxs icon me-2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                            <span class="">Deactivate</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-4 flex-wrap py-4 border-b">
                                <div class="mb-2">
                                    <a href="#" class="flex gap-0.5 text-gray-400 text-sm"><svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail icon-xs icon me-1">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>greeva@coderthemes.com</a>
                                </div>
                                <div class="mb-2">
                                    <a href="#" class="flex gap-0.5 text-gray-400 text-sm"><svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone icon-xxs icon me-2">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                        </svg>+00 123-456-789</a>
                                </div>
                            </div>

                            <div class="flex items-center gap-6 mt-4">
                                <div class="md:w-1/2 w-full">
                                    <div class="flex justify-between mb-3">
                                        <h6 class="fw-medium my-0">Project Completion</h6>
                                        <p class="float-end mb-0">85%</p>
                                    </div>
                                    <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700 ">
                                        <div class="flex flex-col justify-center overflow-hidden bg-primary" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="md:w-1/2 w-full">
                                    <div class="flex justify-between mb-3">
                                        <h6 class="fw-medium my-0">Overall Rating</h6>
                                        <p class="float-end mb-0">7.5</p>
                                    </div>
                                    <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700 ">
                                        <div class="flex flex-col justify-center overflow-hidden bg-orange-500" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- profile widget end -->

                <div class="lg:col-span-3 col-span-12 space-y-6">
                    <div class="bg-white">
                        <div class="flex items-center p-6">
                            <div class="">
                                <div class="inline-flex items-center justify-center h-12 w-12 bg-green-500/10 rounded me-3">
                                    <svg class="text-green-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle icon-dual-success">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="text-xl text-gray-800">21</h3>
                                <p class="text-muted mb-0">Tasks Completed</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white">
                        <div class="flex items-center p-6">
                            <div class="">
                                <div class="inline-flex items-center justify-center h-12 w-12 bg-sky-500/10 rounded me-3">
                                    <svg class="text-sky-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 icon-dual-info">
                                        <path d="M12 20h9"></path>
                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="grow">
                                <h3 class="text-xl text-gray-800">21</h3>
                                <p class="text-muted mb-0">Tasks Completed</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 col-span-12">
                    <div class="bg-white">
                        <div class="p-6">
                            <div class="flex justify-between">
                                <div class="grow">
                                    <h4 class="text-base font-semibold text-gray-800">Revenue</h4>
                                </div>
                                <div class="shrink text-end">
                                    <button class="text-gray-800" data-fc-target="dropdown-target" data-fc-type="dropdown" data-fc-placement="bottom-end" type="button">
                                        <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon icon-xs">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </button>

                                    <div id="dropdown-target" class="hidden bg-white  shadow rounded py-2 px-1.5 min-w-[10rem]">
                                        <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded" href="javascript:void(0)">
                                            <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit icon-xxs icon me-2">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                            <span class="">Share</span>
                                        </a>
                                        <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded" href="javascript:void(0)">
                                            <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw icon-xxs icon me-2">
                                                <polyline points="23 4 23 10 17 10"></polyline>
                                                <polyline points="1 20 1 14 7 14"></polyline>
                                                <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                                            </svg>
                                            <span class="">Refresh</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <h1 class="text-3xl text-gray-800 my-2.5">$2,100.00</h1>
                            <p class="text-gray-400 text-sm">Last Week</p>

                            <hr class="my-3.5">

                            <div class="flex items-center">
                                <div class="lg:w-1/2">
                                    <div class="flex items-center">
                                        <div class="me-4 shrink">
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-success">
                                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                <polyline points="17 6 23 6 23 12"></polyline>
                                            </svg>
                                        </div>
                                        <div class="grow">
                                            <h5 class="mt-0 mb-0">15%</h5>
                                            <p class="text-muted mb-0 fs-13">Prev Week</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:w-1/2">
                                    <div class="flex items-center">
                                        <div class="me-3 flex-shrink-0">
                                            <svg class="h-6 w-6 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down text-danger">
                                                <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                                <polyline points="17 18 23 18 23 12"></polyline>
                                            </svg>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="mt-0 mb-0">10%</h5>
                                            <p class="text-muted mb-0 fs-13">Prev Month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end grid -->
        </div>
    </section>

    <section class="relative overflow-hidden">
        <div class="container">
            <div class="flex items-center justify-between my-6">
                <div class="">
                    <h4 class="text-base text-gray-800">Recent Projects</h4>
                </div>
                <div class="text-end">
                    <a href="#" class="font-semibold text-primary text-sm">View All <svg class="h-5 w   5 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right ms-1 icon-xxs">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg></a>
                </div>
            </div><!-- end title -->

            <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6 my-3">
                <!-- project start -->
                <div class="bg-white rounded">
                    <div class="p-6">
                        <!-- action start -->
                        <div class="flex items-center">
                            <div class="grow">
                                <p class="text-gray-400 text-sm font-medium">Aug 09, 2020</p>
                            </div>
                            <div class="shrink text-end">
                                <button class="text-gray-800" data-fc-target="recent-drop-1" data-fc-type="dropdown" data-fc-placement="bottom-end" type="button">
                                    <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon icon-xs">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </button>

                                <div id="recent-drop-1" class="hidden bg-white  shadow rounded py-2 px-1.5 min-w-[10rem]">
                                    <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded" href="javascript:void(0)">
                                        <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-xxs icon me-2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                        <span class="">View</span>
                                    </a>
                                    <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded" href="javascript:void(0)">
                                        <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 icon-xxs icon me-2">
                                            <path d="M12 20h9"></path>
                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                        </svg>
                                        <span class="">Edit</span>
                                    </a>

                                    <hr class="my-2">

                                    <a class="flex items-center py-1.5 px-5 text-base text-red-500 hover:bg-slate-100 rounded" href="javascript:void(0)">
                                        <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon-xxs icon me-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                        <span class="">Delete</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- action end -->

                        <div class="mt-3">
                            <h4 class="mt-0 mb-1">
                                <a class="text-lg text-gray-600 hover:text-primary" href="#">Shreyu - Design Updates</a>
                            </h4>
                            <span class="inline-flex items-center gap-1.5 py-1 px-2 rounded-md text-xs font-semibold bg-primary/10 text-primary">Designing</span>


                            <p class="text-gray-400 text-sm my-4">Update shreyu with modern and latest trends...</p>
                        </div>

                        <!-- progress -->
                        <div class="mt-4">
                            <div class="flex mb-3">
                                <div class="grow">
                                    <h6 class="mt-0">Progress</h6>
                                </div>
                                <div class="shrink text-end">
                                    <small class="fw-semibold">75%</small>
                                </div>
                            </div>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700 ">
                                <div class="flex flex-col justify-center overflow-hidden bg-green-500" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!-- progress end -->

                        <!-- assignment start -->
                        <div class="flex -space-x-2 mt-3">
                            <img class="inline-block h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="assets/images/avatars/img-8.jpg" alt="Image Description">
                            <img class="inline-block h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="assets/images/avatars/img-5.jpg" alt="Image Description">
                        </div>
                        <!-- assignment end -->
                    </div>
                </div>
                <!-- project end -->


                <!-- project start -->
                <div class="bg-white rounded">
                    <div class="p-6">
                        <!-- action start -->
                        <div class="flex items-center">
                            <div class="grow">
                                <p class="text-gray-400 text-sm font-medium">Aug 10, 2020</p>
                            </div>
                            <div class="shrink text-end">
                                <button class="text-gray-800" data-fc-target="recent-drop-1" data-fc-type="dropdown" data-fc-placement="bottom-end" type="button">
                                    <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon icon-xs">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </button>

                                <div id="recent-drop-1" class="hidden bg-white  shadow rounded py-2 px-1.5 min-w-[10rem]">
                                    <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded" href="javascript:void(0)">
                                        <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-xxs icon me-2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                        <span class="">View</span>
                                    </a>
                                    <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded" href="javascript:void(0)">
                                        <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 icon-xxs icon me-2">
                                            <path d="M12 20h9"></path>
                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                        </svg>
                                        <span class="">Edit</span>
                                    </a>

                                    <hr class="my-2">

                                    <a class="flex items-center py-1.5 px-5 text-base text-red-500 hover:bg-slate-100 rounded" href="javascript:void(0)">
                                        <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon-xxs icon me-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                        <span class="">Delete</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- action end -->

                        <div class="mt-3">
                            <h4 class="mt-0 mb-1">
                                <a class="text-lg text-gray-600 hover:text-primary" href="#">Prompt v2.0</a>
                            </h4>
                            <span class="inline-flex items-center gap-1.5 py-1 px-2 rounded-md text-xs font-semibold bg-orange-500/10 text-orange-500">Planning</span>


                            <p class="text-gray-400 text-sm my-4">Plan new features and functionality for prompt...</p>
                        </div>

                        <!-- progress -->
                        <div class="mt-4">
                            <div class="flex mb-3">
                                <div class="grow">
                                    <h6 class="mt-0">Progress</h6>
                                </div>
                                <div class="shrink text-end">
                                    <small class="fw-semibold">50%</small>
                                </div>
                            </div>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700 ">
                                <div class="flex flex-col justify-center overflow-hidden bg-red-500" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!-- progress end -->

                        <!-- assignment start -->
                        <div class="flex -space-x-2 mt-3">
                            <img class="inline-block h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="assets/images/avatars/img-8.jpg" alt="Image Description">
                            <img class="inline-block h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="assets/images/avatars/img-5.jpg" alt="Image Description">
                        </div>
                        <!-- assignment end -->
                    </div>
                </div>
                <!-- project end -->


                <!-- project start -->
                <div class="bg-white rounded">
                    <div class="p-6">
                        <!-- action start -->
                        <div class="flex items-center">
                            <div class="grow">
                                <p class="text-gray-400 text-sm font-medium">Aug 11, 2020</p>
                            </div>
                            <div class="shrink text-end">
                                <button class="text-gray-800" data-fc-target="recent-drop-1" data-fc-type="dropdown" data-fc-placement="bottom-end" type="button">
                                    <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon icon-xs">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </button>

                                <div id="recent-drop-1" class="hidden bg-white  shadow rounded py-2 px-1.5 min-w-[10rem]">
                                    <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded" href="javascript:void(0)">
                                        <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-xxs icon me-2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                        <span class="">View</span>
                                    </a>
                                    <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded" href="javascript:void(0)">
                                        <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 icon-xxs icon me-2">
                                            <path d="M12 20h9"></path>
                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                        </svg>
                                        <span class="">Edit</span>
                                    </a>

                                    <hr class="my-2">

                                    <a class="flex items-center py-1.5 px-5 text-base text-red-500 hover:bg-slate-100 rounded" href="javascript:void(0)">
                                        <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon-xxs icon me-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                        <span class="">Delete</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- action end -->

                        <div class="mt-3">
                            <h4 class="mt-0 mb-1">
                                <a class="text-lg text-gray-600 hover:text-primary" href="#">Hyper React v4.0</a>
                            </h4>
                            <span class="inline-flex items-center gap-1.5 py-1 px-2 rounded-md text-xs font-semibold bg-sky-500/10 text-sky-500">Development</span>


                            <p class="text-gray-400 text-sm my-4">Update shreyu with modern and latest trends...</p>
                        </div>

                        <!-- progress -->
                        <div class="mt-4">
                            <div class="flex mb-3">
                                <div class="grow">
                                    <h6 class="mt-0">Progress</h6>
                                </div>
                                <div class="shrink text-end">
                                    <small class="fw-semibold">60%</small>
                                </div>
                            </div>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700 ">
                                <div class="flex flex-col justify-center overflow-hidden bg-amber-500" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!-- progress end -->

                        <!-- assignment start -->
                        <div class="flex -space-x-2 mt-3">
                            <img class="inline-block h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="assets/images/avatars/img-8.jpg" alt="Image Description">
                            <img class="inline-block h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="assets/images/avatars/img-5.jpg" alt="Image Description">
                        </div>
                        <!-- assignment end -->
                    </div>
                </div>
                <!-- project end -->
            </div><!-- end grid -->
        </div>
    </section>

    <section class="relative overflow-hidden">
        <div class="container">
            <div class="flex items-center justify-between my-6">
                <div class="">
                    <h4 class="text-base text-gray-800">Tasks</h4>
                </div>
                <div class="text-end">
                    <a href="#" class="font-semibold text-primary text-sm">View All <svg class="h-5 w-5 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right ms-1 icon-xxs">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg></a>
                </div>
            </div><!-- end title -->

            <div class="flex flex-col gap-y-2 w-full mb-4">
                <div class="bg-white">
                    <div class="p-6">
                        <div class="flex flex-wrap lg:flex-nowrap items-center sm:justify-between gap-y-2">
                            <div class="w-1/2">
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" class="rounded border-gray-300" id="task1">
                                    <label class="text-sm font-semibold text-gray-700" for="task1">
                                        Draft the new contract document for sales team
                                    </label>
                                </div> <!-- end checkbox -->
                            </div> <!-- end col -->
                            <div class="lg:w-1/3">
                                <span class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-sm font-semibold bg-cyan-500/10 text-cyan-500">Today 10pm</span>
                            </div>
                            <div class="lg:w-1/3">
                                <div class="flex items-center justify-end gap-6">
                                    <div class="">
                                        <div class="inline-flex items-center gap-2" data-fc-type="tooltip">
                                            <svg class="h-5 w-5 text-gray-800 inline" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                                <title>Stockholm-icons / Text / Bullet-list</title>
                                                <desc>Created with Sketch.</desc>
                                                <g id="Stockholm-icons-/-Text-/-Bullet-list" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" id="Combined-Shape" fill="currentColor"></path>
                                                    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                            <span class="text-sm text-gray-800 font-medium">3/7</span>
                                        </div>
                                        <div class="bg-gray-800 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                            10 Subtasks are completed
                                            <div class="bg-gray-800 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]" data-fc-arrow></div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="inline-flex items-center gap-2" data-fc-type="tooltip">
                                            <svg class="h-5 w-5 text-gray-800 inline" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                                <title>Stockholm-icons / Text / Bullet-list</title>
                                                <desc>Created with Sketch.</desc>
                                                <g id="Stockholm-icons-/-Text-/-Bullet-list" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" id="Combined-Shape" fill="currentColor"></path>
                                                    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                            <span class="text-sm text-gray-800 font-medium">21</span>
                                        </div>
                                        <div class="bg-gray-800 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                            5 Comments
                                            <div class="bg-gray-800 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]" data-fc-arrow></div>
                                        </div>
                                    </div>

                                    <span class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-md text-xs font-semibold bg-red-500/10 text-red-500">High</span>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div><!-- end task -->

                <div class="bg-white">
                    <div class="p-6">
                        <div class="flex flex-wrap lg:flex-nowrap items-center sm:justify-between gap-y-2">
                            <div class="w-1/2">
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" class="rounded border-gray-300" id="task2">
                                    <label class="text-sm font-semibold text-gray-700" for="task2">
                                        iOS App home page design
                                    </label>
                                </div> <!-- end checkbox -->
                            </div> <!-- end col -->
                            <div class="lg:w-1/3">
                                <span class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-sm font-semibold bg-cyan-500/10 text-cyan-500">Today 5pm</span>
                            </div>
                            <div class="lg:w-1/3">
                                <div class="flex items-center justify-end gap-6">
                                    <div class="">
                                        <div class="inline-flex items-center gap-2" data-fc-type="tooltip">
                                            <svg class="h-5 w-5 text-gray-800 inline" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                                <title>Stockholm-icons / Text / Bullet-list</title>
                                                <desc>Created with Sketch.</desc>
                                                <g id="Stockholm-icons-/-Text-/-Bullet-list" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" id="Combined-Shape" fill="currentColor"></path>
                                                    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                            <span class="text-sm text-gray-800 font-medium">10/11</span>
                                        </div>
                                        <div class="bg-gray-800 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                            10 Subtasks are completed
                                            <div class="bg-gray-800 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]" data-fc-arrow></div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="inline-flex items-center gap-2" data-fc-type="tooltip">
                                            <svg class="h-5 w-5 text-gray-800 inline" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                                <title>Stockholm-icons / Text / Bullet-list</title>
                                                <desc>Created with Sketch.</desc>
                                                <g id="Stockholm-icons-/-Text-/-Bullet-list" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" id="Combined-Shape" fill="currentColor"></path>
                                                    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                            <span class="text-sm text-gray-800 font-medium">05</span>
                                        </div>
                                        <div class="bg-gray-800 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                            5 Comments
                                            <div class="bg-gray-800 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]" data-fc-arrow></div>
                                        </div>
                                    </div>

                                    <span class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-md text-xs font-semibold bg-orange-500/10 text-orange-500">Medium</span>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div><!-- end task -->

                <div class="bg-white">
                    <div class="p-6">
                        <div class="flex flex-wrap lg:flex-nowrap items-center sm:justify-between gap-y-2">
                            <div class="w-1/2">
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" class="rounded border-gray-300" id="task3">
                                    <label class="text-sm font-semibold text-gray-700" for="task3">
                                        Enable analytics tracking
                                    </label>
                                </div> <!-- end checkbox -->
                            </div> <!-- end col -->
                            <div class="lg:w-1/3">
                                <span class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-sm font-semibold bg-gray-500/10 text-gray-500">Tomorrow 5pm</span>
                            </div>
                            <div class="lg:w-1/3">
                                <div class="flex items-center justify-end gap-6">
                                    <div class="">
                                        <div class="inline-flex items-center gap-2" data-fc-type="tooltip">
                                            <svg class="h-5 w-5 text-gray-800 inline" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                                <title>Stockholm-icons / Text / Bullet-list</title>
                                                <desc>Created with Sketch.</desc>
                                                <g id="Stockholm-icons-/-Text-/-Bullet-list" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" id="Combined-Shape" fill="currentColor"></path>
                                                    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                            <span class="text-sm text-gray-800 font-medium">05/11</span>
                                        </div>
                                        <div class="bg-gray-800 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                            5 Subtasks are completed
                                            <div class="bg-gray-800 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]" data-fc-arrow></div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="inline-flex items-center gap-2" data-fc-type="tooltip">
                                            <svg class="h-5 w-5 text-gray-800 inline" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                                <title>Stockholm-icons / Text / Bullet-list</title>
                                                <desc>Created with Sketch.</desc>
                                                <g id="Stockholm-icons-/-Text-/-Bullet-list" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" id="Combined-Shape" fill="currentColor"></path>
                                                    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                            <span class="text-sm text-gray-800 font-medium">07</span>
                                        </div>
                                        <div class="bg-gray-800 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                            7 Comments
                                            <div class="bg-gray-800 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]" data-fc-arrow></div>
                                        </div>
                                    </div>

                                    <span class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-md text-xs font-semibold bg-orange-500/10 text-orange-500">Medium</span>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div><!-- end task -->

                <div class="bg-white">
                    <div class="p-6">
                        <div class="flex flex-wrap lg:flex-nowrap items-center sm:justify-between gap-y-2">
                            <div class="w-1/2">
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" class="rounded border-gray-300" id="task4">
                                    <label class="text-sm font-semibold text-gray-700" for="task4">
                                        Kanban board design
                                    </label>
                                </div> <!-- end checkbox -->
                            </div> <!-- end col -->
                            <div class="lg:w-1/3">
                                <span class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-sm font-semibold bg-gray-500/10 text-gray-500">Sep 11, 3pm</span>
                            </div>
                            <div class="lg:w-1/3">
                                <div class="flex items-center justify-end gap-6">
                                    <div class="">
                                        <div class="inline-flex items-center gap-2" data-fc-type="tooltip">
                                            <svg class="h-5 w-5 text-gray-800 inline" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                                <title>Stockholm-icons / Text / Bullet-list</title>
                                                <desc>Created with Sketch.</desc>
                                                <g id="Stockholm-icons-/-Text-/-Bullet-list" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" id="Combined-Shape" fill="currentColor"></path>
                                                    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                            <span class="text-sm text-gray-800 font-medium">0/3</span>
                                        </div>
                                        <div class="bg-gray-800 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                            0 Subtasks are completed
                                            <div class="bg-gray-800 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]" data-fc-arrow></div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="inline-flex items-center gap-2" data-fc-type="tooltip">
                                            <svg class="h-5 w-5 text-gray-800 inline" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                                <title>Stockholm-icons / Text / Bullet-list</title>
                                                <desc>Created with Sketch.</desc>
                                                <g id="Stockholm-icons-/-Text-/-Bullet-list" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" id="Combined-Shape" fill="currentColor"></path>
                                                    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                            <span class="text-sm text-gray-800 font-medium">07</span>
                                        </div>
                                        <div class="bg-gray-800 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                            3 Comments
                                            <div class="bg-gray-800 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]" data-fc-arrow></div>
                                        </div>
                                    </div>

                                    <span class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-md text-xs font-semibold bg-green-500/10 text-green-500">Low</span>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div><!-- end task -->
            </div>
            <button class="flex items-center justify-center mx-auto mb-6">
                <a href="#" class="inline-flex items-center justify-center rounded text-xs font-semibold border border-primary text-primary hover:shadow-lg hover:bg-primary hover:text-white hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40 px-3 py-2 group"><span class="animate-spin inline-block h-4 w-4 border-2 border-primary border-b-transparent group-hover:border-white group-hover:border-b-transparent rounded-full align-[-.125em] me-2"></span> Load More</a>
            </button>
        </div>
    </section>
</div>

<section class="bg-white py-6 relative">
    <div class="container">
        <div class="flex items-center flex-wrap">
            <div class="shrink md:text-end mt-4 lg:mt-0">
                <p class="text-sm mb-0">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Prompt. All rights reserved. Crafted by <a href="https://coderthemes.com/">Coderthemes</a>
                </p>
            </div>
        </div>
    </div>
</section>

@endsection