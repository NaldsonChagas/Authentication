<?php
require_once "app/utils/autoload_class.php";

use app\utils\classes\Response;

session_start();

Response::loggedUserInfo();