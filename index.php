<?php
require __DIR__ . "./vendor/autoload.php";


/**
 * Controller Hours
 */
//$list = new \source\App\HoursController();

//$list->index();
//$list->add(['period' => 'vespertino', 'description' => 'Aula 2', 'hour_initial' => '07:50', 'hour_final' => '08:40', 'week' => 'sexta-feira', 'active' => 1]);
//$list->edit(['id' => 9, 'hour_initial' => '07:50', 'hour_final' => '08:40', 'week' => 'sexta-feira', 'active' => 1]);
//$list->inative(['id' => '10', 'active' => 0]);
//$list->active(['id' => '10', 'active' => 1]);

/**
 * Controller Teachers
 */
$profs = new \source\App\TeachersController();
$profs->index();
//$profs->view('3');
//$disp->
//$profs->add([
//        'first_name' => 'Diego',
//        'last_name' => 'Parada Roso',
//        'email' => 'diego@teste.com',
//        'disponibility' => [
//            'teacher_id' => '1',
//            'hours_id' => '1'
//        ]
//    ]
//);

/**
 * DisponibilityesController
 */
//$disp = new \source\App\DisponibilityesController();
//$disp->index();
//$disp->add(['teacher_id' => '1', 'hour_id' => '11']);
//$disp->view(1);
//$disp->edit(['id' => '1', 'teacher_id' => 1, 'hour_id' => 12]);
//$disp->inacive(['id' => 1, 'active' => '0']);
//$disp->active(['id' => 1, 'active' => '1']);

