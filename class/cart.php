<?php
class Cart extends db
{
    private $cart;
    private $count;

    function __construct()
    {
        $this->cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
        $this->count = count($this->cart);
    }
    function __destruct()
    {
        $_SESSION['cart'] = $this->cart;
        print_r($this->cart);
    }
    
    function them($ma, $soLuong)
    {
        if (isset($this->cart[$ma])) {
            $this->cart[$ma] += $soLuong;
        } else {
            $this->cart[$ma] = $soLuong;
        }
    }
    function xoa($ma)
    {
        unset($this->cart[$ma]);
    }
    function get()
    {
        $data = [];
        $sp = new sanpham();
        foreach ($this->cart as $ma => $qty) {
            $row = $sp->getById($ma);
            if (count($row) > 0) {
                $row['soluong'] = $qty;
                $row['idProduct'] = $ma;

                $data[] = $row;
            }
        }
        return $data;
    }
    function getCartItem($ma)
    {
        $sp = new sanpham();
        $row = $sp->getById($ma);
        if (count($row) > 0) {
            // $row['soluong'] = $this->cart[$ma];
            $row['idProduct'] = $ma;
            return $row;
        }
        return null;
     
    }
}
