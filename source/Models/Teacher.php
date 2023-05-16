<?php
/**
 *Author: Israel C A Silva
 *email: israelsilva1310@gmail.com
 *HomePage: israelcasilva.com.br
 **/

namespace source\Models;

use CoffeeCode\DataLayer\DataLayer;
use source\App\DisponibilityesController;

/**
 * @property string|null $id
 */
class Teacher extends DataLayer
{
    public function __construct()
    {
        parent::__construct(
            "teachers",
            [
                "first_name",
                "last_name",
                "email",
            ]
        );
    }

    public function dispTeacher()
    {
        return (new Disponibility())->find("teacher_id = :uid", "uid={$this->id}")->fetch(true);
    }
}