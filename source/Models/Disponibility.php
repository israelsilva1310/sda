<?php
/**
 *Author: Israel C A Silva
 *email: israelsilva1310@gmail.com
 *HomePage: israelcasilva.com.br
 **/

namespace source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Disponibility extends DataLayer
{
    public function __construct()
    {
        parent::__construct("disponibilityes", ["teacher_id", "hour_id"]);
    }

    public function add(Disponibility $disponibility, $teacherId, $hourId): Disponibility
    {
        $this->etacher->id = $teacherId;
        $this->hour->id = $hourId;
        //$this->save();
        return $this;
    }

}