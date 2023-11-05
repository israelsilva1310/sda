<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Discipline $discipline
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Discipline'), ['action' => 'edit', $discipline->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Discipline'), ['action' => 'delete', $discipline->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discipline->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Disciplines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Discipline'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="disciplines view content">
            <h3><?= h($discipline->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($discipline->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Course') ?></th>
                    <td><?= $discipline->has('course') ? $this->Html->link($discipline->course->name, ['controller' => 'Courses', 'action' => 'view', $discipline->course->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Room') ?></th>
                    <td><?= $discipline->has('room') ? $this->Html->link($discipline->room->name, ['controller' => 'Rooms', 'action' => 'view', $discipline->room->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($discipline->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Teacher Id') ?></th>
                    <td><?= $discipline->teacher_id === null ? '' : $this->Number->format($discipline->teacher_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Workload') ?></th>
                    <td><?= $discipline->workload === null ? '' : $this->Number->format($discipline->workload) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($discipline->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($discipline->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Teachers') ?></h4>
                <?php if (!empty($discipline->teachers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Qrcode') ?></th>
                            <th><?= __('Hash') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Acronym') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Discipline Id') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($discipline->teachers as $teachers) : ?>
                        <tr>
                            <td><?= h($teachers->id) ?></td>
                            <td><?= h($teachers->qrcode) ?></td>
                            <td><?= h($teachers->hash) ?></td>
                            <td><?= h($teachers->first_name) ?></td>
                            <td><?= h($teachers->last_name) ?></td>
                            <td><?= h($teachers->acronym) ?></td>
                            <td><?= h($teachers->user_id) ?></td>
                            <td><?= h($teachers->discipline_id) ?></td>
                            <td><?= h($teachers->email) ?></td>
                            <td><?= h($teachers->title) ?></td>
                            <td><?= h($teachers->phone) ?></td>
                            <td><?= h($teachers->active) ?></td>
                            <td><?= h($teachers->created_at) ?></td>
                            <td><?= h($teachers->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Teachers', 'action' => 'view', $teachers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Teachers', 'action' => 'edit', $teachers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Teachers', 'action' => 'delete', $teachers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teachers->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Teacher Disciplines') ?></h4>
                <?php if (!empty($discipline->teacher_disciplines)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Teacher Id') ?></th>
                            <th><?= __('Discipline Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($discipline->teacher_disciplines as $teacherDisciplines) : ?>
                        <tr>
                            <td><?= h($teacherDisciplines->id) ?></td>
                            <td><?= h($teacherDisciplines->teacher_id) ?></td>
                            <td><?= h($teacherDisciplines->discipline_id) ?></td>
                            <td><?= h($teacherDisciplines->created) ?></td>
                            <td><?= h($teacherDisciplines->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'TeacherDisciplines', 'action' => 'view', $teacherDisciplines->]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'TeacherDisciplines', 'action' => 'edit', $teacherDisciplines->]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TeacherDisciplines', 'action' => 'delete', $teacherDisciplines->], ['confirm' => __('Are you sure you want to delete # {0}?', $teacherDisciplines)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
