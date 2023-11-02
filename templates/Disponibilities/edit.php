<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disponibility $disponibility
 * @var string[]|\Cake\Collection\CollectionInterface $teachers
 * @var string[]|\Cake\Collection\CollectionInterface $hours
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $disponibility->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $disponibility->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Disponibilities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="disponibilities form content">
            <?= $this->Form->create($disponibility) ?>
            <fieldset>
                <legend><?= __('Edit Disponibility') ?></legend>
                <?php
                    echo $this->Form->control('teacher_id', ['options' => $teachers]);
                    echo $this->Form->control('active');
                    echo $this->Form->control('hour_id', ['options' => $hours]);
                    echo $this->Form->control('updated_at');
                    echo $this->Form->control('created_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
