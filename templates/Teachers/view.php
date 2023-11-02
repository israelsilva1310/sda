<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teacher $teacher
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Teacher'), ['action' => 'edit', $teacher->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Teacher'), ['action' => 'delete', $teacher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teacher->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Teachers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Teacher'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="teachers view content">
            <h3><?= h($teacher->first_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Hash') ?></th>
                    <td><?= h($teacher->hash) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($teacher->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($teacher->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Acronym') ?></th>
                    <td><?= h($teacher->acronym) ?></td>
                </tr>
                <tr>
                    <th><?= __('Discipline') ?></th>
                    <td><?= $teacher->has('discipline') ? $this->Html->link($teacher->discipline->name, ['controller' => 'Disciplines', 'action' => 'view', $teacher->discipline->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($teacher->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($teacher->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($teacher->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($teacher->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Id') ?></th>
                    <td><?= $teacher->user_id === null ? '' : $this->Number->format($teacher->user_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($teacher->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($teacher->updated_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $teacher->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Qrcode') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($teacher->qrcode)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Courses') ?></h4>
                <?php if (!empty($teacher->courses)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Teacher Coordinator') ?></th>
                            <th><?= __('Acronym') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Requisito') ?></th>
                            <th><?= __('Carga Horaria') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($teacher->courses as $courses) : ?>
                        <tr>
                            <td><?= h($courses->id) ?></td>
                            <td><?= h($courses->teacher_coordinator) ?></td>
                            <td><?= h($courses->acronym) ?></td>
                            <td><?= h($courses->name) ?></td>
                            <td><?= h($courses->requisito) ?></td>
                            <td><?= h($courses->carga_horaria) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Courses', 'action' => 'view', $courses->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Courses', 'action' => 'edit', $courses->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Courses', 'action' => 'delete', $courses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courses->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Disponibilities') ?></h4>
                <?php if (!empty($teacher->disponibilities)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Teacher Id') ?></th>
                            <th><?= __('Hour Id') ?></th>
                            <th><?= __('Pediod Id') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('07:00') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($teacher->disponibilities as $disponibilities) : ?>
                        <tr>
                            <td><?= h($disponibilities->id) ?></td>
                            <td><?= h($disponibilities->active) ?></td>
                            <td><?= h($disponibilities->teacher_id) ?></td>
                            <td><?= h($disponibilities->hour_id) ?></td>
                            <td><?= h($disponibilities->pediod_id) ?></td>
                            <td><?= h($disponibilities->updated_at) ?></td>
                            <td><?= h($disponibilities->created_at) ?></td>
                            <td><?= h($disponibilities->07:00) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Disponibilities', 'action' => 'view', $disponibilities->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Disponibilities', 'action' => 'edit', $disponibilities->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Disponibilities', 'action' => 'delete', $disponibilities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disponibilities->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Turmas') ?></h4>
                <?php if (!empty($teacher->turmas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Teacher Id') ?></th>
                            <th><?= __('Cursos Id') ?></th>
                            <th><?= __('Sector Id') ?></th>
                            <th><?= __('Period Id') ?></th>
                            <th><?= __('Data Inicio') ?></th>
                            <th><?= __('Data Final') ?></th>
                            <th><?= __('Carga Horaria') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Acronym') ?></th>
                            <th><?= __('Collor') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($teacher->turmas as $turmas) : ?>
                        <tr>
                            <td><?= h($turmas->id) ?></td>
                            <td><?= h($turmas->teacher_id) ?></td>
                            <td><?= h($turmas->cursos_id) ?></td>
                            <td><?= h($turmas->sector_id) ?></td>
                            <td><?= h($turmas->period_id) ?></td>
                            <td><?= h($turmas->data_inicio) ?></td>
                            <td><?= h($turmas->data_final) ?></td>
                            <td><?= h($turmas->carga_horaria) ?></td>
                            <td><?= h($turmas->name) ?></td>
                            <td><?= h($turmas->acronym) ?></td>
                            <td><?= h($turmas->collor) ?></td>
                            <td><?= h($turmas->created) ?></td>
                            <td><?= h($turmas->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Turmas', 'action' => 'view', $turmas->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Turmas', 'action' => 'edit', $turmas->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Turmas', 'action' => 'delete', $turmas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $turmas->id)]) ?>
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
