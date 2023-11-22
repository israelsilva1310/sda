<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Restricao $restricao
 * @var string[]|\Cake\Collection\CollectionInterface $teachers
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $restricao->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $restricao->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Restricaos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="restricaos form content">
            <?= $this->Form->create($restricao) ?>
            <fieldset>
                <legend><?= __('Edit Restricao') ?></legend>
                <?php
                    echo $this->Form->control('tipo');
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('teacher_id', ['options' => $teachers, 'empty' => true]);
                    echo $this->Form->control('dia_semana');
                    echo $this->Form->control('hora', ['empty' => true]);
                    echo $this->Form->control('active');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
