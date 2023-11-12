<?php
$cakeDescription = 'TCC: SDA';
?>
<html lang="pt-br">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->Html->meta('icon') ?>
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <?= $this->Html->css([
        'adminlte.min',
        'estilo',
        'bootstrap.min',
        'fontawesome.min',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css',
        'contraste',
        'dashboard'
    ]) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="container-fluid">

<?= $this->element('nav-navbar') ?>
<section class="content card card-body">
    <div class="d-flex">
        <div class="content p-1">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </div>
</section>

<?= $this->element('footer') ?>
<?= $this->Html->script([
    'pesquisa',
    'adminlte.min',
    'estilo',
    'dashboard',
    'jquery-3.7.0.min',
    'bootstrap.bundle.min',
    'bootstrap.min',
    'popper.min',
]) ?>
</body>
</html>
