<?php
require_once "app/utils/autoload_class.php";

use app\models\User;

$email = $_POST['email'];
$password = $_POST['email'];

$user = new User($email, $password);