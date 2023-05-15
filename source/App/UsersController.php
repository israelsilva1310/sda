<?php

namespace source\App;

use source\Models\User;
use source\Models\Address;

/**
 *
 */
class UsersController
{
    /**
     * @var $user
     * @var $address
     */
    public function index()
    {
        $users = (new User());
        $list = $users->find()->fetch(true);

        /** @var $users $users */
        foreach ($list as $users) {
            var_dump($users->data);
            //var_dump($users->address);
        }

    }

    /**
     * @param array $data
     * @return void
     */
    public function add()
    {
        $user = new User();
        $user->first_name = "Eduardo";
        $user->last_name = "Miguel";
        $user->genre = "M";
        $user->save();

        if ($user->save()) {
            echo "Usuario Adicionado com sucesso";
        } else {
            echo "Usuario não foi Adicionado";
        }

    }

    /**
     * @param array $data
     * @return void
     */
    public
    function edit(array $data)
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
        } else {
            echo "Não foi possivel Salvar";
        }
    }

    /**
     * @return void
     */
    public
    function inactive()
    {

    }

    /**
     * @return void
     */
    public
    function delete()
    {

    }

}