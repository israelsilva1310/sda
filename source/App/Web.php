<?php
/**
 *Author: Israel C A Silva
 *email: israelsilva1310@gmail.com
 *HomePage: israelcasilva.com.br
 **/

namespace source\App;

class Web
{
    public function __construct($data)
    {
        $this->router = $data;
    }

    public function home($data): void
    {
        echo "<h1>Web Home</h1>";
        echo $data['errcode'];

    }

    public function contact($data): void
    {
        echo "<h1>Web Contato</h1>";
        echo "Pagina Contato";
    }

    public function error($data): void
    {
        echo "<h1>Web Error</h1>";
        var_dump($data['errcode']);
    }

}