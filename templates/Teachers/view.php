<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teacher $teacher
 */
?>
<div class="container-fluid">
    <div class="row">
        <div class="card-primary">
            <div class="card-header">
                <h4 class="heading"><?= __('Professor') ?></h4>
                <span>
                   <?= h($teacher->first_name) ?>
               </span>

            </div>
            <div class="card-body">

                <div class="column-responsive column-80">
                    <div class="teachers view content">
                        <table>
                            <tr>
                                <th><?= __('Nome') ?></th>
                                <td><?= h($teacher->first_name) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Sobrenome') ?></th>
                                <td><?= h($teacher->last_name) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Abreviação') ?></th>
                                <td><?= h($teacher->acronym) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Disciplina Principal') ?></th>
                                <td><?= $teacher->has('discipline') ? $this->Html->link($teacher->discipline->name, ['controller' => 'Disciplines', 'action' => 'view', $teacher->discipline->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Email') ?></th>
                                <td><?= h($teacher->email) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Titulo') ?></th>
                                <td><?= h($teacher->title) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Telefone') ?></th>
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
                                <th><?= __('Ativo') ?></th>
                                <td><?= $teacher->active ? __('Sim') : __('Não'); ?></td>
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
            <div class="card-footer">
                <div class="btn-group float-right">

                    <?= $this->Html->link(__('Editar'), [
                        'action' => 'edit', $teacher->id], [
                        'class' => 'btn btn-primary']) ?>

                    <?= $this->Form->postLink(__('Deletar'), [
                        'action' => 'delete', $teacher->id
                    ], [
                        'confirm' => __('Voce quer mesmo excluir o registro {0}?', $teacher->id),
                        'class' => 'btn btn-danger']) ?>

                    <?= $this->Html->link(__('Imprimir'), [
                        'action' => 'print', $teacher->id], [
                        'class' => 'btn btn-dark float-left']) ?>

                    <?= $this->Html->link(__('Voltar'), [
                        'action' => 'index'], [
                        'class' => 'btn btn-warning']) ?>
                </div>
            </div>

        </div>


    </div>
</div>

