<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<div class="card card-primary">
    <div class="card-header">
        <h3><?= __('Users') ?></h3>
        <?= $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class' => 'btn btn-success float-right']) ?>

    </div>
    <div class="card-body">
        <table class="table-bordered table table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id', ['label' => 'ID']) ?></th>
                <th><?= $this->Paginator->sort('first_name', ['label' => 'Nome']) ?></th>
                <th><?= $this->Paginator->sort('last_name', ['label' => 'Sobrenome']) ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('level') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->first_name) ?></td>
                    <td><?= h($user->last_name) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->status) ?></td>
                    <td><?= $user->level === null ? '' : $this->Number->format($user->level) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), [
                            'action' => 'view', $user->id], [
                            'class' => 'btn btn-sm btn-primary']) ?>
                        <?= $this->Html->link(__('Edit'), [
                            'action' => 'edit', $user->id], [
                            'class' => 'btn btn-sm btn-success']) ?>
                        <?= $this->Form->postLink(__('Delete'), [
                            'action' => 'delete', $user->id], [
                            'confirm' => __('Are you sure you want to delete # {0}?', $user->id),
                            'class' => 'btn btn-sm btn-danger']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <div class="paginator">
            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                <ul class="pagination">
                    <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                        <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0"
                           class="page-link">Previous</a>
                    </li>
                    <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1"
                                                                    tabindex="0" class="page-link">1</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2"
                                                              tabindex="0" class="page-link">2</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3"
                                                              tabindex="0" class="page-link">3</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4"
                                                              tabindex="0" class="page-link">4</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5"
                                                              tabindex="0" class="page-link">5</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6"
                                                              tabindex="0" class="page-link">6</a></li>
                    <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable"
                                                                                      data-dt-idx="7" tabindex="0"
                                                                                      class="page-link">Next</a>
                    </li>
                </ul>
            </div>
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

</div>
