<?php
if (!defined('HOST')) exit;
class user extends db
{
    function getAll()
    {
        return $this->selectQuery('select * from user');
    }
    function getById($id)
    {
        $arr = [$id];
        return $this->selectQuery("select * from user where idUser=?", $arr);
    }
    function insert($u, $p, $phone, $mail)
    {
        $sql = "insert into user(userName, pass, phoneUser, emailUser, role) values(?,?,?,?,1)";
        $arr = [$u, $p, $phone, $mail];
        return $this->updateQuery($sql, $arr);
    }
    function delete($id)
    {
        return $this->updateQuery('delete from user where idUser=?', [$id]);
    }
}
