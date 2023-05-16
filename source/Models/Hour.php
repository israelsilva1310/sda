<?php
/**
 *Author: Israel C A Silva
 *email: israelsilva1310@gmail.com
 *HomePage: israelcasilva.com.br
 **/

namespace source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Hour extends DataLayer
{
    public function __construct()
    {
        parent::__construct(
            "hours",
            [
                "description",
                "period",
                "hour_initial",
                "hour_final",
                "week"
            ]
        );
    }
}