<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/ ?>

<div class="card col-md-6">
    <div class="card-red form-group">
        <?= $this->Flash->render() ?>
        <div class="card-header">
            <h3>Login</h3>
        </div>
        <legend><?= __('Por favor, insira seu email e a senha') ?></legend>
        <div class="card-body">
            <?= $this->Form->create() ?>
            <?= $this->Form->control('email', [
                'required' => true,
                'label' => 'email',
                'class' => 'col col-6 form-control',
            ]) ?>
            <?= $this->Form->control('password', [
                'required' => true,
                'label' => 'Senha',
                'class' => 'col col-3 form-control',
            ]) ?>

        </div>
        <div class="card-footer">
            <?= $this->Form->submit(__('Entrar'), ['class' => 'btn btn-success']) ?>
            <?= $this->Form->end() ?>

        </div>
    </div>
</div>
