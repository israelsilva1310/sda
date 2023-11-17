<?php
/**
 * Author: Israel C A Silva
 * git: https://github.com/israelsilva1310
 * HomePage: https://israelcasilva.com.br
 **/
?>
<div class="container">
    <div class="row">
        <div class="col">
            <select class="form-select" name="selectcursos" id="selectcursos">
                <option>Selecione</option>
                <?php foreach ($courses as $curso) { ?>
                    <option><?= $curso ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col">
            <select class="form-select" name="selectperiodos" id="selectperiodos">
                <option>Selecione</option>
                <?php foreach ($periodos as $periodo) { ?>
                    <option><?= $periodo ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col">
            <select name="" id=""></select>
        </div>
    </div>
    <script>
        $(function () {
            $('#selectcursos').onchange(function () {
                console.log('1')
            })
        })
    </script>

    <h1 class="card-header"> Quadro de Horarios </h1>
    <div class="card-body">

        <table class="table table-striped-columns text-center" id="quadroHorarios">
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
