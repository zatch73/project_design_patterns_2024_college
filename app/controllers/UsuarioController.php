<?php

namespace app\controllers;

use app\controllers\BaseController;
use app\DAO\UserDAO;
use app\models\UserModel;

class UsuarioController extends BaseController
{
    // public function admin()
    // {
    //     var_dump($_SESSION['super']);
    //     if ($_SESSION['super']) {
    //         $this->renderizar_tela(('cruds'));
    //     } else {
    //         $this->renderizar_tela('notPermis');
    //     }
    // }

    // public function login()
    // {
    //     $body = json_decode(file_get_contents('php://input'), true);

    //     $user = new UserModel();
    //     $user->setEmail($body['email'] ?? null);
    //     $user->setPassword(hash('sha256', $body['password']) ?? null);

    //     $userDAO = new UserDAO($this->getConnection());
    //     $userModel = $userDAO->getUserByEmail($user);
    //     if ($userModel != null && $userModel->getId() != null) {
    //         $_SESSION['username'] = $user->getUsername();
    //         $_SESSION['super'] = $user->getSuperUser();
    //         $_SESSION['logado'] = true;
    //         return '/'; 
    //     }else {
    //         return '/login'; 
    //     }
    // }

    public function tela_login_usuario()
    {
        $this->renderizar_tela('tela_login_usuario');
    }
    public function tela_cadastro_usuario()
    {
        $this->renderizar_tela('tela_cadastro_usuario');
    }
}
