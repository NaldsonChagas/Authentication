<?php
require_once "app/utils/autoload_class.php";

use app\controllers\UserController;

$userController = new UserController();
$userController->logout();