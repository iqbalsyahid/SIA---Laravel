<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SIA</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item ">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>{{ __('Dashboard') }}</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            {{ __('Master Data') }}
        </div>

        <!-- Nav Item - Profile -->
        @role('admin')
        <li class="nav-item ">
            <a class="nav-link" href="{{ route('user.index') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>{{ __('Master User') }}</span>
            </a>
        </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{ route('barang.index') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>{{ __('Master Barang') }}</span>
                </a>
            </li>
            
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('supplier.index') }}">
                        <i class="fas fa-fw fa-user"></i>
                        <span>{{ __('Master Supplier') }}</span>
                    </a>
                </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('akun.index') }}">
                            <i class="fas fa-fw fa-book"></i> 
                            <span>{{ __('Master Akun') }}</span>
                        </a>
                    </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('setting.index') }}">
                                <i class="fas fa-fw fa-cog"></i>
                                <span>{{ __('Setting Akun') }}</span>
                            </a>
                        </li>
        @endrole

       

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>