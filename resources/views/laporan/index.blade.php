@extends('template.template')
@section('content')

<!-- Mobile Menu -->
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
                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>Stockholm-icons / Layout / Layout-4-blocks</title>
                                <desc>Created with Sketch.</desc>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                    <rect id="Rectangle-7" fill="currentColor" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                                    <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="grow">Home</span></a>
                </li>

                <!-- Home Page Link -->
                <li class="nav-item">
                    <a href="index.html" class="nav-link">
                        <span class="shrink-0 me-2">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>Stockholm-icons / Files / Group-folders</title>
                                <desc>Created with Sketch.</desc>
                                <g id="Stockholm-icons-/-Files-/-Group-folders" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                    <path d="M4.5,21 L21.5,21 C22.3284271,21 23,20.3284271 23,19.5 L23,8.5 C23,7.67157288 22.3284271,7 21.5,7 L11,7 L8.43933983,4.43933983 C8.15803526,4.15803526 7.77650439,4 7.37867966,4 L4.5,4 C3.67157288,4 3,4.67157288 3,5.5 L3,19.5 C3,20.3284271 3.67157288,21 4.5,21 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                    <path d="M2.5,19 L19.5,19 C20.3284271,19 21,18.3284271 21,17.5 L21,6.5 C21,5.67157288 20.3284271,5 19.5,5 L9,5 L6.43933983,2.43933983 C6.15803526,2.15803526 5.77650439,2 5.37867966,2 L2.5,2 C1.67157288,2 1,2.67157288 1,3.5 L1,17.5 C1,18.3284271 1.67157288,19 2.5,19 Z" id="Combined-Shape-Copy" fill="currentColor"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="grow">Projects</span>
                    </a>
                </li>

                <!-- Home Page Link -->
                <li class="nav-item">
                    <a href="index.html" class="nav-link">
                        <span class="shrink-0 me-2">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>Stockholm-icons / Text / Article</title>
                                <desc>Created with Sketch.</desc>
                                <g id="Stockholm-icons-/-Text-/-Article" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                    <rect id="Rectangle-20" fill="currentColor" x="4" y="5" width="16" height="3" rx="1.5"></rect>
                                    <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="grow">Tasks</span>
                    </a>
                </li>

                <!-- Home Page Link -->
                <li class="nav-item">
                    <a href="index.html" class="nav-link">
                        <span class="shrink-0 me-2">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>Stockholm-icons / Media / Equalizer</title>
                                <desc>Created with Sketch.</desc>
                                <g id="Stockholm-icons-/-Media-/-Equalizer" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                    <rect id="Rectangle-62-Copy" fill="currentColor" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
                                    <rect id="Rectangle-62-Copy-2" fill="currentColor" x="8" y="9" width="3" height="11" rx="1.5"></rect>
                                    <rect id="Rectangle-62-Copy-4" fill="currentColor" x="18" y="11" width="3" height="9" rx="1.5"></rect>
                                    <rect id="Rectangle-62-Copy-3" fill="currentColor" x="3" y="13" width="3" height="7" rx="1.5"></rect>
                                </g>
                            </svg>
                        </span>
                        <span class="grow">Reports</span>
                    </a>
                </li>

                <!-- Home Page Link -->
                <li class="nav-item">
                    <a href="index.html" class="nav-link">
                        <span class="shrink-0 me-2">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>Stockholm-icons / Shopping / Settings</title>
                                <desc>Created with Sketch.</desc>
                                <g id="Stockholm-icons-/-Shopping-/-Settings" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect id="Bound" opacity="0.200000003" x="0" y="0" width="24" height="24"></rect>
                                    <path d="M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                    <path d="M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z" id="Combined-Shape" fill="currentColor"></path>
                                </g>
                            </svg>
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

<!-- Akhir -->


<!-- Header -->

<div class="bg-slate-100  mt-[77px]  py-3 px-3">
    <section class="relative overflow-hidden">
        <div class="container">
            <div class="flex">
                <div class="w-full">
                    <h3 class="text-xl text-gray-800 mt-2">Hi, Fahmi Nuradi</h3>
                    <p class="mt-1 font-medium mb-4">Selamat datang!</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden p-4">
                <!-- Tabel responsif dalam card -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white divide-y divide-gray-200 table-auto" id="example">
                        <thead class="mt-3">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul Pengaduan</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kategori</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Update</th>
                            </tr>
                        </thead>
                        <tbody class="mb-4">
                            <tr>
                                <td class="px-6 py-4">Lampu Lapangan Mati</td>
                                <td class="px-6 py-4">Laporan Sarpras</td>
                                <td class="px-6 py-4">
                                <span class="bg-gray-500/10 text-gray-500 font-medium rounded-md text-xs py-1 px-2"><a href="#">Pending</a></span>
                                </td>
                                <td class="px-6 py-4">10/11/2024</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">Tangga Saung Patah</td>
                                <td class="px-6 py-4">Pengajuan Pengadaan Sarpras</td>
                                <td class="px-6 py-4">
                                <span class="bg-green-500/10 text-green-500 font-medium rounded-md text-xs py-1 px-2"><a href="#">diproses</a></span>
                                </td>
                                <td class="px-6 py-4">10/11/2024</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- End header -->

@endsection