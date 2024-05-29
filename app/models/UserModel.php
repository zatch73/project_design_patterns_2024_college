<?php

namespace app\models;

class UserModel
{
    private $id;
    private $username;
    private $email;
    private $password;
    private $superUser;

    public function __construct($id = null, $username = null, $email = null, $password = null, $superUser =null)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->superUser = $superUser;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getSuperUser()
    {
        return $this->superUser;
    }
    public function setSuperUser($superUser)
    {
        $this->superUser = $superUser;
    }

    public function toArray() {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
            'superUser' => $this->superUser
        ];
    }
}
