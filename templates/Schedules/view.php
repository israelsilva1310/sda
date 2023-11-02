<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schedule $schedule
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Schedule'), ['action' => 'edit', $schedule->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Schedule'), ['action' => 'delete', $schedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schedule->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Schedules'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Schedule'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="schedules view content">
            <h3><?= h($schedule->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Course') ?></th>
                    <td><?= $schedule->has('course') ? $this->Html->link($schedule->course->name, ['controller' => 'Courses', 'action' => 'view', $schedule->course->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Teacher') ?></th>
                    <td><?= $schedule->has('teacher') ? $this->Html->link($schedule->teacher->first_name, ['controller' => 'Teachers', 'action' => 'view', $schedule->teacher->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Discipline') ?></th>
                    <td><?= $schedule->has('discipline') ? $this->Html->link($schedule->discipline->name, ['controller' => 'Disciplines', 'action' => 'view', $schedule->discipline->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Day') ?></th>
                    <td><?= h($schedule->day) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hour') ?></th>
                    <td><?= h($schedule->hour) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($schedule->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Period') ?></th>
                    <td><?= $schedule->period === null ? '' : $this->Number->format($schedule->period) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($schedule->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($schedule->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
