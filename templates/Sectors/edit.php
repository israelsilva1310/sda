<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sector $sector
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sector->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sector->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sectors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sectors form content">
            <?= $this->Form->create($sector) ?>
            <fieldset>
                <legend><?= __('Edit Sector') ?></legend>
                <?php
                    echo $this->Form->control('active');
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
