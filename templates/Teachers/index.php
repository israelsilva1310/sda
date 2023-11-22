<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Teacher> $teachers
 */
?>
<div class="container card-primary">
    <div class="card-header">
        <h3><?= __('Professores') ?></h3>
        <div class="btn-group">
            <?= $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class' => 'btn btn-success float-left']) ?>

        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id', ['label' => 'ID']) ?></th>

                <th><?= $this->Paginator->sort('first_name', ['label' => 'NOME']) ?></th>
                <th><?= $this->Paginator->sort('last_name', ['label' => 'SOBRENOME']) ?></th>
                <th><?= $this->Paginator->sort('acronym', ['label' => 'ACRÔNIMO']) ?></th>


                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
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


                    <td><?= h($teacher->email) ?></td>
                    <td><?= h($teacher->title) ?></td>

                    <td class="actions">
                        <?= $this->Html->link(__('View'), [
                            'action' => 'view', $teacher->id,], [
                            'class' => 'btn btn-success btn-sm'
                        ]) ?>

                        <?= $this->Html->link(__('Edit'), [
                            'action' => 'edit', $teacher->id], [
                            'class' => 'btn btn-primary btn-sm'
                        ]) ?>

                        <?= $this->Form->postLink(__('Delete'), [
                            'action' => 'delete', $teacher->id], [
                            'class' => 'btn btn-danger btn-sm',
                            'confirm' => __('Are you sure you want to delete # {0}?', $teacher->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">

            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Pagina {{page}} de {{pages}}, exibindo {{current}} registro(s) de {{count}} total')) ?></p>
        </div>
    </div>


</div>
