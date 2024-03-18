<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title><?= h($this->fetch('title')) ?></title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <?= $this->Html->css([
        'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css',
        'style',
        'adminlte.min',
        'bootstrap.min.css',
        '/vendor/fontawesome-free/css/all.min',
        '/vendor/summernote/summernote-bs4.min',
        '/vendor/daterangepicker/daterangepicker',
        '/vendor/icheck-bootstrap/icheck-bootstrap.min',
        '/vendor/overlayScrollbars/css/OverlayScrollbars.min',
        'ionicons.min.css',
        'jquery-ui.min.css',
        'tempusdominus-bootstrap-4.min',

    ]) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar Superior -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <?= $this->element('navbar-superior') ?>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <!-- Main Sidebar Menu lateral esquerdo da Dashboard -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!--Logo do sistema-->
        <?= $this->Html->image(
            'logo-ifsmg.jfif',
            [
                'class' => 'logo',
                'alt' => 'IFLogo',
                'height' => 'auto',
                'width' => '100%',
            ],
            [
                'class' => 'brand-text font-weight-light',
                'escape' => false,
            ]
        ) ?>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <?= $this->Html->image(
                        'avatar.png',
                        ['class' => 'img-circle elevation-2',
                            'alt' => 'User Image',]
                    ) ?>
                </div>
                <div class="info">
                    <a href="#" class="d-block">Administrador</a>
                </div>
            </div>

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
                    <?= $this->element('sidebar-menu') ?>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <?= $this->element('footer') ?>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>

<!--Preciso inserir um Minify para reduzir o codigo -->

<!-- Select2 JS -->
<?= $this->Html->script([

]) ?>
</body>
</html>
