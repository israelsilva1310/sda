<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Course> $courses
 */
?>
<div class="courses index content">
    <?= $this->Html->link(__('New Course'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Courses') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('teacher_coordinator') ?></th>
                    <th><?= $this->Paginator->sort('acronym') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('requisito') ?></th>
                    <th><?= $this->Paginator->sort('carga_horaria') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($courses as $course): ?>
                <tr>
                    <td><?= $this->Number->format($course->id) ?></td>
                    <td><?= h($course->teacher_coordinator) ?></td>
                    <td><?= h($course->acronym) ?></td>
                    <td><?= h($course->name) ?></td>
                    <td><?= h($course->requisito) ?></td>
                    <td><?= $course->carga_horaria === null ? '' : $this->Number->format($course->carga_horaria) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $course->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $course->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]) ?>
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
