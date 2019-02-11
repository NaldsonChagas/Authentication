<?php

namespace app\models;

class User
{

    private $name;
    private $email;
    private $password;

    public function __construct($email, $password)
    {

        $this->email = $email;
        $this->password = $password;

    }

}
