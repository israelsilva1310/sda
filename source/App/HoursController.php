<?php
/**
 *Author: Israel C A Silva
 *email: israelsilva1310@gmail.com
 *HomePage: israelcasilva.com.br
 **/

namespace source\App;

use http\Params;
use source\Models\Hour;

class HoursController
{
    public function index()
    {
        $hr = (new Hour());
        $hr = $hr->find()->fetch(true);
        foreach ($hr as $hours) {
            if ($hours->active == 1) {
                var_dump($hours->data());
            }
        }
    }

    public function add(array $data)
    {
        $hr = (new Hour());
        $hr->period = $data['period'];
        $hr->description = $data['description'];
        $hr->hour_initial = $data['hour_initial'];
        $hr->hour_final = $data['hour_final'];
        $hr->week = $data['week'];
        $hr->active = $data['active'];
        $hrId = $hr->save();

        if ($hr->save()) {
            echo "Horario adicionado!";
        } else {
            echo "Não foi adicionado";
        }
        var_dump($hr);
    }

    public function edit(array $data)
    {
        $hr = (new Hour())->findById($data['id']);
        $hr->hour_initial = $data['hour_initial'];
        $hr->hour_final = $data['hour_final'];
        $hr->week = $data['week'];
        $hr->active = $data['active'];
        $hrId = $hr->save();

        if ($hr->save()) {
            echo "Horario Alterado!";
        } else {
            echo "Não possivel alterar";
        }
        var_dump($hr->data());
    }

    public function inative(array $data)
    {
        $hr = (new Hour())->findById($data['id']);
        $hr->id = $data['id'];
        $hr->active = $data['active'];
        $hrId = $hr->save();
        if ($hr->save()) {
            echo "Horario Alterado!";
        } else {
            echo "Não possivel alterar";
        }
        var_dump($hr->data());
    }

    public function active(array $data)
    {
        $hr = (new Hour())->findById($data['id']);
        $hr->id = $data['id'];
        $hr->active = $data['active'];
        $hrId = $hr->save();
        if ($hr->save()) {
            echo "Horario Alterado!";
        } else {
            echo "Não possivel alterar";
        }
        var_dump($hr->data());
    }
}