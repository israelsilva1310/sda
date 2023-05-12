<?php

namespace source\Controllers;

use source\Models\Teacher;

class TeacherController
{
    public function index()
    {
        $prof = new Teacher();
        $list = $prof->find()->fetch();
    }

    public function add(string $firstName, string $lastName, string $email, array $hours)
    {
        $prof = new Teacher();
        $prof->find()->fetch('');
//        $prof->first_name = $firstName;
//        $prof->last_name = $lastName;
//        $prof->email = $email;
//        $prof->hours = $hours;
//        $prof->save();
//        if (!$prof->save()) {
//            $prof->fail()->getMessage();
//        }
        var_dump($prof->data());

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