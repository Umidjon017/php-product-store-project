<?php
$session = new \App\Tools\Session();
$user = $session->get('user_id');
$message = $session->get('success_message');
if (! isset($user)):
    ?>

    <h1>You have to <a href="/sign-up">register</a> or <a href="/sign-in">login</a> for entering to the admin panel</h1>

<?php
else:
    require_once baseViewRequire('includes/header'); ?>

    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <?php
                require_once baseViewRequire('includes/navbar');
                require_once baseViewRequire('includes/sidebar');
            ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <a class="btn btn-danger" href="/admin/categories">
                                    <i class="fas fa-angle-left"></i> &nbsp; Cancel
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="/admin"> Home </a></li>
                                    <li class="breadcrumb-item active"> Add Category </li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row justify-content-md-center">
                            <!-- left column -->
                            <div class="col-md-6">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Insert Category's credentials</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form action="/admin/categories/create" method="post">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input name="name" type="text" class="form-control" id="name" placeholder="Enter category name">
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button name="submit" type="submit" class="btn btn-primary">Create</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
        </div>
    <!-- ./wrapper -->

    <?php
        require_once baseViewRequire('includes/footer');
        require_once baseViewRequire('includes/dependencies-js');
    ?>
    </body>
</html>

<?php endif; ?>
