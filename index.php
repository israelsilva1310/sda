<?php
require __DIR__ . "./vendor/autoload.php";


$list = new \source\App\HoursController();
//$list->index();
$list->add([
    'hour_initial' => '07:00',
    'hour_final' => '07:50',
    'week' => 'terça-feira',
    'active' => 1
]);

