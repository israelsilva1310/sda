<?php

namespace source\Models;

use CoffeeCode\DataLayer\DataLayer;

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
        parent::__construct("teachers", ["first_name", "last_name"]);
    }

}