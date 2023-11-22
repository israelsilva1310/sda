<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Restricao $restricao
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Restricao'), ['action' => 'edit', $restricao->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Restricao'), ['action' => 'delete', $restricao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $restricao->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Restricaos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Restricao'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="restricaos view content">
            <h3><?= h($restricao->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($restricao->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Teacher') ?></th>
                    <td><?= $restricao->has('teacher') ? $this->Html->link($restricao->teacher->first_name, ['controller' => 'Teachers', 'action' => 'view', $restricao->teacher->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Dia Semana') ?></th>
                    <td><?= h($restricao->dia_semana) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($restricao->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora') ?></th>
                    <td><?= h($restricao->hora) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($restricao->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($restricao->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $restricao->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descricao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($restricao->descricao)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
