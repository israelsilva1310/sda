<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/
?>
<?php
$cakeDescription = 'Site: SDA';
?>
<!doctype html>
<html lang="pt-br" class="no-js">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->Html->meta('icon') ?>
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <?= $this->Html->css([
        'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i',
        'apnew/bootstrap.min',
        'https://kit.fontawesome.com/7c282a90c4.js',
        'apnew/font-awesome.min',
        'apnew/jquery.carousel-3d.default',
        'apnew/slick',
        'apnew/jquery-ui',
        'apnew/meanmenu.min',
        'apnew/animate',
        'apnew/material-design-iconic-font',
        'apnew/material-design-iconic-font.min',
        'apnew/style',
        'apnew/responsive',
    ]) ?>
    <?= $this->Html->script(['apnew/vendor/modernizr-2.8.3.min']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>

<?= $this->element('footer') ?>

<?= $this->Html->script([
    'apnew/vendor/jquery-1.12.3.min',
    'apnew/bootstrap.min',
    'apnew/wow.min',
    'apnew/jquery.meanmenu',
    'apnew/jquery.scrollUp.min',
    'apnew/slick.min',
    'apnew/jquery.nav',
]) ?>
<!-- 3D Carousel JS ============================================ -->
<?= $this->Html->script([
    'apnew/jquery.resize.ex',
    'apnew/waitforimages',
    'apnew/jquery.carousel-3d.min',
]) ?>
<!--plugins JS-->
<?= $this->Html->script([
    'apnew/plugins',
]) ?>

<!--Main JS-->
<?= $this->Html->script([
    'apnew/main',
]) ?>

</body>
</html>
