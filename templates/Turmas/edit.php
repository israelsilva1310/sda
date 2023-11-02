<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turma $turma
 * @var string[]|\Cake\Collection\CollectionInterface $instructors
 * @var string[]|\Cake\Collection\CollectionInterface $courses
 * @var string[]|\Cake\Collection\CollectionInterface $sectors
 * @var string[]|\Cake\Collection\CollectionInterface $periods
 */
?>
<div class="card container-fluid">
    <div class="card-header">
        <h4 class="heading"><?= __('Editar') ?></h4>
    </div>
    <?= $this->Form->create($turma) ?>
    <div class="card-body">
        <?= $this->Form->create($turma) ?>
        <?= $this->Form->control('name', ['class' => 'form-control']) ?>
        <?= $this->Form->control('acronym', ['class' => 'form-control']) ?>
        <?= $this->Form->control('teacher_id', ['options' => $teachers, 'class' => 'form-control']) ?>
        <?= $this->Form->control('cursos_id', ['options' => $courses, 'class' => 'form-control']) ?>
        <?= $this->Form->control('sector_id', [
            'options' => $sectors, 'empty' => true, 'class' => 'form-control']) ?>
        <?= $this->Form->control('period_id', [
            'options' => $periods, 'empty' => true, 'class' => 'form-control']) ?>
        <?= $this->Form->control('data_inicio', ['empty' => true, 'class' => 'form-control col']) ?>
        <?= $this->Form->control('data_final', ['empty' => true, 'class' => 'form-control col']) ?>
        <?= $this->Form->control('carga_horaria', ['class' => 'form-control']) ?>
        <?= $this->Form->control('collor', ['class' => 'form-control']) ?>
        <!--            // echo $this->Form->control('period');-->
    </div>
    <div class="card-footer">
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'btn btn-sm btn-danger']) ?>

    </div>
    <?= $this->Form->end() ?>
</div>

