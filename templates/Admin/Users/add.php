<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'btn btn-danger']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Adicionar Usuario') ?></legend>

                <?php
                echo $this->Form->control('first_name', [
                    'label' => 'Nome',
                ]);
                echo $this->Form->control('last_name', [
                    'label' => 'Sobrenome',
                ]);
                echo $this->Form->control('email', [
                    'label' => 'E-mail',
                ]);
                echo $this->Form->control('role_id', [
                    'label' => 'Nivel de acesso', [
                        'class' => 'select',
                        'options' => $roles,
                        'empty' => 'Selecione',
                    ],
                ]);
                echo $this->Form->control('password', [
                    'label' => 'Senha'
                ]);
                //echo $this->Form->control('document');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
