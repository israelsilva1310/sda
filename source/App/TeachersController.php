<?php

namespace source\App;

use source\Models\Teacher;

class TeachersController
{
    private string $first_name;

    public function index()
    {
        $prof = (new Teacher());
        $prof->find()->fetch(true);
        var_dump($prof->data());

    }

    public function add(string $firstName, string $lastName, string $email, array $hours): TeachersController
    {
        $prof = (new Teacher());
        $prof->first_name = $firstName;
        $prof->last_name = $lastName;

//        if (!$prof->save()) {
//            $prof->fail()->getMessage();
//        }
        var_dump($prof->data());
        return $this;

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