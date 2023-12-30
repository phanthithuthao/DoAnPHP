<?php
$action = Utilities::get('action', 'index');
$SP = new sanpham();
$h = new danhmuc();
if ($action == 'index') {
    $dataHang = $h->getAll();
    $dataRandom = $SP->getRandom();
    include './views/home/index.php';
}
