<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!--<div class="alert alert-danger" onclick="this.classList.add('hidden')">--><?php //= $message ?><!--</div>-->
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Oops! </strong> <?= $message ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
