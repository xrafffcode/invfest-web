<nav class="sidebar">
    <div class="sidebar-header">

        <img src="{{ asset(getWebConfiguration()->logo) }}" class="sidebar-brand" width="40">
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            @hasrole('admin')
                <li class="nav-item {{ request()->is('admin/dashboard') ? ' active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('admin/guestbooks*') ? ' active' : '' }}">
                    <a href="{{ route('admin.guestbooks.index') }}" class="nav-link">
                        <i class="link-icon" data-feather="book"></i>
                        <span class="link-title">Buku Tamu</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('admin/graduations*') ? ' active' : '' }}">
                    <a href="{{ route('admin.graduations.index') }}" class="nav-link">
                        <i class="link-icon" data-feather="award"></i>
                        <span class="link-title">Pengumuman Kelulusan</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('admin/galleries*') ? ' active' : '' }}">
                    <a href="{{ route('admin.galleries.index') }}" class="nav-link">
                        <i class="link-icon" data-feather="image"></i>
                        <span class="link-title">Gallery</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('admin/achievements*') ? ' active' : '' }}">
                    <a href="{{ route('admin.achievements.index') }}" class="nav-link">
                        <i class="link-icon" data-feather="award"></i>
                        <span class="link-title">Prestasi</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('admin/teachers*') ? ' active' : '' }}">
                    <a href="{{ route('admin.teachers.index') }}" class="nav-link">
                        <i class="link-icon" data-feather="users"></i>
                        <span class="link-title">Data Guru</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('admin/banners*', 'admin/web-configuration') ? ' active' : '' }}">
                    <a class="nav-link" data-bs-toggle="collapse" href="#website-management" role="button"
                        aria-expanded="{{ request()->is('admin/banners*', 'admin/web-configuration') ? ' true' : '' }}"
                        aria-controls="website-management">
                        <i class="link-icon" data-feather="book-open"></i>
                        <span class="link-title">Manajemen Berita</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse {{ request()->is('admin/banners*', 'admin/web-configuration') ? 'show' : '' }}"
                        id="website-management">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{ route('admin.banners.index') }}"
                                    class="nav-link {{ request()->is('admin/banners*') ? ' active' : '' }}">Banner</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.web-configuration') }}"
                                    class="nav-link {{ request()->is('admin/web-configuration') ? ' active' : '' }}">Konfigurasi
                                    Web</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ request()->is('admin/banners*', 'admin/web-configuration') ? ' active' : '' }}">
                    <a class="nav-link" data-bs-toggle="collapse" href="#website-management" role="button"
                        aria-expanded="{{ request()->is('admin/banners*', 'admin/web-configuration') ? ' true' : '' }}"
                        aria-controls="website-management">
                        <i class="link-icon" data-feather="globe"></i>
                        <span class="link-title">Manajemen Website</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse {{ request()->is('admin/banners*', 'admin/web-configuration') ? 'show' : '' }}"
                        id="website-management">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{ route('admin.banners.index') }}"
                                    class="nav-link {{ request()->is('admin/banners*') ? ' active' : '' }}">Banner</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.web-configuration') }}"
                                    class="nav-link {{ request()->is('admin/web-configuration') ? ' active' : '' }}">Konfigurasi
                                    Web</a>
                            </li>
                        </ul>
                    </div>
                </li>
            @else
                <li class="nav-item {{ request()->is('petugas/guestbooks*') ? ' active' : '' }}">
                    <a href="{{ route('petugas.guestbooks.index') }}" class="nav-link">
                        <i class="link-icon" data-feather="book"></i>
                        <span class="link-title">Buku Tamu</span>
                    </a>
                </li>
            @endhasrole
        </ul>
    </div>
</nav>
<nav class="settings-sidebar">
    <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
            <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted mb-2">Sidebar:</h6>
        <div class="mb-3 pb-3 border-bottom">
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight"
                        value="sidebar-light" checked>
                    Light
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark"
                        value="sidebar-dark">
                    Dark
                </label>
            </div>
        </div>
        <div class="theme-wrapper">
            <h6 class="text-muted mb-2">Light Version:</h6>
            <a class="theme-item active" href="https://www.nobleui.com/laravel/template/demo1/">
                <img src="{{ url('assets/images/screenshots/light.jpg') }}" alt="light version">
            </a>
            <h6 class="text-muted mb-2">Dark Version:</h6>
            <a class="theme-item" href="https://www.nobleui.com/laravel/template/demo2/">
                <img src="{{ url('assets/images/screenshots/dark.jpg') }}" alt="light version">
            </a>
        </div>
    </div>
</nav>
