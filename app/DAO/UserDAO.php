<?php

namespace app\DAO;

use app\models\UserModel;

class UserDAO
{

    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function getUserByEmail($user)
    {
        $email = $user->getEmail();
        $password = $user->getPassword();
        $query = "SELECT * FROM users WHERE email = :email AND pass_hash = :pass";
        $result = $this->db->prepare($query);
        $result->bindParam(':email', $email);
        $result->bindParam(':pass', $password);

        $result->execute();
        $obj = null;
        if ($result->rowCount() > 0) {
            foreach ($result->fetchAll(\PDO::FETCH_OBJ) as $key => $obResult) {
                $obj = new UserModel();
                $obj->setId($obResult->id);
                $obj->setEmail($obResult->email);
                $obj->setPassword($obResult->pass_hash);
                $obj->setSuperUser((bool) $obResult->superUser);
            }
        }
        return $obj;
    }
}
