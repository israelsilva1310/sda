<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Shift> $shifts
 */
?>
<div class="shifts index content">
    <h3><?= __('Shifts') ?></h3>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('name', ['label' => 'Turno']) ?></th>
                <th><?= $this->Paginator->sort('sunday', ['label' => 'Domingo']) ?></th>
                <th><?= $this->Paginator->sort('monday', ['label' => 'Segunda']) ?></th>
                <th><?= $this->Paginator->sort('tuesday', ['label' => 'Terça']) ?></th>
                <th><?= $this->Paginator->sort('wednesday', ['label' => 'Quarta']) ?></th>
                <th><?= $this->Paginator->sort('thursday', ['label' => 'Quinta']) ?></th>
                <th><?= $this->Paginator->sort('friday', ['label' => 'Sexta']) ?></th>
                <th><?= $this->Paginator->sort('saturday', ['label' => 'Sabado']) ?></th>
                <th><?= $this->Paginator->sort('amount_lessions', ['label' => 'Aulas']) ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($shifts as $shift) : ?>
                <tr>
                    <td><?= h($shift->name) ?>

                    </td>
                    <td>
                        <?php if ($shift->sunday === true) { ?>
                            <?= $this->Form->checkbox('sunday', ['checked' => true, 'disabled']) ?>
                        <?php } else { ?>
                            <?= $this->Form->checkbox('sunday', ['checked' => false, 'disabled']) ?>
                        <?php } ?>
                    </td>
                    <!--                    <td>-->
                    <!--                        <div class="form-check">-->
                    <!--                            <input class="form-check-input" id="flexCheckDisabled" type="checkbox"-->
                    <!--                                   value=""--><?php //if ($shift->sunday === 1) {
                    //                                echo 'checked';
                    //                            } else {
                    //                                echo '';
                    //                            } ?><!-- disabled>-->
                    <!--                            <label class="form-check-label" for="flexCheckDisabled"></label>-->
                    <!--                        </div>-->
                    <!--                    </td>-->
                    <td>
                        <?php if ($shift->monday === true) { ?>
                            <?= $this->Form->checkbox('monday', ['checked' => true, 'disabled']) ?>
                        <?php } else { ?>
                            <?= $this->Form->checkbox('monday', ['checked' => false, 'disabled']) ?>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($shift->tuesday === true) { ?>
                            <?= $this->Form->checkbox('tuesday', ['checked' => true, 'disabled']) ?>
                        <?php } else { ?>
                            <?= $this->Form->checkbox('tuesday', ['checked' => false, 'disabled']) ?>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($shift->wednesday === true) { ?>
                            <?= $this->Form->checkbox('wednesday', ['checked' => true, 'disabled']) ?>
                        <?php } else { ?>
                            <?= $this->Form->checkbox('wednesday', ['checked' => false, 'disabled']) ?>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($shift->thursday === true) { ?>
                            <?= $this->Form->checkbox('thursday', ['checked' => true, 'disabled']) ?>
                        <?php } else { ?>
                            <?= $this->Form->checkbox('thursday', ['checked' => false, 'disabled']) ?>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($shift->friday === true) { ?>
                            <?= $this->Form->checkbox('friday', ['checked' => true, 'disabled']) ?>
                        <?php } else { ?>
                            <?= $this->Form->checkbox('friday', ['checked' => false, 'disabled']) ?>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($shift->saturday === true) { ?>
                            <?= $this->Form->checkbox('saturday', ['checked' => true, 'disabled']) ?>
                        <?php } else { ?>
                            <?= $this->Form->checkbox('saturday', ['checked' => false, 'disabled']) ?>
                        <?php } ?>
                    </td>
                    <td><?= $shift->amount_lessions === null ? '' : $this->Number->format($shift->amount_lessions) ?>
                        diárias
                    </td>
                    <td class="actions">
                        <?= $this->Html->link(__('Editar'), [
                            'action' => 'edit', $shift->id,
                        ], [
                            'class' => 'btn btn-primary',
                        ]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
