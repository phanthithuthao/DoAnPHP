<?php
if (!defined('HOST')) exit;
class sanpham extends db
{
    function getRandom()
    {
        return $this->selectQuery('select product.*, listbrand.nameBrand from listbrand, product where listbrand.idBrand=product.idBrand order by rand() limit 3');
    }
    function getAllSP()
    {
        return $this->selectQuery('select product.*, listbrand.nameBrand from listbrand, product where listbrand.idBrand=product.idBrand');
    }
    function getAll()
    {
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $row = 6;
        $from = ($page - 1) * $row;
        $sql = "select product.*, listbrand.nameBrand from listbrand, product where listbrand.idBrand=product.idBrand order by idProduct limit $from,$row";
        return $this->selectQuery($sql);
    }
    function getById($id)
    {
        $arr = [$id];
        $sql= "select product.*, listbrand.nameBrand from listbrand, product where listbrand.idBrand=product.idBrand and idProduct=?";
        return $this->selectQuery($sql, $arr);
    }
    function search($DH51800467_kw)
    {
        $sql = "select product.*, listbrand.nameBrand from listbrand, product where listbrand.idBrand=product.idBrand and nameProduct like ?";
        $arr = ["%$DH51800467_kw%"];
        return $this->selectQuery($sql, $arr);
    }
}
