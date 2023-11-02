<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schedule $schedule
 * @var string[]|\Cake\Collection\CollectionInterface $courses
 * @var string[]|\Cake\Collection\CollectionInterface $teachers
 * @var string[]|\Cake\Collection\CollectionInterface $disciplines
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $schedule->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $schedule->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Schedules'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="schedules form content">
            <?= $this->Form->create($schedule) ?>
            <fieldset>
                <legend><?= __('Edit Schedule') ?></legend>
                <?= $this->Form->control('course_id', ['options' => $courses, 'empty' => true]) ?>
                <?= $this->Form->control('period') ?>
                <?= $this->Form->control('teacher_id', ['options' => $teachers, 'empty' => true]) ?>
                <?= $this->Form->control('discipline_id', ['options' => $disciplines, 'empty' => true]) ?>
                <?= $this->Form->control('day', ['options' => $weekGrid['day'], 'empty' => true]) ?>
                <?= $this->Form->control('hour', ['options' => $weekGrid['hour'], 'empty' => true]) ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
