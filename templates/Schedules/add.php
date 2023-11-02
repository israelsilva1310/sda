<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schedule $schedule
 * @var \Cake\Collection\CollectionInterface|string[] $courses
 * @var \Cake\Collection\CollectionInterface|string[] $teachers
 * @var \Cake\Collection\CollectionInterface|string[] $disciplines
 * @var \Cake\Collection\CollectionInterface|string[] $periods
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Voltar'), [
                'action' => 'index'], [
                'class' => 'btn btn-danger btn-sm side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80 form-control">
        <div class="container">
            <?= $this->Form->create($schedule) ?>
            <div class="form-control">
                <fieldset>
                    <legend><?= __('Add Schedule') ?></legend>
                    <div class="row">

                    </div>
                    <?= $this->Form->control('course_id', ['options' => $courses, 'empty' => true]) ?>
                    <?= $this->Form->control('period') ?>
                    <?= $this->Form->control('teacher_id', ['options' => $teachers, 'empty' => true]) ?>
                    <?= $this->Form->control('discipline_id', ['options' => $disciplines, 'empty' => true]) ?>
                    <?= $this->Form->control('day', ['options' => $weekGrid['day'], 'empty' => true]) ?>
                    <?= $this->Form->control('hour', ['options' => $weekGrid['hour'], 'empty' => true]) ?>
            </div>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
