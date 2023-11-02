<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Teacher> $teachers
 */
?>
<div class="teachers index content">
    <?= $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class' => 'btn btn-success float-right']) ?>
    <?= $this->Html->link(__('Imprimir'), ['action' => 'print'], ['class' => 'btn btn-dark float-left']) ?>
    <h3><?= __('Professores') ?></h3>
    <div class="table-responsive table-striped table-hover">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id', ['label' => 'ID']) ?></th>

                <th><?= $this->Paginator->sort('first_name', ['label' => 'NOME']) ?></th>
                <th><?= $this->Paginator->sort('last_name', ['label' => 'SOBRENOME']) ?></th>
                <th><?= $this->Paginator->sort('acronym', ['label' => 'ACRÔNIMO']) ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('discipline_id') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('phone') ?></th>
                <th><?= $this->Paginator->sort('active') ?></th>
                <th><?= $this->Paginator->sort('created_at') ?></th>
                <th><?= $this->Paginator->sort('updated_at') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($teachers as $teacher): ?>
                <tr>
                    <td><?= $this->Number->format($teacher->id) ?></td>

                    <td><?= h($teacher->first_name) ?></td>
                    <td><?= h($teacher->last_name) ?></td>
                    <td><?= h($teacher->acronym) ?></td>
                    <td><?= $teacher->user_id === null ? '' : $this->Number->format($teacher->user_id) ?></td>
                    <td><?= $teacher->has('discipline') ? $this->Html->link($teacher->discipline->name, ['controller' => 'Disciplines', 'action' => 'view', $teacher->discipline->id]) : '' ?></td>
                    <td><?= h($teacher->email) ?></td>
                    <td><?= h($teacher->title) ?></td>
                    <td><?= h($teacher->phone) ?></td>
                    <td><?= h($teacher->active) ?></td>
                    <td><?= h($teacher->created_at) ?></td>
                    <td><?= h($teacher->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $teacher->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teacher->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teacher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teacher->id)]) ?>
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
