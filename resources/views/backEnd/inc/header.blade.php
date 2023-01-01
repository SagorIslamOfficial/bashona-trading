<header class="header header-sticky mb-4">
    <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3"
                onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()"
                type="button">
            <svg class="icon icon-lg">
                <use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
            </svg>
        </button>
        <a class="header-brand d-md-none" href="#">
            <svg alt="CoreUI Logo" height="46" width="118">
                <use xlink:href="{{ asset('backEnd/assets/brand/coreui.svg#full') }}"></use>
            </svg>
        </a>
        <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="{{ route("admin") }}">Dashboard</a></li>
        </ul>
        <ul class="header-nav ms-auto"></ul>

        <ul class="header-nav ms-3">
            <li class="nav-item dropdown">
                <a aria-expanded="false" aria-haspopup="true" class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button">
                    <div class="avatar avatar-md"><img alt="user@email.com" class="avatar-img" src="{{ asset('backEnd/assets/img/avatars/backend-logo.png') }}"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">

                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <svg class="icon me-2"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cil-hand-point-left') }}"></use></svg>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</header>
