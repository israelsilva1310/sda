<?php
/**
 *Author: Israel C A Silva
 *email: israelsilva1310@gmail.com
 *HomePage: israelcasilva.com.br
 **/

namespace source\App;

use source\Models\Hour;

class HoursController
{
    public function index()
    {
        $hr = (new Hour());
        $hr = $hr->find()->fetch(true);
        foreach ($hr as $hours) {
            var_dump($hours->data);
        }
    }

    public function add(array $data)
    {
        $hr = (new Hour());
        $hr->hour_initial = $data['hour_initial'];
        $hr->hour_final = $data['hour_final'];
        $hr->week = $data['week'];
        $hr->active = $data['active'];
        $hrId = $hr->save();
        var_dump($hr);
    }

    public function edit()
    {

    }

    public function inative()
    {

    }
}