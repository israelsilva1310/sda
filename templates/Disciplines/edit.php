<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Discipline $discipline
 * @var string[]|\Cake\Collection\CollectionInterface $courses
 * @var string[]|\Cake\Collection\CollectionInterface $rooms
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $discipline->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $discipline->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Disciplines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="disciplines form content">
            <?= $this->Form->create($discipline) ?>
            <fieldset>
                <legend><?= __('Edit Discipline') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('teacher_id');
                    echo $this->Form->control('course_id', ['options' => $courses, 'empty' => true]);
                    echo $this->Form->control('workload');
                    echo $this->Form->control('room_id', ['options' => $rooms, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
