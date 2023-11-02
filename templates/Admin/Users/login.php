<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/ ?>
<div class="users form">
    <h3>Login</h3>
    <div class="form-group">
        <?= $this->Form->create() ?>
        <fieldset>
            <legend><?= __('Por favor insira seu usuario e a senha') ?></legend>
            <?= $this->Form->control('email', [
                'required' => true,
                'label' => 'email',
                'class' => 'col col-3 form-control',
            ]) ?>
            <?= $this->Form->control('password', [
                'required' => true,
                'label' => 'Senha',
                'class' => 'col col-3 form-control',
            ]) ?>
        </fieldset>
        <hr>
        <?= $this->Flash->render() ?>
        <?= $this->Form->submit(__('Login'), ['class' => 'btn btn-success']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
