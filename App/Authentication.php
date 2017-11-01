<?php

namespace App;

class Authentication
{
    public static function login()
    {
        session_regenerate_id(true);
        $_SESSION['user_id'] = 44;
    }

    public static function logout()
    {
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
    }

}
