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
            <h4 class="heading"><?= __('Adicionar') ?></h4>
        </div>
    </aside>

    <?= $this->Form->create($schedule) ?>
    <fieldset>

        <legend><?= __('Horario') ?></legend>


        <?= $this->Form->control('course_id', [
            'label' => 'Curso',
            'class' => 'form-select col-md-4',
            'options' => $courses,
            'empty' => true,
        ]) ?>
        <?= $this->Form->control('period', [
            'label' => 'Periodo',
            'class' => 'col-md-2 form-select',
            'options' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
        ]) ?>
        <?= $this->Form->control('teacher_id', [
            'label' => 'Professor',
            'class' => 'form-select col-md-2',
            'options' => $teachers,
            'empty' => true,
        ]) ?>
        <?= $this->Form->control('discipline_id', [
            'options' => $disciplines,
            'class' => 'form-select col-4',
            'empty' => true,
        ]) ?>
        <?= $this->Form->control('day', [
            'options' => ['segunda', 'terca', 'quarta', 'quinta', 'sexta'],
            'class' => 'form-select col-2',
            'empty' => true,
        ]) ?>
        <?= $this->Form->control('hour', [
            'options' => $horaaulas,
            'label' => 'Horario',
            'class' => 'form-select col-1',
            'empty' => true,
        ]) ?>
</div>
</fieldset>
<?= $this->Form->button(__('Salvar'), [
    'class' => 'btn btn-success btn-sm',
]) ?>

<?= $this->Html->link(__('Voltar'), [
    'action' => 'index'], [
    'class' => 'btn btn-danger btn-sm side-nav-item']) ?>
<?= $this->Form->end() ?>
</div>
</div>
</div>
