<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li class="menu-title" key="t-menu">@lang('translation.Menu')</li>

                <!-- User Management Menu -->
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-user-management">@lang('translation.User_Management')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('users.index')}}" key="t-users">Users</a></li>
                        <li><a href="{{route('permissions.index')}}" key="t-permissions">Permissions</a></li>
                        <li><a href="{{route('roles.index')}}" key="t-roles">Roles</a></li>
                    </ul>
                </li>

                <!-- Template Wrapper for All Other Menus -->
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-template">@lang('translation.Template')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <!-- Paste your entire original sidebar content here -->
                        @include('layouts.partials.sidebar-template')
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
