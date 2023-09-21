<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="({{ route('dashboard') }})" class="brand-link">
        <img src="{{ asset('template/dist/img/AdminLTELogo.png') }}" alt="Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Perpustakaan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar mt-2">
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Anggota
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </div>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('anggota.index') }}" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Data Anggota
                                </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('anggota.create') }}" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Add Data Anggota
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <div class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Buku
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </div>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('buku.index') }}" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Data Buku
                                </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('buku.create') }}" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Add Data Buku
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <div class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Petugas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </div>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('petugas.index') }}" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Data Petugas
                                </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('petugas.create') }}" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Add Data Petugas
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->
