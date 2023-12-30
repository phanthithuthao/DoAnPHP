<?php
if (!defined('HOST')) exit;
class product extends db
{
    function getAll()
    {
        return $this->selectQuery('select product.*, listbrand.nameBrand from listbrand, product where listbrand.idBrand=product.idBrand');
    }
    function getById($id)
    {
        $arr = [$id];
        return $this->selectQuery('select * from product where idProduct=?', $arr);
    }
    function insert($id, $n, $p, $a, $e, $hp, $se, $gb, $w, $h, $mh)
    {
        $sql = "insert into product(idProduct, nameProduct, priceProduct, urlImagePro, Engine, horsePower, seat, gearBox, width, height, idBrand) values(?,?,?,?,?,?,?,?,?,?,?)";
        $arr = [$id, $n, $p, $a, $e, $hp, $se, $gb, $w, $h, $mh];
        return $this->updateQuery($sql, $arr);
    }
    function update($n, $p, $a, $e, $hp, $se, $gb, $w, $h, $mh, $id)
    {
        $sql = "update product set nameProduct=?, priceProduct=?, urlImagePro=?, Engine=?, horsePower=?, seat=?, gearBox=?, width=?, height=?, idBrand=? where idProduct=?";
        $arr = [$n, $p, $a, $e, $hp, $se, $gb, $w, $h, $mh, $id];
        return $this->updateQuery($sql, $arr);
    }
    function delete($id)
    {
        return $this->updateQuery('delete from product where idProduct=?', [$id]);
    }
}
