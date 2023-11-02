<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Schedule> $schedules
 */
?>
<div class="container">
    <?= $this->Html->link(__('Adcicionar'), ['action' => 'add'], ['class' => 'btn btn-success btn-sm float-right']) ?>
    <h3><?= __('Grade de Horarios') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-sm">
            <thead class="">
            <tr class="">
                <th><?= $this->Paginator->sort('course_id', ['label' => 'CURSO']) ?></th>
                <th><?= $this->Paginator->sort('period', ['label' => 'PERIODO']) ?></th>
                <th><?= $this->Paginator->sort('teacher_id', ['label' => 'PROFESSOR']) ?></th>
                <th><?= $this->Paginator->sort('discipline_id', ['label' => 'DISCIPLINA']) ?></th>
                <th><?= $this->Paginator->sort('day', ['label' => 'DIA']) ?></th>
                <th><?= $this->Paginator->sort('hour', ['label' => 'HORA']) ?></th>
                <th class="actions"><?= __('AÇÕES') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($schedules as $schedule): ?>
                <tr>

                    <td><?= $schedule->has('course') ? $this->Html->link($schedule->course->name, ['controller' => 'Courses', 'action' => 'view', $schedule->course->id]) : '' ?></td>
                    <td><?= $schedule->period === null ? '' : $this->Number->format($schedule->period) ?></td>
                    <td><?= $schedule->has('teacher') ? $this->Html->link($schedule->teacher->first_name, ['controller' => 'Teachers', 'action' => 'view', $schedule->teacher->id]) : '' ?></td>
                    <td><?= $schedule->has('discipline') ? $this->Html->link($schedule->discipline->name, ['controller' => 'Disciplines', 'action' => 'view', $schedule->discipline->id]) : '' ?></td>
                    <td><?= h($schedule->day) ?></td>
                    <td><?= h($schedule->hour) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $schedule->id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $schedule->id], ['class' => 'btn btn-success btn-sm']) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $schedule->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete # {0}?', $schedule->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->element('timesheet') ?>
</div>
