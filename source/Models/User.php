<?php

namespace source\Models;

use CoffeeCode\DataLayer\DataLayer;
use CoffeeCode\DataLayer\Connect;

class User extends DataLayer
{
    public function __construct()
    {
        parent::__construct("users", [
            "first_name",
            "last_name",
            "email",
            "document"
        ]);
    }

    public function ler()
    {
        $error = Connect::getError();
        if ($error) {
            die();
        }
    }

    public function adicionar()
    {
        $error = Connect::getError();
        if ($error) {
            die();
        }

    }

    public function editar(array $data)
    {
        $conn = Connect::getInstance();
        $user = (new User())->findById($data['id']);
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->email = $data['email'];
        $user->document = $data['document'];
        $user->genre = $data['genre'];
        $user->modified = date('d/m/Y H:i');
        $user->save($data);
        var_dump($data);
        if ($user->save()) {
            echo "Registro salvo com sucesso";
        } else {

        }
    }

    public function apagar($data)
    {
        $user = (new User())->findById($data['id']);
        if ($user) {
            $user->destroy();
            echo "Registro " . $data['id'] . " apagado com sucesso";
        } elseif (!!$data['id']) {
            echo "Registro " . $data['id'] . " não localizado";
        }
    }
}