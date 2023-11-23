<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schedule $schedule
 * @var string[]|\Cake\Collection\CollectionInterface $courses
 * @var string[]|\Cake\Collection\CollectionInterface $teachers
 * @var string[]|\Cake\Collection\CollectionInterface $disciplines
 */
//pr($weekGrid);
?>
<div class="card-primary align-content-center">

    <div class="card-header">
        <h4 class="heading"><?= __('Editar') ?></h4>
    </div>
    <legend><?= __('Horario') ?></legend>

    <div class="card-body">
        <?= $this->Form->create($schedule) ?>
        <div>
            <?= $this->Form->control('course_id', [
                'options' => $courses,
                'empty' => true,
                'class' => 'form-select col-4']) ?>
            <?= $this->Form->control('period', [
                'options' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                'class' => 'form-select col-1',
            ]) ?>
            <?= $this->Form->control('teacher_id', [
                'options' => $teachers,
                'empty' => true,
                'class' => 'form-select col-3']) ?>
            <?= $this->Form->control('discipline_id', [
                'options' => $disciplines,
                'empty' => true,
                'class' => 'form-select col-3']) ?>

            <?= $this->Form->control('day', [
                'options' => $diasemanas,
                'empty' => true,
                'class' => 'form-select col-3',
                'label' => 'Dia']) ?>

            <?= $this->Form->control('hour', [
                'options' => $horaaulas,
                'empty' => true,
                'class' => 'form-select col-1',
                'label' => 'Horario']) ?>
            <div class="card-footer">
                <?= $this->Form->button(__('Salvar'), [
                    'class' => 'btn btn-success btn-sm',
                ]) ?>
                <?= $this->Html->link(__('Voltar'), [
                    'action' => 'index'], [
                    'class' => 'btn btn-warning btn-sm side-nav-item']) ?>

                <?= $this->Form->postLink(
                    __('Deletar'),
                    ['action' => 'delete', $schedule->id],
                    ['confirm' => __('Deseja mesmo excluir o registro # {0}?', $schedule->id),
                        'class' => 'btn btn-danger btn-sm side-nav-item float-right']
                ) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
