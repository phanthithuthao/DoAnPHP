<?php
if (!defined('HOST')) exit;
class danhmuc extends db
{
    function getAll()
    {
        return $this->selectQuery('select * from listbrand');
    }
    function getLimit(){
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $row = 3;
        $from = ($page - 1) * $row;
        $sql = "select * from listbrand limit $from,$row";
        return $this->selectQuery($sql);
    }
    function getSPById($id)
    {
        $arr=[$id];
        return $this->selectQuery('select product.*, listbrand.nameBrand from product, listbrand WHERE product.idBrand=listbrand.idBrand and listbrand.idBrand=?', $arr);
    }
}
?>
