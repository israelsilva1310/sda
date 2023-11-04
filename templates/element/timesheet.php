<?php
/**
 * Author: Israel C A Silva
 * git: https://github.com/israelsilva1310
 * HomePage: https://israelcasilva.com.br
 **/
//var_dump($schedules->hour);
//var_dump($horaaulas);

?>
<div class="container">
    <div class="card">

        <h1 class="card-header"> Quadro de Horarios </h1>

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
