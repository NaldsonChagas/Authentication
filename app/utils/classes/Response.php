<?php

namespace app\utils\classes;

class Response
{

    public static function response200($message) {
        http_response_code(200);
        echo $message;
    }

    public static function loggedUserInfo() 
    {
        echo $_SESSION['logged_user'];
    }
}
