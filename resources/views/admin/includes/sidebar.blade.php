<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashBoard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Preschool Dashboard </div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ request()->is('admin/dashBoard') ? 'active show' : '' }}">
        <a class="nav-link {{ request()->is('admin/dashBoard') ? 'active' : '' }}" href="{{ route('dashBoard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Interface
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="{{ request()->is('admin/buttons') || request()->is('admin/cards') ? 'true' : 'false' }}"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse {{ request()->is('admin/buttons') || request()->is('admin/cards') ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item {{ request()->is('admin/buttons') ? 'active' : '' }}" href="{{ route('buttons') }}">Buttons</a>
                <a class="collapse-item {{ request()->is('admin/cards') ? 'active' : '' }}" href="{{ route('cards') }}">Cards</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="{{ request()->is('admin/color') || request()->is('admin/border') || request()->is('admin/animation') || request()->is('admin/other') ? 'true' : 'false' }}"
            aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse {{ request()->is('admin/color') || request()->is('admin/border') || request()->is('admin/animation') || request()->is('admin/other') ? 'show' : '' }}"
            aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item {{ request()->is('admin/color') ? 'active' : '' }}" href="{{ route('color') }}">Colors</a>
                <a class="collapse-item {{ request()->is('admin/border') ? 'active' : '' }}" href="{{ route('border') }}">Borders</a>
                <a class="collapse-item {{ request()->is('admin/animation') ? 'active' : '' }}" href="{{ route('animation') }}">Animations</a>
                <a class="collapse-item {{ request()->is('admin/other') ? 'active' : '' }}" href="{{ route('other') }}">Other</a>
            </div>
        </div>
    </li>

    
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="{{ request()->is('admin/login') || request()->is('admin/register') || request()->is('admin/forgotPassword') || request()->is('admin/error') || request()->is('admin/blank') ? 'true' : 'false' }}"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse {{ request()->is('admin/login') || request()->is('admin/register') || request()->is('admin/forgotPassword') || request()->is('admin/error') || request()->is('admin/blank') ? 'show' : '' }}"
            aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item {{ request()->is('admin/login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                <a class="collapse-item {{ request()->is('admin/register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                <a class="collapse-item {{ request()->is('admin/forgotPassword') ? 'active' : '' }}" href="{{ route('forgotPassword') }}">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item {{ request()->is('admin/error') ? 'active' : '' }}" href="{{ route('error') }}">404 Page</a>
                <a class="collapse-item {{ request()->is('admin/blank') ? 'active' : '' }}" href="{{ route('blank') }}">Blank Page</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link {{request()->is('admin/charts')?"active" : ""}}" href="{{route('charts')}}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span>
        </a>
    </li>
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link {{request()->is('admin/tables')?"active" : ""}}" href="{{route('tables')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

       


</ul>
