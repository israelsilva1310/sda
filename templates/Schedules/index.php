<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Schedule> $schedules
 */
//var_dump($courses);
?>
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3><?= __('Grade de Horarios') ?></h3>
            <?= $this->Html->link(__('Adcicionar'), ['action' => 'add'], ['class' => 'btn btn-success btn-sm float-left']) ?>
        </div>
        <div class="card-body">
            <div class="container">
                <br>
                <div class="row">
                    <div class="col">
                        <!--                    Select para buscar os cursos cadastrados-->
                        <select class="selectCursos" name="selectCursos" id="selectCursos">
                            <option>Selecione</option>
                            <?php foreach ($courses as $curso) { ?>
                                <option><?= $curso->name ?></option>
                            <?php } ?>
                        </select>

                    </div>
                </div>
                <div>
                    <!--        aqui vai apresentar os dados que foram selecionado no select via JS.-->
                    <h1 class="card-header"> Quadro de Horarios </h1>

                </div>

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

            <div class="table-responsive">
                <table class="table table-striped table-hover table-sm">
                    <thead class="">
                    <tr class="">
                        <th><?= $this->Paginator->sort('id', ['label' => 'ID']) ?></th>
                        <th>
                            <?= $this->Paginator->sort('course_id', ['label' => 'CURSO']) ?></th>
                        <th><?= $this->Paginator->sort('period', ['label' => 'PERIODO']) ?></th>
                        <th>
                            <?= $this->Paginator->sort('teacher_id', ['label' => 'PROFESSOR']) ?></th>
                        <th>
                            <?= $this->Paginator->sort('discipline_id', ['label' => 'DISCIPLINA']) ?></th>
                        <th><?= $this->Paginator->sort('day', ['label' => 'DIA']) ?></th>
                        <th><?= $this->Paginator->sort('hour', ['label' => 'HORA']) ?></th>
                        <th class="actions"><?= __('AÇÕES') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($schedules as $schedule): ?>
                        <tr>

                            <td><?= h($schedule->id) ?></td>
                            <td>
                                <?= $schedule->has('course') ? $this->Html->link($schedule->course->name, ['controller' => 'Courses', 'action' => 'view', $schedule->course->id]) : '' ?></td>
                            <td>
                                <?= $schedule->period === null ? '' : $this->Number->format($schedule->period) ?></td>
                            <td>
                                <?= $schedule->has('teacher') ? $this->Html->link($schedule->teacher->first_name, ['controller' => 'Teachers', 'action' => 'view', $schedule->teacher->id]) : '' ?></td>
                            <td>
                                <?= $schedule->has('discipline') ? $this->Html->link($schedule->discipline->name, ['controller' => 'Disciplines', 'action' => 'view', $schedule->discipline->id]) : '' ?></td>
                            <td><?= h($schedule->day) ?></td>
                            <td><?= h($schedule->hour) ?></td>
                            <td class="actions">

                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $schedule->id], ['class' => 'btn btn-success btn-sm']) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $schedule->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete # {0}?', $schedule->id)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>
