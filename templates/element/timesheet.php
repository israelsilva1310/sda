<?php
/**
 * Author: Israel C A Silva
 * git: https://github.com/israelsilva1310
 * HomePage: https://israelcasilva.com.br
 **/

?>
<div class="container">
    <h1> Quadro de Horarios </h1>
    <div class="container">

        <div class="row">
            <table class="table table-hover">
                <thead class="">

                <tr class="text-justify">
                    <th> Horario</th>
                    <th> Segunda</th>
                    <th> Terça</th>
                    <th> Quarta</th>
                    <th> Quinta</th>
                    <th> Sexta</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($schedules as $schedule) { ?>
                    <?php while ($schedule->hour == '07:00 - 07:50') { ?>
                        <tr>
                            <td>
                                <?= $schedule->hour ?>
                            </td>
                            <td class="text-justify">
                                <?= $schedule->discipline['name'] ?>
                                <br>
                                <?= $schedule->teacher['first_name'] ?>
                            </td>
                        </tr>
                        <?php break;
                    }
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
