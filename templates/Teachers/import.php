<?php
/**
 * Author: Israel C A Silva
 * git: https://github.com/israelsilva1310
 * HomePage: https://israelcasilva.com.br
 **/
//print_r($_FILES);
echo $teacher;
?>
<div class="col-md-6">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Importar planilha</h3>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputFile">Carregar arquivo</label>
                <div class="input-group">
                    <div class="custom-file">
                        <?= $this->Form->input('data', ['enctype' => 'multipart/form-data']) ?>
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Carregar...</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
        </div>
        <?= $this->Form->button('Carregar', ['action' => 'import'], ['class' => 'btn btn-success']) ?>
        <?= $this->Form->end() ?>
    </div>
    <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-danger']) ?>

</div>


<script>
    $('.file-upload').file_upload();

</script>
