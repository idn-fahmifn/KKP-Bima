<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive Tailwind CSS Multipurpose agency, application, business, clean, creative, cryptocurrency, it solutions, startup, career, blog, modern, creative, multipurpose, portfolio, saas, software, tailwind css, etc." name="description" />
    <meta content="coderthemes" name="author" />

    <!-- Theme favicon -->
    <link rel="shortcut icon" href="https://psb.idn.sch.id/landing/images/Logo-IDN-Landscape.webp">

    <!--Swiper slider css-->
    <link href="{{asset('assets/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Animation on Scroll css -->
    <link href="{{asset('assets/libs/aos/aos.css')}}" rel="stylesheet" type="text/css">

    <!-- Style css -->
    <link href="{{asset('assets/css/style.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- =========== Navbar Start =========== -->
    <header class="@@link-color fixed top-0 inset-x-0 flex items-center z-40 w-full bg-white transition-all py-3.5">
        <div class="container">
            <nav class="flex items-center">
                <!-- Navbar Brand Logo -->
                <a href="index.html">
                    <img src="https://psb.idn.sch.id/landing/images/Logo-IDN-Landscape.webp" class="h-8 logo-dark" alt="Logo Dark">
                    <img src="https://psb.idn.sch.id/landing/images/Logo-IDN-Landscape.webp" class="h-8 logo-light" alt="Logo Light">
                </a>

                <!-- Nevigation Menu -->
                <div class="hidden lg:block mx-auto grow">
                    <ul id="navbar-navlist" class="grow flex flex-col lg:flex-row lg:items-center lg:justify-center mt-4 lg:mt-0">
                        <li class="nav-item pe-4">
                            <a class="nav-link flex items-center font-medium py-2 px-4 lg:py-0 text-primary"  href="index.html">
                                <span class="shrink-0 me-2">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Stockholm-icons / Layout / Layout-4-blocks</title><desc>Created with Sketch.</desc><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect id="bound" x="0" y="0" width="24" height="24"></rect><rect id="Rectangle-7" fill="currentColor" x="4" y="4" width="7" height="7" rx="1.5"></rect><path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path></g></svg>
                                </span>    
                                <span class="grow">Home</span>
                            </a>
                        </li>
                        <li class="nav-item pe-4">
                            <a class="nav-link flex items-center font-medium py-2 px-4 lg:py-0 text-gray-700 hover:text-primary transition-all" href="index.html">
                                <span class="shrink-0 me-2">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Stockholm-icons / Files / Group-folders</title><desc>Created with Sketch.</desc><g id="Stockholm-icons-/-Files-/-Group-folders" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <rect id="bound" x="0" y="0" width="24" height="24"></rect> <path d="M4.5,21 L21.5,21 C22.3284271,21 23,20.3284271 23,19.5 L23,8.5 C23,7.67157288 22.3284271,7 21.5,7 L11,7 L8.43933983,4.43933983 C8.15803526,4.15803526 7.77650439,4 7.37867966,4 L4.5,4 C3.67157288,4 3,4.67157288 3,5.5 L3,19.5 C3,20.3284271 3.67157288,21 4.5,21 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path> <path d="M2.5,19 L19.5,19 C20.3284271,19 21,18.3284271 21,17.5 L21,6.5 C21,5.67157288 20.3284271,5 19.5,5 L9,5 L6.43933983,2.43933983 C6.15803526,2.15803526 5.77650439,2 5.37867966,2 L2.5,2 C1.67157288,2 1,2.67157288 1,3.5 L1,17.5 C1,18.3284271 1.67157288,19 2.5,19 Z" id="Combined-Shape-Copy" fill="currentColor"></path></g></svg>
                                </span>    
                                <span class="grow">Laporan Pengaduan</span>
                            </a>
                        </li>
                        <li class="nav-item pe-4">
                            <a class="nav-link flex items-center font-medium py-2 px-4 lg:py-0 text-gray-700 hover:text-primary transition-all" href="index.html">
                                <span class="shrink-0 me-2">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Stockholm-icons / Text / Article</title><desc>Created with Sketch.</desc><g id="Stockholm-icons-/-Text-/-Article" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect id="bound" x="0" y="0" width="24" height="24"></rect><rect id="Rectangle-20" fill="currentColor" x="4" y="5" width="16" height="3" rx="1.5"></rect><path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path></g></svg>
                                </span>    
                                <span class="grow">Tanggapan</span>
                            </a>
                        </li>
                        <li class="nav-item pe-4">
                            <a class="nav-link flex items-center font-medium py-2 px-4 lg:py-0 text-gray-700 hover:text-primary transition-all" href="index.html">
                                <span class="shrink-0 me-2">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Stockholm-icons / Media / Equalizer</title><desc>Created with Sketch.</desc><g id="Stockholm-icons-/-Media-/-Equalizer" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect id="bound" x="0" y="0" width="24" height="24"></rect><rect id="Rectangle-62-Copy" fill="currentColor" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect><rect id="Rectangle-62-Copy-2" fill="currentColor" x="8" y="9" width="3" height="11" rx="1.5"></rect><rect id="Rectangle-62-Copy-4" fill="currentColor" x="18" y="11" width="3" height="9" rx="1.5"></rect><rect id="Rectangle-62-Copy-3" fill="currentColor" x="3" y="13" width="3" height="7" rx="1.5"></rect></g></svg>
                                </span>    
                                <span class="grow">Pengaduan Selesai</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="block grow ms-auto lg:shrink me-4 lg:me-0">
                    <ul class="navbar-nav flex gap-x-3 items-center justify-end lg:justify-center">

                        <!-- Inner Page Dropdown -->
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link after:absolute hover:after:-bottom-10 after:inset-0" data-fc-target="innerPageDropdownMenu" data-fc-type="dropdown" data-fc-placement="bottom">
                                <div class="flex items-center">
                                    <div class="shrink">
                                        <div class="h-8 w-8 me-2">
                                            <img src="assets/images/avatars/img-8.jpg" class="avatar h-full w-full rounded-full me-2" alt="">
                                        </div>
                                    </div>
                                    <div class="hidden lg:block grow ms-1 leading-normal">
                                        <span class="block text-sm font-medium">Bima Wicaksono</span>
                                        <span class="block text-gray-400 text-xs">Admin</span>
                                    </div>
                                </div>
                            </a>

                            <div id="innerPageDropdownMenu" class="hidden opacity-0 mt-4 fc-dropdown-open:opacity-100 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all bg-white rounded-lg shadow-lg border p-2 w-48 space-y-1.5">
                                <!-- Dropdown item -->
                                <div class="nav-item rounded hover:bg-slate-100 transition-all">
                                    <a class="nav-link !p-2" href="#">
                                        <svg class="h-4 w-4 me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user icon icon-xxs me-1 icon-dual"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        Profile
                                    </a>
                                </div>

                                <!-- Dropdown item -->
                                <div class="nav-item rounded hover:bg-slate-100 transition-all">
                                    <a class="nav-link !p-2" href="#">
                                        <svg class="h-4 w-4 me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings icon icon-xxs me-1 icon-dual"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                                        Settings
                                    </a>
                                </div>

                                <!-- Dropdown item -->
                                <div class="nav-item rounded hover:bg-slate-100 transition-all">
                                    <a class="nav-link !p-2" href="#">
                                        <svg class="h-4 w-4 me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-aperture icon icon-xxs me-1 icon-dual"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
                                        Support
                                    </a>
                                </div>
                            
                                <hr class="-mx-2 my-2">

                                <!-- Dropdown item -->
                                <div class="nav-item rounded hover:bg-slate-100 transition-all">
                                    <a class="nav-link !p-2" href="#">
                                        <svg class="h-4 w-4 me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-unlock icon icon-xxs me-1 icon-dual"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 9.9-1"></path></svg>
                                        Sign Out
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Moblie Menu Toggle Button (Offcanvas Button) -->
                <div class="lg:hidden flex items-center ms-auto px-2.5">
                    <button type="button" data-fc-target="mobileMenu" data-fc-type="offcanvas">
                        <i class="fa-solid fa-bars text-2xl text-gray-500"></i>
                    </button>
                </div>
            </nav>
        </div>
    </header>
    <!-- =========== Navbar End =========== -->

    <!-- =========== Mobile Menu Start (Offcanvas) =========== -->
    <div id="mobileMenu" class="fc-offcanvas-open:-translate-x-0 -translate-x-full fixed top-0 end-0 transition-all duration-200 transform h-full w-full max-w-md z-50 bg-white border-e hidden">
        <div class="flex flex-col h-full divide-y-2 divide-gray-200">
            <!-- Mobile Menu Topbar Logo (Header) -->
            <div class="p-6 flex items-center justify-between">
                <a href="index.html">
                    <img src="assets/images/logo-dark.png" class="h-8" alt="Logo">
                </a>

                <button data-fc-dismiss class="flex items-center px-2">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>

            <!-- Mobile Menu Link List -->
            <div class="p-6 overflow-scroll h-full">
                <ul class="navbar-nav flex flex-col gap-2" data-fc-type="accordion">
                    <!-- Home Page Link -->
                    <li class="nav-item">
                        <a href="index.html" class="nav-link"><span class="shrink-0 me-2">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Stockholm-icons / Layout / Layout-4-blocks</title><desc>Created with Sketch.</desc><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect id="bound" x="0" y="0" width="24" height="24"></rect><rect id="Rectangle-7" fill="currentColor" x="4" y="4" width="7" height="7" rx="1.5"></rect><path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path></g></svg>
                        </span>    
                        <span class="grow">Home</span></a>
                    </li>
             
                    <!-- Home Page Link -->
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">
                            <span class="shrink-0 me-2">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Stockholm-icons / Files / Group-folders</title><desc>Created with Sketch.</desc><g id="Stockholm-icons-/-Files-/-Group-folders" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <rect id="bound" x="0" y="0" width="24" height="24"></rect> <path d="M4.5,21 L21.5,21 C22.3284271,21 23,20.3284271 23,19.5 L23,8.5 C23,7.67157288 22.3284271,7 21.5,7 L11,7 L8.43933983,4.43933983 C8.15803526,4.15803526 7.77650439,4 7.37867966,4 L4.5,4 C3.67157288,4 3,4.67157288 3,5.5 L3,19.5 C3,20.3284271 3.67157288,21 4.5,21 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path> <path d="M2.5,19 L19.5,19 C20.3284271,19 21,18.3284271 21,17.5 L21,6.5 C21,5.67157288 20.3284271,5 19.5,5 L9,5 L6.43933983,2.43933983 C6.15803526,2.15803526 5.77650439,2 5.37867966,2 L2.5,2 C1.67157288,2 1,2.67157288 1,3.5 L1,17.5 C1,18.3284271 1.67157288,19 2.5,19 Z" id="Combined-Shape-Copy" fill="currentColor"></path></g></svg>
                            </span>
                            <span class="grow">Projects</span>
                        </a>
                    </li>
                
                    <!-- Home Page Link -->
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">
                            <span class="shrink-0 me-2">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Stockholm-icons / Text / Article</title><desc>Created with Sketch.</desc><g id="Stockholm-icons-/-Text-/-Article" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect id="bound" x="0" y="0" width="24" height="24"></rect><rect id="Rectangle-20" fill="currentColor" x="4" y="5" width="16" height="3" rx="1.5"></rect><path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path></g></svg>
                            </span>
                            <span class="grow">Tasks</span>
                        </a>
                    </li>
                
                    <!-- Home Page Link -->
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">
                            <span class="shrink-0 me-2">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Stockholm-icons / Media / Equalizer</title><desc>Created with Sketch.</desc><g id="Stockholm-icons-/-Media-/-Equalizer" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect id="bound" x="0" y="0" width="24" height="24"></rect><rect id="Rectangle-62-Copy" fill="currentColor" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect><rect id="Rectangle-62-Copy-2" fill="currentColor" x="8" y="9" width="3" height="11" rx="1.5"></rect><rect id="Rectangle-62-Copy-4" fill="currentColor" x="18" y="11" width="3" height="9" rx="1.5"></rect><rect id="Rectangle-62-Copy-3" fill="currentColor" x="3" y="13" width="3" height="7" rx="1.5"></rect></g></svg>
                            </span>    
                            <span class="grow">Reports</span>
                        </a>
                    </li>
                
                    <!-- Home Page Link -->
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">
                            <span class="shrink-0 me-2">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Stockholm-icons / Shopping / Settings</title><desc>Created with Sketch.</desc><g id="Stockholm-icons-/-Shopping-/-Settings" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect id="Bound" opacity="0.200000003" x="0" y="0" width="24" height="24"></rect><path d="M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path><path d="M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z" id="Combined-Shape" fill="currentColor"></path></g></svg>
                            </span>    
                            <span class="grow">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Mobile Menu User (Footer) -->
            <div class="px-6 py-4 flex items-center">
                <button class="bg-primary w-full text-white p-3 rounded flex items-center justify-center text-sm">Download</button>
            </div>
        </div>
    </div>
    <!-- =========== Mobile Menu End =========== -->

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
                                            <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon icon-xs"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </button>

                                        <div id="dropdown-target" class="hidden bg-white  shadow rounded py-2 px-1.5 min-w-[10rem]">
                                            <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded" href="javascript:void(0)">
                                                <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit icon-xxs icon me-2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                                <span class="">Share</span>
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded" href="javascript:void(0)">
                                                <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw icon-xxs icon me-2"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                <span class="">Refresh</span>
                                            </a>
                                            
                                            <hr class="my-2">
                                            
                                            <a class="flex items-center py-1.5 px-5 text-base text-red-500 hover:bg-slate-100 rounded" href="javascript:void(0)">
                                                <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon-xxs icon me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                <span class="">Deactivate</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex gap-4 flex-wrap py-4 border-b">
                                    <div class="mb-2">
                                        <a href="#" class="flex gap-0.5 text-gray-400 text-sm"><svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail icon-xs icon me-1"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>greeva@coderthemes.com</a>
                                    </div>
                                    <div class="mb-2">
                                        <a href="#" class="flex gap-0.5 text-gray-400 text-sm"><svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone icon-xxs icon me-2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>+00 123-456-789</a>
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
                                        <svg class="text-green-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle icon-dual-success"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
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
                                        <svg class="text-sky-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 icon-dual-info"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
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
                                            <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon icon-xs"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </button>

                                        <div id="dropdown-target" class="hidden bg-white  shadow rounded py-2 px-1.5 min-w-[10rem]">
                                            <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded" href="javascript:void(0)">
                                                <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit icon-xxs icon me-2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                                <span class="">Share</span>
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded" href="javascript:void(0)">
                                                <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw icon-xxs icon me-2"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
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
                                                <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-success"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
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
                                                <svg class="h-6 w-6 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down text-danger"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
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
                        <a href="#" class="font-semibold text-primary text-sm">View All <svg class="h-5 w   5 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right ms-1 icon-xxs"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
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
                                        <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon icon-xs"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </button>

                                    <div id="recent-drop-1" class="hidden bg-white  shadow rounded py-2 px-1.5 min-w-[10rem]">
                                        <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded" href="javascript:void(0)">
                                            <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-xxs icon me-2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            <span class="">View</span>
                                        </a>
                                        <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded" href="javascript:void(0)">
                                            <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 icon-xxs icon me-2"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                            <span class="">Edit</span>
                                        </a>
                                        
                                        <hr class="my-2">
                                        
                                        <a class="flex items-center py-1.5 px-5 text-base text-red-500 hover:bg-slate-100 rounded" href="javascript:void(0)">
                                            <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon-xxs icon me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
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
                                        <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon icon-xs"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </button>

                                    <div id="recent-drop-1" class="hidden bg-white  shadow rounded py-2 px-1.5 min-w-[10rem]">
                                        <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded" href="javascript:void(0)">
                                            <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-xxs icon me-2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            <span class="">View</span>
                                        </a>
                                        <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded" href="javascript:void(0)">
                                            <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 icon-xxs icon me-2"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                            <span class="">Edit</span>
                                        </a>
                                        
                                        <hr class="my-2">
                                        
                                        <a class="flex items-center py-1.5 px-5 text-base text-red-500 hover:bg-slate-100 rounded" href="javascript:void(0)">
                                            <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon-xxs icon me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
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
                                        <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon icon-xs"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </button>

                                    <div id="recent-drop-1" class="hidden bg-white  shadow rounded py-2 px-1.5 min-w-[10rem]">
                                        <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded" href="javascript:void(0)">
                                            <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-xxs icon me-2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            <span class="">View</span>
                                        </a>
                                        <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded" href="javascript:void(0)">
                                            <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 icon-xxs icon me-2"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                            <span class="">Edit</span>
                                        </a>
                                        
                                        <hr class="my-2">
                                        
                                        <a class="flex items-center py-1.5 px-5 text-base text-red-500 hover:bg-slate-100 rounded" href="javascript:void(0)">
                                            <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon-xxs icon me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
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
                        <a href="#" class="font-semibold text-primary text-sm">View All <svg class="h-5 w-5 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right ms-1 icon-xxs"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
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
                                                <svg class="h-5 w-5 text-gray-800 inline" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch --><title>Stockholm-icons / Text / Bullet-list</title><desc>Created with Sketch.</desc><g id="Stockholm-icons-/-Text-/-Bullet-list" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect id="bound" x="0" y="0" width="24" height="24"></rect><path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" id="Combined-Shape" fill="currentColor"></path><path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path></g></svg>
                                                <span class="text-sm text-gray-800 font-medium">3/7</span>
                                            </div>
                                            <div class="bg-gray-800 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                10 Subtasks are completed
                                                <div class="bg-gray-800 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]" data-fc-arrow></div>
                                            </div>
                                        </div>
                                        
                                        <div class="">
                                            <div class="inline-flex items-center gap-2" data-fc-type="tooltip">
                                                <svg class="h-5 w-5 text-gray-800 inline" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch --><title>Stockholm-icons / Text / Bullet-list</title><desc>Created with Sketch.</desc><g id="Stockholm-icons-/-Text-/-Bullet-list" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect id="bound" x="0" y="0" width="24" height="24"></rect><path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" id="Combined-Shape" fill="currentColor"></path><path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path></g></svg>
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
                                                <svg class="h-5 w-5 text-gray-800 inline" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch --><title>Stockholm-icons / Text / Bullet-list</title><desc>Created with Sketch.</desc><g id="Stockholm-icons-/-Text-/-Bullet-list" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect id="bound" x="0" y="0" width="24" height="24"></rect><path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" id="Combined-Shape" fill="currentColor"></path><path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path></g></svg>
                                                <span class="text-sm text-gray-800 font-medium">10/11</span>
                                            </div>
                                            <div class="bg-gray-800 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                10 Subtasks are completed
                                                <div class="bg-gray-800 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]" data-fc-arrow></div>
                                            </div>
                                        </div>
                                        
                                        <div class="">
                                            <div class="inline-flex items-center gap-2" data-fc-type="tooltip">
                                                <svg class="h-5 w-5 text-gray-800 inline" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch --><title>Stockholm-icons / Text / Bullet-list</title><desc>Created with Sketch.</desc><g id="Stockholm-icons-/-Text-/-Bullet-list" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect id="bound" x="0" y="0" width="24" height="24"></rect><path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" id="Combined-Shape" fill="currentColor"></path><path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path></g></svg>
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
                                                <svg class="h-5 w-5 text-gray-800 inline" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch --><title>Stockholm-icons / Text / Bullet-list</title><desc>Created with Sketch.</desc><g id="Stockholm-icons-/-Text-/-Bullet-list" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect id="bound" x="0" y="0" width="24" height="24"></rect><path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" id="Combined-Shape" fill="currentColor"></path><path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path></g></svg>
                                                <span class="text-sm text-gray-800 font-medium">05/11</span>
                                            </div>
                                            <div class="bg-gray-800 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                5 Subtasks are completed
                                                <div class="bg-gray-800 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]" data-fc-arrow></div>
                                            </div>
                                        </div>
                                        
                                        <div class="">
                                            <div class="inline-flex items-center gap-2" data-fc-type="tooltip">
                                                <svg class="h-5 w-5 text-gray-800 inline" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch --><title>Stockholm-icons / Text / Bullet-list</title><desc>Created with Sketch.</desc><g id="Stockholm-icons-/-Text-/-Bullet-list" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect id="bound" x="0" y="0" width="24" height="24"></rect><path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" id="Combined-Shape" fill="currentColor"></path><path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path></g></svg>
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
                                                <svg class="h-5 w-5 text-gray-800 inline" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch --><title>Stockholm-icons / Text / Bullet-list</title><desc>Created with Sketch.</desc><g id="Stockholm-icons-/-Text-/-Bullet-list" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect id="bound" x="0" y="0" width="24" height="24"></rect><path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" id="Combined-Shape" fill="currentColor"></path><path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path></g></svg>
                                                <span class="text-sm text-gray-800 font-medium">0/3</span>
                                            </div>
                                            <div class="bg-gray-800 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                0 Subtasks are completed
                                                <div class="bg-gray-800 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]" data-fc-arrow></div>
                                            </div>
                                        </div>
                                        
                                        <div class="">
                                            <div class="inline-flex items-center gap-2" data-fc-type="tooltip">
                                                <svg class="h-5 w-5 text-gray-800 inline" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch --><title>Stockholm-icons / Text / Bullet-list</title><desc>Created with Sketch.</desc><g id="Stockholm-icons-/-Text-/-Bullet-list" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect id="bound" x="0" y="0" width="24" height="24"></rect><path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" id="Combined-Shape" fill="currentColor"></path><path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path></g></svg>
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
                <div class="grow">
                    <div class="flex items-center gap-3">
                        <div class="inline-flex items-center"><a href="#">About <i class="fa-solid fa-minus text-sm"></i></a></div>
                        <div class="inline-flex items-center"><a href="#">Privacy <i class="fa-solid fa-minus text-sm"></i></a></div>
                        <div class="inline-flex items-center"><a href="#">Terms <i class="fa-solid fa-minus text-sm"></i></a></div>
                        <div class="inline-flex items-center"><a href="#">Developers <i class="fa-solid fa-minus text-sm"></i></a></div>
                        <div class="inline-flex items-center"><a href="#">Support <i class="fa-solid fa-minus text-sm"></i></a></div>
                        <div class="inline-flex items-center"><a href="#">Careers<span class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-semibold bg-green-500/10 text-green-500">We're hiring</span></a></div>
                    </div>
                </div>
                <div class="shrink md:text-end mt-4 lg:mt-0">
                    <p class="text-sm mb-0"><script>document.write(new Date().getFullYear())</script> © Prompt. All rights reserved. Crafted by <a href="https://coderthemes.com/">Coderthemes</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========== Back To Top Start =========== -->
    <button data-toggle="back-to-top" class="fixed text-sm rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-primary/20 text-primary flex justify-center items-center">
        <i class="fa-solid fa-arrow-up text-base"></i>
    </button>
    <!-- =========== Back To Top End =========== -->

    <!-- Frost Plugin Js -->
    <script src="{{asset('assets/libs/@frostui/tailwindcss/frostui.js')}}"></script>

    <!-- Theme Js -->
    <script src="{{asset('assets/js/theme.min.js')}}"></script>

</body>

</html>