<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Period $period
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $period->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $period->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Periods'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="periods form content">
            <?= $this->Form->create($period) ?>
            <fieldset>
                <legend><?= __('Edit Period') ?></legend>
                <?php
                    echo $this->Form->control('period');
                    echo $this->Form->control('bimester');
                    echo $this->Form->control('semester');
                    echo $this->Form->control('year');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
