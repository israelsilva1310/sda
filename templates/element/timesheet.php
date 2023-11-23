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
        <?php foreach ($horaaulas as $horaula) { ?>
            <?php foreach ($courses as $course) { ?>
                <h2><?= $course->name ?></h2>
                <?php foreach ($schedules as $schedule) { ?>
                    <?php if ($schedule->course->id = $course->id) { ?>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Horario</th>
                                <?php foreach ($diasemanas as $semana) { ?>
                                    <th scope="col"><?= $semana ?></th>
                                <?php } ?>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?= $schedule->hour ?></td>
                                <?php if ($schedule->discipline->course_id = $schedule->course->id) { ?>
                                    <?php if ($schedule->day = $semana) { ?>
                                        <td><?= $schedule->discipline->name ?></td>

                                    <?php } ?>
                                <?php } ?>

                            </tr>

                            </tbody>
                        </table>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php } ?>
        <div class="card-footer">

        </div>
    </div>
</div>
