<?php
$action = Utilities::get('action', 'index');
$sanPham = new sanpham();
$product = null;



    if ($action == 'getproduct') {
        $id = Utilities::get('id');
        $product = $sanPham->getById($id);
        // if ($id != '') {
        //     $product = $cart->getCartItem($id);
        //     var_dump($product);
        // }
        include './views/cart/index.php';
    }

?>