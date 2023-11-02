<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shift $shift
 */
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

</div>
<div class="row">
    <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'btn btn-warning']) ?>
</div>

<div class="row">
    <div>
        <?= $this->Form->create($shift) ?>
        <?= $this->Form->control('name') ?>
        <?= $this->Form->control('sunday') ?>
        <?= $this->Form->control('monday') ?>
        <?= $this->Form->control('tuesday') ?>
        <?= $this->Form->control('wednesday') ?>
        <?= $this->Form->control('thursday') ?>
        <?= $this->Form->control('friday') ?>
        <?= $this->Form->control('saturday') ?>
        <?= $this->Form->control('amount_lessions') ?>
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-success']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

