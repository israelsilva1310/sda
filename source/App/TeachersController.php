<?php

namespace source\App;

use source\Models\Disponibility;
use source\Models\Teacher;

class TeachersController
{
    public function index()
    {
        $list = (new Teacher())->find()->fetch(true);

        /** @var  $teacher Teacher */
        foreach ($list as $teacherItem) {
            var_dump($teacherItem->data());
            foreach ($teacherItem->dispTeacher() as $disp) {
                var_dump($disp->data);
            }
        }

        return;
    }

    public function view($id)
    {
        $prof = (new Teacher())->findById($id);

        // var_dump($prof->data());
    }

    public function add(array $data): void
    {
        $prof = (new Teacher());
        $prof->first_name = $data['first_name'];
        $prof->last_name = $data['last_name'];
        $prof->email = $data['email'];
        $profId = $prof->save();

        $disp = (new Disponibility());
        $disp->hour_id = $data['hour_id'];
        $disp->teacher_id = $data['teacher_id'];
        // $disp->save();

//        if ($prof->save()) {
//            echo "Professor adicionado!";
//        } else {
//            echo "Professor NÃO adicionado";
//        }
        var_dump($prof);
        //return $this;

    }

    public function edit()
    {

    }

    public function delete()
    {

    }

    public function baixar()
    {

    }
}