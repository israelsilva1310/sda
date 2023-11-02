<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hour $hour
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Hour'), ['action' => 'edit', $hour->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Hour'), ['action' => 'delete', $hour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hour->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Hours'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Hour'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="hours view content">
            <h3><?= h($hour->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($hour->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Period') ?></th>
                    <td><?= h($hour->period) ?></td>
                </tr>
                <tr>
                    <th><?= __('Week') ?></th>
                    <td><?= h($hour->week) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($hour->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hour Initial') ?></th>
                    <td><?= h($hour->hour_initial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hour Final') ?></th>
                    <td><?= h($hour->hour_final) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($hour->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($hour->updated_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $hour->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Disponibilityes') ?></h4>
                <?php if (!empty($hour->disponibilityes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Teacher Id') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Hour Id') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($hour->disponibilityes as $disponibilityes) : ?>
                        <tr>
                            <td><?= h($disponibilityes->id) ?></td>
                            <td><?= h($disponibilityes->teacher_id) ?></td>
                            <td><?= h($disponibilityes->active) ?></td>
                            <td><?= h($disponibilityes->hour_id) ?></td>
                            <td><?= h($disponibilityes->updated_at) ?></td>
                            <td><?= h($disponibilityes->created_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Disponibilityes', 'action' => 'view', $disponibilityes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Disponibilityes', 'action' => 'edit', $disponibilityes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Disponibilityes', 'action' => 'delete', $disponibilityes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disponibilityes->id)]) ?>
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
