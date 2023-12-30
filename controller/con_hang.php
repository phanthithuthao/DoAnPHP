<?php
$action = Utilities::get('action', 'index');
$h = new danhmuc();
if ($action == 'getAll') {
    $dataAll = $h->getAll();
    $dataLimit = $h->getLimit();
    include './views/danhmuc/index.php';
}
if ($action == 'getspbyid') {
    $id = Utilities::get('id');
    $dataId = $h->getSPById($id);
    include './views/danhmuc/dm-detail.php';
}

