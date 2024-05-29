<?php

namespace app\controllers;

class BaseController
{

    private $db;

    public function __construct()
    {
        try {
            $this->db = new \PDO('mysql:host=localhost;dbname=my_database', 'root', '');
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
            die();
        }
    }

    protected function getConexao()
    {
        return $this->db;
    }

    protected function renderizar_tela($pagina){
        include __DIR__."/../views/{$pagina}.php";
    }
}
