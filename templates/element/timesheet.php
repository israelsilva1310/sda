<?php
/**
 * Author: Israel C A Silva
 * git: https://github.com/israelsilva1310
 * HomePage: https://israelcasilva.com.br
 **/ ?>
<div class="container">
    <br>
    <div class="row">
        <div class="col">
            <select class="form-select" name="selectCursos" id="selectCursos">
                <option>Selecione</option>
                <?php foreach ($courses as $curso) { ?>
                    <option><?= $curso->name ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col">
            <?= $this->Form->submit('carregar', [
                'class' => 'btn btn-warning',
                'id' => 'btnCarregar',
                'name' => 'btnCarregar',
            ]) ?>
        </div>
    </div>
    <h1 class="card-header"> Quadro de Horarios </h1>

    <div class="card-body">

        <?php foreach ($courses

        as $course) { ?>
        <h3><?= $course->name ?></h3>
        <table class="table table-striped">
            <thead class="thead-dark">

            <?php foreach ($diasemanas as $semana) { ?>
                <th scope="col">
                    <h3><?= $semana ?></h3>
                </th>

                <?php foreach ($horaaulas as $horaula) { ?>
                    <h3><?= $horaula ?></h3>

                    <?php foreach ($schedules as $schedule) { ?>
                        <?php if ($schedule->day == $semana) { ?>
                            <?php if ($schedule->hour == $horaula) { ?>

                                <?php if ($schedule->course->id = $course->id) { ?>
                                    <?php if ($schedule->discipline->course_id = $schedule->course->id) { ?>
                                        <table class="table table-striped">
                                            <thead class="thead-dark">

                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <?= $schedule->discipline->name ?>

                                                    <?= $schedule->teacher->first_name ?>
                                                </td>
                                            </tr>
                                            </tbody>

                                        </table>

                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>

                    <?php } ?>
                <?php } ?>
            <?php } ?>
            <?php } ?>
            <div class="card-footer">

            </div>
    </div>
</div>
