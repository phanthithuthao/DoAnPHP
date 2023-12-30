<?php
if (!defined('HOST')) exit;
class quantri extends db
{
    function isSignin()
    {
        if (isset($_SESSION['admin'])) {
            $u = $_SESSION['admin'];
            //$this->user = $u['userName'];
            return true;
        }
        return false;
    }
    function signin($t, $p)
    { {
            $sql = "select * from user where userName=? and pass=? and role=1";
            $arr = [$t, $p];
            return $this->updateQuery($sql, $arr);
        }
    }
    function signOut()
    {
        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
            return true;
        }
        return false;
    }
}
