<?php

namespace app\controllers;

use app\dao\UserDAO;
use app\utils\classes\Response;

session_start();

class UserController
{
    private $dao;

    public function __construct()
    {
        $this->dao = new UserDAO();
    }

    public function auth($user)
    {
        $user = $this->dao->auth($user);

        if ($user->getEmail() == null) {
            Response::response200("E-mail ou senha inválidos");
            return;
        }

        $_SESSION['logged_user'] = $user->getName();

    }

}
