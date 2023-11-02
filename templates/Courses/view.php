<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Course'), ['action' => 'edit', $course->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Course'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Courses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Course'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="courses view content">
            <h3><?= h($course->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Teacher Coordinator') ?></th>
                    <td><?= h($course->teacher_coordinator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Acronym') ?></th>
                    <td><?= h($course->acronym) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($course->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Requisito') ?></th>
                    <td><?= h($course->requisito) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($course->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Carga Horaria') ?></th>
                    <td><?= $course->carga_horaria === null ? '' : $this->Number->format($course->carga_horaria) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
