<?php
/**
 * Author: Israel C A Silva
 * git: https://github.com/israelsilva1310
 * HomePage: https://israelcasilva.com.br
 **/
?>
<div class="container">

    <?= $this->Form->control('Curso', [
        'onchange' => 'buscarCursos()',
        'type' => 'select',
        'options' => $courses,
        'class' => 'form-select col-md-4',
        'empty' => 'Selecione o curso',
    ]) ?>

    <h1 class="card-header"> Quadro de Horarios </h1>
    <div class="card-body">

        <table class="table table-striped-columns text-center">
            <thead>
            <tr class="">
                <?php foreach ($diasemanas as $diasemana) { ?>
                    <th><?php echo $diasemana; ?></th>
                <?php } ?>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($horaaulas as $horaula) { ?>
                <tr>
                    <td><?= $horaula ?></td>

                    <?php foreach ($schedules as $schedule) { ?>
                        <?php if ($horaula == $schedule->hour) { ?>
                            <td>
                                <?= $schedule->discipline['name'] ?><br>
                                <?= $schedule->teacher['first_name'] ?>
                            </td>
                        <?php } ?>
                    <?php } ?>
                </tr>
            <?php } ?>

            </tbody>
            <tfoot>
            <tr>
                <th>Total</th>
            </tr>
            </tfoot>

        </table>

    </div>
</div>
