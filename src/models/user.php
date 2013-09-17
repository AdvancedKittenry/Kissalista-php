<?php

namespace kissalista\models;

class User {
    
    private $username;
    private $realname;
    
    public function __construct($username, $realname) {
        $this->username = $username;
        $this->realname = $realname;
    }
    
    public function getUsername() {
        return $this->username;
    }
    public function getRealname() {
        return $this->realname;
    }
    public function setUsername($username) {
        $this->username = $username;
    }
    public function setRealname($realname) {
        $this->realname = $realname;
    }
    
    public static function getUser($username, $password) {
        if ($username == "admin" && $password == "1234") {
            return new self($username, "David Consuegra");
        }
        return null;
    }
    
}