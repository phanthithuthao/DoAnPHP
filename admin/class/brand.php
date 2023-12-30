<?php
if (!defined('HOST')) exit;
class brand extends db
{
    function getAll()
    {
        return $this->selectQuery('select * from listbrand');
    }
    function getById($id)
    {
        $arr = [$id];
        return $this->selectQuery('select * from listbrand where idBrand=?', $arr);
    }
    function insert($id, $n, $a, $c)
    {
        return $this->updateQuery('insert into listbrand(idBrand, nameBrand, urlImageBrand, country) values(?,?,?,?)', [$id, $n, $a, $c]);
    }
    function delete($id)
    {
        return $this->updateQuery('delete from listbrand where idBrand=?', [$id]);
    }
    function update($n, $a, $c, $id)
    {
        return $this->updateQuery('update listbrand set nameBrand=?, urlImageBrand=?, country=? where idBrand=?', [$n, $a, $c, $id]);
    }
    function countProduct($id)
    {
        return $this->selectQuery("select COUNT(idProduct) as 'sl' from product WHERE idBrand=? ORDER by idBrand", [$id]);
    }
}
