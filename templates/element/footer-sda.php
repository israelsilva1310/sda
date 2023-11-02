<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/
?>

<div class="container my-auto">
    <div class="copyright text-center my-auto">
        <span>Copyright &copy; TCC of SDA | IFSMG 2023 <strong>All rights reserved.</strong></span>

        <?= $this->Html->link(__('Deslogar'), [
            'controller' => 'users',
            'action' => 'logout']) ?>
    </div>
</div>
