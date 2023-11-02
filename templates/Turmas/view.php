<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turma $turma
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Turma'), ['action' => 'edit', $turma->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Turma'), ['action' => 'delete', $turma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $turma->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Turmas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Turma'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="turmas view content">
            <h3><?= h($turma->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Course') ?></th>
                    <td><?= $turma->has('course') ? $this->Html->link($turma->course->id, ['controller' => 'Courses', 'action' => 'view', $turma->course->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Sector') ?></th>
                    <td><?= $turma->has('sector') ? $this->Html->link($turma->sector->name, ['controller' => 'Sectors', 'action' => 'view', $turma->sector->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Period') ?></th>
                    <td><?= $turma->has('period') ? $this->Html->link($turma->period->id, ['controller' => 'Periods', 'action' => 'view', $turma->period->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($turma->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Acronym') ?></th>
                    <td><?= h($turma->acronym) ?></td>
                </tr>
                <tr>
                    <th><?= __('Collor') ?></th>
                    <td><?= h($turma->collor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($turma->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Teacher Id') ?></th>
                    <td><?= $this->Number->format($turma->teacher_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Carga Horaria') ?></th>
                    <td><?= $turma->carga_horaria === null ? '' : $this->Number->format($turma->carga_horaria) ?></td>
                </tr>
                <tr>
                    <th><?= __('Period') ?></th>
                    <td><?= $this->Number->format($turma->period) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Inicio') ?></th>
                    <td><?= h($turma->data_inicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Final') ?></th>
                    <td><?= h($turma->data_final) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($turma->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($turma->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
