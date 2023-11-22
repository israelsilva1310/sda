<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Discipline> $disciplines
 */
?>
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3><?= __('Disciplinas') ?></h3>
            <?= $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class' => 'btn btn-loat btn-right btn-success']) ?>
        </div>
        <div class="card-footer">
            <table class="table table-bordered table-responsive table-hover table-striped">
                <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id', ['label' => 'ID']) ?></th>
                    <th><?= $this->Paginator->sort('name', ['label' => 'NOME']) ?></th>
                    <th><?= $this->Paginator->sort('teacher_id', ['label' => 'PROFESSOR']) ?></th>
                    <th><?= $this->Paginator->sort('course_id', ['label' => 'CURSO']) ?></th>
                    <th><?= $this->Paginator->sort('workload', ['label' => 'CARGA HORARIA']) ?></th>

                    <th><?= $this->Paginator->sort('room_id', ['label' => 'SALA']) ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($disciplines as $discipline): ?>
                    <tr>
                        <td><?= $this->Number->format($discipline->id) ?></td>
                        <td><?= h($discipline->name) ?></td>
                        <td><?= $discipline->teacher_id === null ? '' : $this->Number->format($discipline->teacher_id) ?></td>
                        <td><?= $discipline->has('course') ? $this->Html->link($discipline->course->name, ['controller' => 'Courses', 'action' => 'view', $discipline->course->id]) : '' ?></td>
                        <td><?= $discipline->workload === null ? '' : $this->Number->format($discipline->workload) ?></td>
                        <td><?= $discipline->has('room') ? $this->Html->link($discipline->room->name, ['controller' => 'Rooms', 'action' => 'view', $discipline->room->id]) : '' ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $discipline->id], ['class' => 'btn btn-sm btn-primary']) ?>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $discipline->id], ['class' => 'btn btn-sm btn-success']) ?>
                            <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $discipline->id], ['class' => 'btn btn-sm btn-danger', 'confirm' => __('Deseja mesmo excluir o registro {0}?', $discipline->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        </div>
        <div class="card-footer">
            <div class="paginator">
                <ul class="pagination">

                    <?= $this->Paginator->first('<< ' . __('primeiro'), ['class' => 'btn btn-sm']) ?>
                    <?= $this->Paginator->prev('< ' . __('anterior')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('proximos') . ' >') ?>
                    <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
                </ul>
                <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
            </div>
        </div>

    </div>

