<?php

namespace source\Controllers;

use CoffeeCode\DataLayer\Connect;
use source\Models\User;

class UserController
{
    public function index()
    {
        $users = new User();
        $users->ler();
    }

    public function adicionar()
    {
        $user = new User();
        $user->fisrt_name = "Pedro";
        $user->last_name = "Santos";
        $user->genre = "M";
        $user->save();
        if (!$user->save()) {
            echo "Usuario não foi Adicionado";
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
        if ($user->save()) {
            echo "Registro salvo com sucesso";
        }
    }

}