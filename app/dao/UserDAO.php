<?php

namespace app\dao;

use app\config\Connection;
use app\models\User;

class UserDAO
{

    private $connection;

    public function __construct()
    {
        $this->connection = Connection::getConnection();
    }

    public function auth($user)
    {
        $userData;

        try {
            $query = "SELECT * FROM users WHERE email = :email and password = md5(:password)";
            $statement = $this->connection->prepare($query);

            $statement->bindValue(":email", $user->getEmail());
            $statement->bindValue(":password", $user->getPassword());

            $statement->execute();
            $result = $statement->fetch(\PDO::FETCH_ASSOC);

            $userData = new User($result['email'], $result['password']);
            $userData->setName($result['name']);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $userData;

    }
}
