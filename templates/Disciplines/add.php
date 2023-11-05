<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Discipline $discipline
 * @var \Cake\Collection\CollectionInterface|string[] $courses
 * @var \Cake\Collection\CollectionInterface|string[] $rooms
 */
?>
<div class="container align-content-center">
    <legend><?= __('Disciplina') ?></legend>
    <div class="card card-success col col-md-10 text-justify">
        <div class="card-header">
            <div class="side-nav">
                <h4 class="heading"><?= __('Adicionar') ?></h4>
            </div>
        </div>
        <div class="card-body">
            <?= $this->Form->create($discipline) ?>
            <div class="form-group">

                <?= $this->Form->control('name', [
                    'class' => 'form-control col col-md-6']) ?>

                <?= $this->Form->control('course_id', [
                    'type' => 'select',
                    'options' => $courses,
                    'empty' => true,
                    'class' => 'form-select col col-md-3']) ?>

                <?= $this->Form->control('teacher_id', [
                    'class' => 'form-select col col-md-3',
                    'type' => 'select',
                    'options' => $teachers,
                    'empty' => true]) ?>


                <?= $this->Form->control('workload', [
                    'label' => 'Carga Horaria',
                    'class' => 'form-select col col-md-1',
                    'type' => 'select',
                    'options' => [
                        '40',
                        '60',
                        '80',
                        '100'],
                ]) ?>
                <?= $this->Form->control('room_id', [
                    'class' => 'form-select col col-md-3',
                    'options' => $rooms,
                    'empty' => true]) ?>
            </div>

            <div class="card-footer">
                <?= $this->Form->button(__('Salvar'), [
                    'class' => 'btn btn-success']) ?>

                <?= $this->Html->link(__('Voltar'), [
                    'action' => 'index'], [
                    'class' => 'btn btn-danger side-nav-item float-right']) ?>

            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
