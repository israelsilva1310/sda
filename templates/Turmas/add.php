<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turma $turma
 * @var \Cake\Collection\CollectionInterface|string[] $instructors
 * @var \Cake\Collection\CollectionInterface|string[] $courses
 * @var \Cake\Collection\CollectionInterface|string[] $sectors
 * @var \Cake\Collection\CollectionInterface|string[] $periods
 */
?>
<div class="card card-primary">
    <div class="card-header">
        <h4 class="heading"><?= __('Adicionar Turmas') ?></h4>
        <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'btn btn-sm btn-danger float-right']) ?>
    </div>
    <div class="card card-body">
        <?= $this->Form->create($turma) ?>
        <div class="row">
            <div class="col">
                <?= $this->Form->control('name', [
                    'class' => 'form-control', 'label' => 'Nome']) ?>
            </div>
            <div class="col-2">
                <?= $this->Form->control('acronym', [
                    'class' => 'form-control',
                    'label' => 'Abreviação']) ?>
            </div>
            <div class="col">
                <?= $this->Form->control('teacher_id', [
                    'options' => $teachers,
                    'class' => 'form-control',
                    'label' => 'Professor']) ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?= $this->Form->control('cursos_id', [
                    'options' => $courses,
                    'class' => 'form-select',
                    'label' => 'Curso']) ?>
            </div>
            <div class="col">
                <?= $this->Form->control('sector_id', [
                    'list' => 'options',
                    'options' => $sectors,
                    'empty' => true,
                    'class' => 'form-select',
                    'label' => 'Setor de Atuação']) ?>
            </div>
            <div class="col">
                <?= $this->Form->control('period_id', [
                    'options' => ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
                    'empty' => true,
                    'class' => 'form-select']) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <?= $this->Form->control('data_inicio', [
                    'empty' => true,
                    'class' => 'form-control']) ?>
            </div>
            <div class="col-2">
                <?= $this->Form->control('data_final', [
                    'empty' => true,
                    'class' => 'form-control']) ?>
            </div>
        </div>
        <div class="row">
            <!--            <div class="col-1">-->
            <!--                --><?php //= $this->Form->control('carga_horaria', [
            //                    'class' => 'form-control',
            //                    'options' => [
            //                        '20', '40', '60', '80', '120', '160']]) ?>
            <!---->
            <!--            </div>-->
            <div class="col">
                <?= $this->Form->control('collor', [
                    'class' => 'form-control col-md-2',
                    'type' => 'color',
                    'label' => 'Cor']) ?>
            </div>
        </div>
    </div>
    <div class="card-footer btn-group">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-sm btn-success col-md-2']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
</div>
