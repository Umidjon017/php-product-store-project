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
                            <a class="btn btn-success" href="/admin/categories/create">
                                <i class="fas fa-plus"></i> &nbsp; Add Category
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                                <li class="breadcrumb-item active">Categories List</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <?php
            if (isset($message)) {
                echo '<p class="alert alert-success">' . $message . '</p>';
                $session->remove('success_message');
            }
            ?>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-10 offset-1">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Categories List</h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category Name</th>
                                                <th>Created at</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $iter = 0; if (! empty($categories)): ?>
                                            <?php foreach ($categories as $category): ?>
                                                <tr>
                                                    <td> <?= ++$iter ?> </td>
                                                    <td> <?= $category['name'] ?> </td>
                                                    <td> <?= $category['created_at'] ?> </td>
                                                    <td class="d-flex justify-content-start">
                                                        <a href="/admin/categories/edit?id=<?=$category['id']?>" class="btn btn-warning mr-1">Edit</a>
                                                        <form action="/admin/categories/delete" method="post">
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                            <input type="hidden" name="category_id" value="<?=$category['id']?>">
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Category Name</th>
                                                <th>Created at</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
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

