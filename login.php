<?php
require_once "app/utils/autoload_class.php";

use app\models\User;
use app\controllers\UserController;
use app\utils\classes\Response;

$email = $_POST['email'];
$password = $_POST['password'];

$user = new User($email, $password);
$userController = new UserController();
$userController->auth($user);