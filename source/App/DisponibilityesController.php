<?php
/**
 *Author: Israel C A Silva
 *email: israelsilva1310@gmail.com
 *HomePage: israelcasilva.com.br
 **/

namespace source\App;

use source\Models\Disponibility;

/**
 *
 */
class DisponibilityesController
{
    /**
     * @return void
     */
    public function index()
    {
        $disp = (new Disponibility())->find()->fetch(true);
        foreach ($disp as $disponibilidade) {
            var_dump($disponibilidade->data);
        }
    }

    public function view($id)
    {
        $disp = (new Disponibility())->findById($id);

        //var_dump($disp->data());
        return $this;
    }

    public function add(array $data): void
    {
        $disp = (new Disponibility());
        $disp->teacher_id = $data['teacher_id'];
        $disp->hour_id = $data['hour_id'];
        $dispId = $disp->save();

        if ($disp->save()) {
            echo "cadastrado ID: " . $dispId;
        } else {
            echo "vixi, deu erro";
        }
        return;
    }

    public function edit(array $data)
    {
        $disp = (new Disponibility())->findById($data['id']);
        $disp->teacher_id = $data['teacher_id'];
        $disp->hour_id = $data['hour_id'];
        $dispId = $disp->save();

        if ($disp->save()) {
            echo "Alterado" . $dispId;
            var_dump($disp->data());
        } else {
            echo "vixi, deu erro";
        }
        return;
    }

    public function inacive(array $data)
    {
        $disp = (new Disponibility())->findById($data['id']);
//        $disp->teacher_id = $disp['teacher_id'];
//        $disp->hour_id = $data['hour_id'];
        $disp->active = $data['active'];
        if ($disp->save()) {
            echo "Registro:" . $data['id'] . " Inativo";
            //var_dump($id);
        }
        var_dump($disp->data());
    }

    public function active(array $data)
    {
        $disp = (new Disponibility())->findById($data['id']);
//        $disp->teacher_id = $disp['teacher_id'];
//        $disp->hour_id = $data['hour_id'];
        $disp->active = $data['active'];
        if ($disp->save()) {
            echo "Registro: " . $data['id'] . " Ativado";
            //var_dump($id);
        }
        var_dump($disp->data());
    }

    public function delete($id)
    {
        $disp = (new Disponibility())->findById($id);
        $disp->destroy();
        if ($disp->destroy()) {
            echo "Registro:" . $id . " excluido";
            var_dump($id);
        }
    }
}