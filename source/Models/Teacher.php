<?php

namespace source\Models;

use CoffeeCode\DataLayer\DataLayer;
use CoffeeCode\DataLayer\Connect;

/**
 *
 */
class Teacher extends DataLayer
{
    /**
     *
     */
    public function __construct()
    {
        parent::__construct("teachers", [
            "first_name",
            "last_name"
        ]);
    }

    public function read()
    {
        $conn = Connect::getInstance();
        $error = Connect::getError();

        if ($error) {
            echo $error->getMessage();
            die();
        }
    }

    public function create()
    {

    }

    public function edit()
    {

    }

    public function delete()
    {

    }

}