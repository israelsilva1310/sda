<?php
/**
 *Author: Israel C A Silva
 *email: israelsilva1310@gmail.com
 *HomePage: israelcasilva.com.br
 **/

namespace source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Teacher extends DataLayer
{
    public function __construct()
    {
        parent::__construct(
            "teachers",
            [
                "availability_id",
                "first_name",
                "last_name",
                "email",
            ]
        );
    }

    public function disponibilityTeacher()
    {
        $disp = true;
    }
}