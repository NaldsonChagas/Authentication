<?php

namespace app\utils\classes;

class Response
{

    public static function response401($message) {
        http_response_code(401);
        echo $message;
    }

    public static function loggedUserInfo() 
    {
        echo $_SESSION['logged_user'];
    }
}
