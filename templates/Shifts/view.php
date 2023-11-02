<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shift $shift
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Shift'), ['action' => 'edit', $shift->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Shift'), ['action' => 'delete', $shift->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shift->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Shifts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Shift'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="shifts view content">
            <h3><?= h($shift->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($shift->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($shift->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount Lessions') ?></th>
                    <td><?= $shift->amount_lessions === null ? '' : $this->Number->format($shift->amount_lessions) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($shift->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($shift->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sunday') ?></th>
                    <td><?= $shift->sunday ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Monday') ?></th>
                    <td><?= $shift->monday ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Tuesday') ?></th>
                    <td><?= $shift->tuesday ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Wednesday') ?></th>
                    <td><?= $shift->wednesday ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Thursday') ?></th>
                    <td><?= $shift->thursday ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Friday') ?></th>
                    <td><?= $shift->friday ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Saturday') ?></th>
                    <td><?= $shift->saturday ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
