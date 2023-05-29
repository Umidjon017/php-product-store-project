<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= baseUri('admin'); ?>" class="brand-link">
        <img src="<?= baseUri('dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PHP Store Task</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= baseUri('dist/img/user2-160x160.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?= baseUri('pages/examples/profile.html'); ?>" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= baseUri('admin'); ?>" class="nav-link <?= giveClass('/admin', 'active') ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= baseUri('admin/users'); ?>" class="nav-link <?= giveClass('/admin/users', 'active') ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Users </p>
                    </a>
                </li>
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
                            <a href="<?= baseUri('admin/roles') ?>" class="nav-link <?= giveClass('/admin/roles', 'active') ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Roles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= baseUri('admin/roles/create') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Role</p>
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
