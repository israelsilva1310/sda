<?php
require __DIR__ . "./vendor/autoload.php";


$list = new \source\App\HoursController();
$list->index();
//$list->edit(['id' => 9, 'hour_initial' => '07:50', 'hour_final' => '08:40', 'week' => 'sexta-feira', 'active' => 1]);
//$list->inative(['id' => '10', 'active' => 0]);
//$list->active(['id' => '10', 'active' => 1]);

