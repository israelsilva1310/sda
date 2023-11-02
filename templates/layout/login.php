<?php
$cakeDescription = 'Login: SDA Sistema de Distribuição de Aulas';
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
    <?= $this->Html->css(['style',]) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body
<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>
<?= $this->element('footer-sda') ?>
</body>
</html>
