<?php
class quantri extends db
{
    protected $user;
    protected $role;

    function isLogin()
    {
        if (isset($_SESSION['quantri'])) {
            $u = $_SESSION['quantri'];
            $this->user = $u['userName'];
            $this->role = $u['role'];
            return true;
        }
        return false;
    }

    function login($u, $p)
    {
        $p = Utilities::encryption($p);
        $sql = 'select userName, role from user where userName=? and pass=?';
        $arr = [$u, $p];
        $data = $this->selectQuery($sql, $arr);
        if (count($data) > 0) {
            $_SESSION['quantri'] = $data[0];
            return true;
        }
        return false;
    }
}
