<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Period> $periods
 */
?>
<div class="card index content">
    <div class="card-header">
        <h3><?= __('Períodos') ?></h3>
    </div>
    <div class="card-footer">
        <?= $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class' => 'btn btn-sm btn-success float-right']) ?>

    </div>
    <div class="card table-responsive">
        <table class="table table-striped table-striped table-bordered">
            <thead class="card-header">
            <tr>

                <th><?= $this->Paginator->sort('period') ?></th>
                <th><?= $this->Paginator->sort('bimester') ?></th>
                <th><?= $this->Paginator->sort('semester') ?></th>
                <th><?= $this->Paginator->sort('year') ?></th>

                <th class="actions"><?= __('Ações') ?></th>
            </tr>
            </thead>
            <tbody class="card-body">
            <?php foreach ($periods as $period): ?>
                <tr>
                    <td><?= $period->period === null ? '' : $this->Number->format($period->period) ?></td>
                    <td><?= $period->bimester === null ? '' : $this->Number->format($period->bimester) ?></td>
                    <td><?= $period->semester === null ? '' : $this->Number->format($period->semester) ?></td>
                    <td><?= h($period->year) ?></td>

                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $period->id], ['class' => 'btn btn-sm btn-primary']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $period->id], ['class' => 'btn btn-sm btn-success']) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $period->id], ['confirm' => __('Are you sure you want to delete # {0}?', $period->id), 'class' => 'btn btn-sm btn-danger']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator card-footer">
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
