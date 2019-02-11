<?php

namespace app\controllers;

use app\dao\UserDAO;

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
            echo "E-mail ou senha inválidos";
            return;
        }

        $_SESSION['logged_user'] = $user->getName();

    }

}
