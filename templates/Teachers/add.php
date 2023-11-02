<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teacher $teacher
 * @var \Cake\Collection\CollectionInterface|string[] $disciplines
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Teachers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="teachers form content">
            <?= $this->Form->create($teacher) ?>
            <fieldset>
                <legend><?= __('Add Teacher') ?></legend>
                <?php
                    echo $this->Form->control('qrcode');
                    echo $this->Form->control('hash');
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('acronym');
                    echo $this->Form->control('user_id');
                    echo $this->Form->control('discipline_id', ['options' => $disciplines, 'empty' => true]);
                    echo $this->Form->control('email');
                    echo $this->Form->control('title');
                    echo $this->Form->control('phone');
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
