<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <div class="side-nav">
                <legend><?= __('Adicionar Professor') ?></legend>
            </div>
        </div>
        <div class="card-body">
            <?= $this->Form->create($teacher) ?>
            <fieldset>
                <div class="form-group">

                    <?= $this->Form->control('hash', ['type' => 'hidden']) ?>
                    <?= $this->Form->control('first_name', ['class' => 'form-control']) ?>
                    <?= $this->Form->control('last_name', ['class' => 'form-control']) ?>
                    <?= $this->Form->control('acronym', ['class' => 'form-control']) ?>
                    <?= $this->Form->control('user_id', ['type' => 'hidden', 'class' => 'form-control']) ?>
                    <?= $this->Form->control('discipline_id', ['options' => $disciplines, 'empty' => true, 'class' => 'form-control']) ?>
                    <?= $this->Form->control('email', ['class' => 'form-control']) ?>
                    <?= $this->Form->control('title', ['class' => 'form-control']) ?>
                    <?= $this->Form->control('phone', ['class' => 'form-control']) ?>
                    <?= $this->Form->control('active', ['class' => 'form-check']) ?>



                </div>
            </fieldset>
        </div>
        <div class="card-footer">
            <h4 class="heading"><?= __('Ações:') ?></h4>
            <?= $this->Html->link(__('Cancelar'), [
                'action' => 'index'], ['class' => 'btn btn-danger side-nav-item float-right']) ?>
            <?= $this->Form->button(__('Salvar',
            ), ['class' => 'btn btn-success btn-sm']) ?>
            <?= $this->Form->end() ?>

        </div>
    </div>
</div>
