<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Hour> $hours
 */
?>
<hr>
<div class="card">
    <div class="card-header">
        <h3><?= __('Cadastro de Horas') ?></h3>
    </div>
    <div class="card-footer">
        <?= $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class' => 'btn btn-success float-left']) ?>
    </div>

</div>
<div class="card">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="card-header">
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('active', ['label' => 'Status']) ?></th>
                <th><?= $this->Paginator->sort('description') ?></th>
                <th><?= $this->Paginator->sort('period') ?></th>
                <th><?= $this->Paginator->sort('hour_initial') ?></th>
                <th><?= $this->Paginator->sort('hour_final') ?></th>
                <th><?= $this->Paginator->sort('week') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody class="card-body">
            <?php foreach ($hours as $hour) : ?>
                <tr>
                    <td><?= $this->Number->format($hour->id) ?></td>
                    <td><?php if (h($hour->active) == true) { ?>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" checked=""
                                       disabled>
                                <label for="<?= h($hour->week) ?>" class="custom-control-label"></label>
                            </div>
                        <?php } else { ?>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" disabled>
                                <label for="customCheckbox2" class="custom-control-label"></label>
                            </div>
                        <?php } ?>
                    </td>
                    <td><?= h($hour->description) ?></td>
                    <td><?= h($hour->period) ?></td>
                    <td><?= h($hour->hour_initial) ?></td>
                    <td><?= h($hour->hour_final) ?></td>
                    <td><?= h($hour->week) ?></td>

                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), [
                            'action' => 'view', $hour->id,
                        ], [
                            'class' => 'btn btn-sm btn-primary',
                        ]) ?>
                        <?= $this->Html->link(__('Editar'), [
                            'action' => 'edit', $hour->id,
                        ], [
                            'class' => 'btn btn-sm btn-success',
                        ]) ?>
                        <?= $this->Form->postLink(__('Deletar'), [
                            'action' => 'delete', $hour->id
                        ], [
                            'confirm' => __('Are you sure you want to delete # {0}?', $hour->id),
                            'class' => 'btn btn-sm btn-danger'
                        ]) ?>
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
