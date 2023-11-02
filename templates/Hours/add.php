<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hour $hour
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Hours'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="hours form content">
            <?= $this->Form->create($hour) ?>
            <fieldset>
                <legend><?= __('Add Hour') ?></legend>
                <?php
                    echo $this->Form->control('description');
                    echo $this->Form->control('period');
                    echo $this->Form->control('hour_initial', ['empty' => true]);
                    echo $this->Form->control('hour_final', ['empty' => true]);
                    echo $this->Form->control('week');
                    echo $this->Form->control('active');
                    echo $this->Form->control('created_at', ['empty' => true]);
                    echo $this->Form->control('updated_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
