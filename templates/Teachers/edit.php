<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teacher $teacher
 * @var string[]|\Cake\Collection\CollectionInterface $disciplines
 */
?>
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <legend><?= __('Editar Professor') ?></legend>
            <?= $this->Form->create($teacher) ?>
        </div>
        <div class="card-body">
            <?= $this->Form->control('first_name') ?>
            <?= $this->Form->control('last_name') ?>
            <?= $this->Form->control('acronym') ?>
            <?= $this->Form->control('user_id') ?>
            <?= $this->Form->control('discipline_id', ['options' => $disciplines, 'empty' => true]) ?>
            <?= $this->Form->control('email') ?>
            <?= $this->Form->control('title') ?>
            <?= $this->Form->control('phone') ?>
            <?= $this->Form->control('active') ?>
        </div>
        <div class="card-footer">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-success btn-sm']) ?>
            <?= $this->Html->link(__('Cancelar'), [
                'action' => 'index'], [
                'class' => ' btn btn-danger btn-sm side-nav-item']) ?>
            <?= $this->Form->postLink(
                __('Excluir'),
                [
                    'action' => 'delete', $teacher->id],
                [
                    'confirm' => __('Deseja realmente excluir o registro # {0}?', $teacher->id),
                    'class' => 'btn btn-dark btn-sm side-nav-item float-right']
            ) ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
