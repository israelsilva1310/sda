<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Restricao> $restricaos
 */
?>
<div class="restricaos index content">
    <?= $this->Html->link(__('New Restricao'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Restricaos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('teacher_id') ?></th>
                    <th><?= $this->Paginator->sort('dia_semana') ?></th>
                    <th><?= $this->Paginator->sort('hora') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($restricaos as $restricao): ?>
                <tr>
                    <td><?= $this->Number->format($restricao->id) ?></td>
                    <td><?= h($restricao->tipo) ?></td>
                    <td><?= $restricao->has('teacher') ? $this->Html->link($restricao->teacher->first_name, ['controller' => 'Teachers', 'action' => 'view', $restricao->teacher->id]) : '' ?></td>
                    <td><?= h($restricao->dia_semana) ?></td>
                    <td><?= h($restricao->hora) ?></td>
                    <td><?= h($restricao->active) ?></td>
                    <td><?= h($restricao->created) ?></td>
                    <td><?= h($restricao->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $restricao->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $restricao->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $restricao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $restricao->id)]) ?>
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
