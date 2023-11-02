<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Period $period
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Period'), ['action' => 'edit', $period->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Period'), ['action' => 'delete', $period->id], ['confirm' => __('Are you sure you want to delete # {0}?', $period->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Periods'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Period'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="periods view content">
            <h3><?= h($period->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= h($period->year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($period->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Period') ?></th>
                    <td><?= $period->period === null ? '' : $this->Number->format($period->period) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bimester') ?></th>
                    <td><?= $period->bimester === null ? '' : $this->Number->format($period->bimester) ?></td>
                </tr>
                <tr>
                    <th><?= __('Semester') ?></th>
                    <td><?= $period->semester === null ? '' : $this->Number->format($period->semester) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($period->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($period->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Classes') ?></h4>
                <?php if (!empty($period->classes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Instrutores Id') ?></th>
                            <th><?= __('Cursos Id') ?></th>
                            <th><?= __('Sector Id') ?></th>
                            <th><?= __('Period Id') ?></th>
                            <th><?= __('Data Inicio') ?></th>
                            <th><?= __('Data Final') ?></th>
                            <th><?= __('Carga Horaria') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Acronym') ?></th>
                            <th><?= __('Collor') ?></th>
                            <th><?= __('Period') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($period->classes as $classes) : ?>
                        <tr>
                            <td><?= h($classes->id) ?></td>
                            <td><?= h($classes->instrutores_id) ?></td>
                            <td><?= h($classes->cursos_id) ?></td>
                            <td><?= h($classes->sector_id) ?></td>
                            <td><?= h($classes->period_id) ?></td>
                            <td><?= h($classes->data_inicio) ?></td>
                            <td><?= h($classes->data_final) ?></td>
                            <td><?= h($classes->carga_horaria) ?></td>
                            <td><?= h($classes->name) ?></td>
                            <td><?= h($classes->acronym) ?></td>
                            <td><?= h($classes->collor) ?></td>
                            <td><?= h($classes->period) ?></td>
                            <td><?= h($classes->created) ?></td>
                            <td><?= h($classes->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Classes', 'action' => 'view', $classes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Classes', 'action' => 'edit', $classes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Classes', 'action' => 'delete', $classes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classes->id)]) ?>
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
