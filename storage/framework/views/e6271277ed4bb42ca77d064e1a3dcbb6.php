<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li class="menu-title" key="t-menu"><?php echo app('translator')->get('translation.Menu'); ?></li>

                <!-- User Management Menu -->
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-user-management"><?php echo app('translator')->get('translation.User_Management'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" key="t-users">Users</a></li>
                        <li><a href="#" key="t-permissions">Permissions</a></li>
                        <li><a href="#" key="t-roles">Roles</a></li>
                    </ul>
                </li>

                <!-- Template Wrapper for All Other Menus -->
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-template"><?php echo app('translator')->get('translation.Template'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <!-- Paste your entire original sidebar content here -->
                        <?php echo $__env->make('layouts.partials.sidebar-template', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH /var/www/html/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>