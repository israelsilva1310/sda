<?php
$cakeDescription = 'Login: SDA';
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
<body class="container align-content-center">
<?= $this->fetch('content') ?>

<?= $this->element('footer') ?>
<?= $this->Html->script([
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
