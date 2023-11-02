<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Turma> $turmas
 */
?>
<div class="turmas index content">
    <?= $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class' => 'btn btn-sm btn-success float-right']) ?>
    <h3><?= __('Turmas') ?></h3>
    <div class="table-responsive">
        <table class="table table-bordered table-hover  table-striped">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('teacher_id') ?></th>
                <th><?= $this->Paginator->sort('cursos_id') ?></th>
                <th><?= $this->Paginator->sort('sector_id') ?></th>
                <th><?= $this->Paginator->sort('period_id') ?></th>
                <th><?= $this->Paginator->sort('data_inicio') ?></th>
                <th><?= $this->Paginator->sort('data_final') ?></th>
                <th><?= $this->Paginator->sort('carga_horaria') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('acronym') ?></th>
                <th><?= $this->Paginator->sort('collor') ?></th>
                <th><?= $this->Paginator->sort('period') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($turmas as $turma) : ?>
                <tr>
                    <td><?= $this->Number->format($turma->teacher_id) ?></td>
                    <td><?= $turma->has('course') ? $this->Html->link($turma->course->id, [
                            'controller' => 'Courses', 'action' => 'view', $turma->course->id]) : '' ?></td>
                    <td><?= $turma->has('sector') ? $this->Html->link($turma->sector->name, [
                            'controller' => 'Sectors', 'action' => 'view', $turma->sector->id]) : '' ?></td>
                    <td><?= $turma->has('period') ?></td>
                    <!--                    <td>-->
                    <?php //= $turma->has('period') ? $this->Html->link($turma->period->bimester, ['controller' => 'Periods', 'action' => 'view', $turma->period->id]) : '' ?><!--</td>-->
                    <td><?= h($turma->data_inicio) ?></td>
                    <td><?= h($turma->data_final) ?></td>
                    <td><?= $turma->carga_horaria === null ? '' : $this->Number->format($turma->carga_horaria) ?></td>
                    <td><?= h($turma->name) ?></td>
                    <td><?= h($turma->acronym) ?></td>
                    <td><?= h($turma->collor) ?></td>
                    <td><?= $this->Number->format($turma->period) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), [
                            'action' => 'view', $turma->id], [
                            'class' => 'btn btn-sm btn-primary',
                        ]) ?>
                        <?= $this->Html->link(__('Editar'), [
                            'action' => 'edit', $turma->id], [
                            'class' => 'btn btn-sm btn-success',
                        ]) ?>
                        <?= $this->Form->postLink(__('Deletar'), [
                            'action' => 'delete', $turma->id], [
                            'confirm' => __('Are you sure you want to delete # {0}?', $turma->id),
                            'class' => 'btn btn-sm btn-danger',
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
