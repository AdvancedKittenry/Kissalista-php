<?php 

namespace kissalista\utils;

session_start();

class Session {
    
    public static function setUser($user) {
        $_SESSION['user'] = $user;
    }
    public static function getUser() {
        if (!empty($_SESSION['user'])) {
            return $_SESSION['user'];
        }
            
        return null;
    }

    public static function ensureLogin() {
        if (empty($_SESSION['user'])) {
            redirect('login.php');
            die();
        }
    }
    
}