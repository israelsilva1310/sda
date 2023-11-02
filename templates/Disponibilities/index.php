<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Disponibility> $disponibilities
 */
?>
<div class="disponibilities index content">
    <?= $this->Html->link(__('New Disponibility'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Disponibilities') ?></h3>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('teacher_id') ?></th>
                <th><?= $this->Paginator->sort('active') ?></th>
                <th><?= $this->Paginator->sort('hour_id') ?></th>
                <th><?= $this->Paginator->sort('updated_at') ?></th>
                <th><?= $this->Paginator->sort('created_at') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($disponibilities as $disponibility): ?>
                <tr>
                    <td><?= $this->Number->format($disponibility->id) ?></td>
                    <td><?= $disponibility->has('teacher') ? $this->Html->link($disponibility->teacher->name, ['controller' => 'Teachers', 'action' => 'view', $disponibility->teacher->id]) : '' ?></td>
                    <td><?= h($disponibility->active) ?></td>
                    <td><?= $disponibility->has('hour') ? $this->Html->link($disponibility->hour->id, ['controller' => 'Hours', 'action' => 'view', $disponibility->hour->id]) : '' ?></td>
                    <td><?= h($disponibility->updated_at) ?></td>
                    <td><?= h($disponibility->created_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $disponibility->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $disponibility->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $disponibility->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disponibility->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
