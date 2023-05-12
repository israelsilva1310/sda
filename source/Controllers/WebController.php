<?php

namespace source\Controllers;

class WebController
{
    public function home(array $data): void
    {
        echo "<h1>Home</h1>";
        var_dump($data);

    }

    public function contact(array $data): void
    {
        echo "<h1>Contato</h1>";
        var_dump($data);
    }

    public function error(array $data): void
    {
        echo "<h1>Erro {$data["errcode"]}</h1>";
        var_dump($data);
    }
}