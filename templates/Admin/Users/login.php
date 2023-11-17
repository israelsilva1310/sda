<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/ ?>
<div class="card-dark container-sm">
    <?= $this->Flash->render() ?>
    <div class="card-header">
        <h3>Login</h3>
    </div>
    <legend><?= __('Por favor, insira seu email e a senha') ?></legend>
    <?= $this->Form->create() ?>
    <div class="card-body">
        <div class="row container-fluid">
            <div class="col">
                <?= $this->Form->control('email', [
                    'required' => true,
                    'label' => 'E-mail',
                    'class' => 'form-control',
                ]) ?>

                <?= $this->Form->control('password', [
                    'required' => true,
                    'label' => 'Senha',
                    'class' => 'form-control',
                ]) ?>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <?= $this->Form->submit(__('Entrar'), ['class' => 'btn btn-success']) ?>
        <?= $this->Form->end() ?>

    </div>
</div>

