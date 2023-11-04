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
        </div>
    </aside>

    <?= $this->Form->create($schedule) ?>
    <fieldset>

        <legend><?= __('Add Schedule') ?></legend>


        <?= $this->Form->control('course_id', ['options' => $courses, 'empty' => true]) ?>
        <?= $this->Form->control('period') ?>
        <?= $this->Form->control('teacher_id', ['options' => $teachers, 'empty' => true]) ?>
        <?= $this->Form->control('discipline_id', ['options' => $disciplines, 'empty' => true]) ?>
        <?= $this->Form->control('day', ['options' => $weekGrid['dia'], 'empty' => true]) ?>
        <?= $this->Form->control('hour', ['options' => $weekGrid['hora'], 'empty' => true]) ?>
</div>
</fieldset>
<?= $this->Form->button(__('Salvar', ['class' => 'btn btn-danger btn-sm'])) ?>

<?= $this->Html->link(__('Voltar'), [
    'action' => 'index'], [
    'class' => 'btn btn-danger btn-sm side-nav-item']) ?>
<?= $this->Form->end() ?>
</div>
</div>
</div>
