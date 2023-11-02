<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hour $hour
 */
?>
<hr>
<div class="row card">

    <?= $this->Form->create($hour) ?>
    <div class="card-header">
        <legend><?= __('Editar Horário') ?></legend>
    </div>
    <div class="card-body">
        <div class="col">
            <?= $this->Form->select(
                'week',
                [
                    'Segunda-Feira',
                    'Terça-Feira',
                    'Quarta-Feira',
                    'Quinta-Feira',
                    'Sexta-Feira',
                ],
                [
                    'empty' => 'Selecione a Semana',
                    'class' => 'form-control col',
                ]
            ) ?>

            <?= $this->Form->control('description', [
                'class' => 'form-control col',
            ]) ?>
            <?= $this->Form->control('period', [
                'class' => 'form-control col',
            ]) ?>

            <?= $this->Form->control('hour_initial', [
                'empty' => true,
                'class' => 'form-control col col-md-3',
                'label' => 'Inicio',
            ]) ?>
            <?= $this->Form->control('hour_final', [
                'empty' => true,
                'class' => 'form-control col col-md-3',
                'label' => 'Fim',
            ]) ?>
            <div class="row">

                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <?= $this->Form->checkbox('active', [
                            'Inativo',
                            'Ativo',
                            'class' => 'custom-control-input',
                            'id' => 'active',
                            'label' => 'Ativo',
                        ]) ?>
                        <label class="custom-control-label" for="active">Ativo</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="card-footer">
    <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'btn btn-sm btn-danger']) ?>
    <?= $this->Form->button(__('Submit', ['class' => 'btn btn-success'])) ?>
</div>
<?= $this->Form->end() ?>
</div>
