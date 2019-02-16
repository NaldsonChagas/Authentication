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
            Response::response401("E-mail ou senha inválidos");
            return;
        }

        $_SESSION['logged_user'] = $user->getName();
    }

    public function logout()
    {
        session_destroy();
        header("Location: index.html");
    }

    public function isUserLogged()
    {
        if (!isset($_SESSION["logged_user"])) {
            header("Location: index.html");
        }
    }
}
