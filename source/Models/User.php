<?php

namespace source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    public int|null $id;

    public function __construct()
    {
        parent::__construct("users", ["first_name", "last_name"]);
    }


    public function addresses()
    {
        return (new Address("Addresses", ["user_id"],))->find("user_id = :uid", "uid= {$this->id}")->fetch(true);
    }


}