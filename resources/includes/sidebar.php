<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PHP Store Task</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/admin" class="nav-link <?= giveClass('/admin', 'active') ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard </p>
                    </a>
                </li>
                <!-- Users -->
                <li class="nav-item">
                    <a href="/admin/users" class="nav-link <?= giveClass('/admin/users', 'active') ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Users </p>
                    </a>
                </li>
                <!-- Roles -->
                <li class="nav-item <?= giveClass('/admin/roles', 'menu-open') ?>">
                    <a href="#" class="nav-link <?= giveClass('/admin/roles', 'active') ?>">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Roles
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/roles" class="nav-link <?= giveClass('/admin/roles', 'active') ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Roles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/roles/create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Role</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Categories -->
                <li class="nav-item">
                    <a href="/admin/categories" class="nav-link <?= giveClass('/admin/categories', 'active') ?>">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p> Categories </p>
                    </a>
                </li>
                <!-- Logout -->
                <li class="nav-item btn-sm fixed-bottom">
                    <form action="/logout" method="post">
                        <button class="nav-link bg-gradient-dark btn-sm text-white-50">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
