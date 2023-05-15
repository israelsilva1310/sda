<?php
/**
 *Author: Israel C A Silva
 *email: israelsilva1310@gmail.com
 *HomePage: israelcasilva.com.br
 **/

namespace source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Address extends DataLayer
{
    public function __construct()
    {
        parent::__construct("addresses", ["user_id"], "id", false);
    }

    public function add(User $user, int $cep, string $street, string $number): Address
    {
        $this->user_id = $user->id;
        $this->cep = $cep;
        $this->street = $street;
        $this->number = $number;
        return $this;

    }
}