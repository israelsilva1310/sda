<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module $module
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Module'), ['action' => 'edit', $module->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Module'), ['action' => 'delete', $module->id], ['confirm' => __('Are you sure you want to delete # {0}?', $module->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Modules'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Module'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="modules view content">
            <h3><?= h($module->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($module->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Icon') ?></th>
                    <td><?= h($module->icon) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prefix') ?></th>
                    <td><?= h($module->prefix) ?></td>
                </tr>
                <tr>
                    <th><?= __('Url') ?></th>
                    <td><?= h($module->url) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($module->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($module->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($module->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $module->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Menus') ?></h4>
                <?php if (!empty($module->menus)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Module Id') ?></th>
                            <th><?= __('Menu Pai') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Prefix') ?></th>
                            <th><?= __('Url') ?></th>
                            <th><?= __('Order') ?></th>
                            <th><?= __('Context') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($module->menus as $menus) : ?>
                        <tr>
                            <td><?= h($menus->id) ?></td>
                            <td><?= h($menus->module_id) ?></td>
                            <td><?= h($menus->menu_pai) ?></td>
                            <td><?= h($menus->name) ?></td>
                            <td><?= h($menus->prefix) ?></td>
                            <td><?= h($menus->url) ?></td>
                            <td><?= h($menus->order) ?></td>
                            <td><?= h($menus->context) ?></td>
                            <td><?= h($menus->active) ?></td>
                            <td><?= h($menus->created) ?></td>
                            <td><?= h($menus->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Menus', 'action' => 'view', $menus->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Menus', 'action' => 'edit', $menus->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Menus', 'action' => 'delete', $menus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menus->id)]) ?>
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
