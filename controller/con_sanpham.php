<?php
$action = Utilities::get('action', 'index');
$sanPham = new sanpham();
$hang = new danhmuc();

if ($action == 'getAll') {
    $dataXe = $sanPham->getAll();
    $dataSP = $sanPham->getAllSP();
    $dataHang = $hang->getAll();
    include './views/xe/index.php';
}
if ($action == 'getID') {
    $id = Utilities::get('id');
    $dataById = $sanPham->getById($id);
    // print_r($dataById);
    // exit;
    include './views/xe/car-details.php';
}
if ($action == 'search') {
    $kw = Utilities::get('DH52003760_kw');
    $dataTK = $sanPham->search($kw);
    // print_r($dataTK);
    include './views/xe/search.php';
}
