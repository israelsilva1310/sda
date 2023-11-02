<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Sector> $sectors
 */
?>
<div class="sectors index content">
    <h3><?= __('Setores') ?></h3>
    <?= $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class' => 'btn btn-success float-right']) ?>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('active') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($sectors as $sector) : ?>
                <tr>
                    <td><?= $this->Number->format($sector->id) ?></td>
                    <td><?= h($sector->active) ?></td>
                    <td><?= h($sector->name) ?></td>
                    <td><?= h($sector->created) ?></td>
                    <td><?= h($sector->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $sector->id], ['class' => 'btn btn-sm btn-primary']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $sector->id], ['class' => 'btn btn-sm btn-warning']) ?>
                        <?= $this->Form->postLink(__('Deletar'), [
                            'action' => 'delete', $sector->id,
                        ], [
                            'class' => 'btn btn-sm btn-dark',
                            'confirm' => __(
                                'Are you sure you want to delete # {0}?',
                                $sector->id
                            ),
                        ]) ?>
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
