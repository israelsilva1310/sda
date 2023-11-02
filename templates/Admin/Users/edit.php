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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
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
