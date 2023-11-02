<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disponibility $disponibility
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Disponibility'), ['action' => 'edit', $disponibility->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Disponibility'), ['action' => 'delete', $disponibility->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disponibility->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Disponibilities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Disponibility'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="disponibilities view content">
            <h3><?= h($disponibility->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Teacher') ?></th>
                    <td><?= $disponibility->has('teacher') ? $this->Html->link($disponibility->teacher->name, ['controller' => 'Teachers', 'action' => 'view', $disponibility->teacher->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Hour') ?></th>
                    <td><?= $disponibility->has('hour') ? $this->Html->link($disponibility->hour->id, ['controller' => 'Hours', 'action' => 'view', $disponibility->hour->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($disponibility->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($disponibility->updated_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($disponibility->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $disponibility->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
