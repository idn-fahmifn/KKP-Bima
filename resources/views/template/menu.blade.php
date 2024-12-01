@if (Auth::user()->isAdmin)
<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        <a href="index.html" class="sidebar-logo">
            <img src="{{asset('assets/images/logo-biru.png')}}" alt="site logo" class="light-logo img-fluid">
            <img src="{{asset('assets/images/logo-putih.png')}}" alt="site logo" class="dark-logo img-fluid">
            <img src="{{asset('assets/images/logo-biru.png')}}" alt="site logo" class="logo-icon img-fluid">
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
            <li>
                <a href="{{route('dashboard')}}">
                    <iconify-icon icon="mage:email" class="menu-icon"></iconify-icon>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-menu-group-title">Menu</li>
            <li>
                <a href="https://youtube.com">
                    <iconify-icon icon="mage:email" class="menu-icon"></iconify-icon>
                    <span>Pelapor Pengaduan</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Laporan Pengaduan</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="https://youtube.com"><i class="ri-circle-fill circle-icon text-secondary-main w-auto"></i> Semua Pengaduan</a>
                    </li>
                    <li>
                        <a href="https://youtube.com"><i class="ri-circle-fill circle-icon text-info-600 w-auto"></i> Pengaduan Masuk</a>
                    </li>
                    <li>
                        <a href="https://youtube.com"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Pengaduan Diproses </a>
                    </li>
                    <li>
                        <a href="https://youtube.com"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Tanggapan Pengaduan</a>
                    </li>
                    <li>
                        <a href="https://youtube.com"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Pengaduan Selesai</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="https://youtube.com">
                    <iconify-icon icon="mage:email" class="menu-icon"></iconify-icon>
                    <span>Pengumuman</span>
                </a>
            </li>
            <li>
                <a href="calendar-main.html">
                    <iconify-icon icon="solar:calendar-outline" class="menu-icon"></iconify-icon>
                    <span>Sarana dan Prasarana</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

@else
<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        <a href="index.html" class="sidebar-logo">
            <img src="{{asset('assets/images/logo-biru.png')}}" alt="site logo" class="light-logo img-fluid">
            <img src="{{asset('assets/images/logo-putih.png')}}" alt="site logo" class="dark-logo img-fluid">
            <img src="{{asset('assets/images/logo-biru.png')}}" alt="site logo" class="logo-icon img-fluid">
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
            <li>
                <a href="{{route('dashboard')}}">
                    <iconify-icon icon="mage:email" class="menu-icon"></iconify-icon>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-menu-group-title">Menu</li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Pengaduan</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="https://youtube.com"><i class="ri-circle-fill circle-icon text-secondary-main w-auto"></i> Ajukan Pengaduan</a>
                    </li>
                    <li>
                        <a href="https://youtube.com"><i class="ri-circle-fill circle-icon text-info-600 w-auto"></i> Pengaduan Saya</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="https://youtube.com">
                    <iconify-icon icon="mage:email" class="menu-icon"></iconify-icon>
                    <span>Pengumuman</span>
                </a>
            </li>
            <li>
                <a href="calendar-main.html">
                    <iconify-icon icon="solar:calendar-outline" class="menu-icon"></iconify-icon>
                    <span>Sarana dan Prasarana</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
@endif