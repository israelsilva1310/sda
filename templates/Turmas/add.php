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
<div class="card container-fluid">
    <div class="form-group">
        <div class="card-header">
            <h4 class="heading"><?= __('Adicionar Turmas') ?></h4>
        </div>
        <div class="card card-body">
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
        <div class="card-footer btn-group">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-sm btn-success']) ?>
            <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'btn btn-sm btn-danger']) ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>
