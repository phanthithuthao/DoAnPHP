<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
$action = Utilities::get('action', 'index');
$Product = new product();
$Brand = new brand();

if ($action == 'index') {
    $dataSP = $Product->getAll();
    include './views-ad/product/index.php';
}
if ($action == 'insertsp') {
    $dataHang = $Brand->getAll();
    include './views-ad/product/insert.php';
}
if ($action == 'storesp') {
    $id = isset($_POST['DH52003760_maxe']) ? $_POST['DH52003760_maxe'] : '';
    $n = isset($_POST['DH52003760_tenxe']) ? $_POST['DH52003760_tenxe'] : '';
    $p = isset($_POST['DH52003760_giaxe']) ? $_POST['DH52003760_giaxe'] : 0;
    $e = isset($_POST['DH52003760_dcxe']) ? $_POST['DH52003760_dcxe'] : '';
    $hp = isset($_POST['DH52003760_mlxe']) ? $_POST['DH52003760_mlxe'] : '';
    $se = isset($_POST['DH52003760_cho']) ? $_POST['DH52003760_cho'] : '';
    $gb = isset($_POST['DH52003760_hopso']) ? $_POST['DH52003760_hopso'] : '';
    $w = isset($_POST['DH52003760_cr']) ? $_POST['DH52003760_cr'] : 0;
    $h = isset($_POST['DH52003760_cc']) ? $_POST['DH52003760_cc'] : 0;
    $mh = isset($_POST['DH52003760_mahang']) ? $_POST['DH52003760_mahang'] : "";
    $a = '';
    if (Utilities::file('DH52003760_anh')) {
        if ($_FILES['DH52003760_anh']['error'] == 0) {
            $a = $_FILES['DH52003760_anh']['name'];
            move_uploaded_file($_FILES['DH52003760_anh']['tmp_name'], "../views/image/product/$a");
        }
    }
    $data = $Product->insert($id, $n, $p, $a, $e, $hp, $se, $gb, $w, $h, $mh);
    if ($data == 1) {
        echo '<script> swal("Good job!", "Add Successed", "success"); </script>';
    } else {
        echo '<script> swal("Good job!", "Add Failed", "error"); </script>';
    }
    $dataSP = $Product->getAll();
    include './views-ad/product/index.php';
}
if ($action == 'delete') {
    $ma = Utilities::get('id');
    $n = $Product->delete($ma);
    $dataSP = $Product->getAll();
    if ($n == 1) {
        echo '<script> swal("Good job!", "Delete Successed", "success"); </script>';
    } else {
        echo '<script> swal("Warning!", "Delete Failed", "error"); </script>';
    }
    include './views-ad/product/index.php';
}
if ($action == 'editsp') {
    $m = Utilities::get('id');
    $dataSP = $Product->getById($m);
    $dataHang = $Brand->getAll();
    include './views-ad/product/update.php';
}
if ($action == 'updatesp') {
    $id = isset($_POST['DH52003760_maxe']) ? $_POST['DH52003760_maxe'] : '';
    $n = isset($_POST['DH52003760_tenxe']) ? $_POST['DH52003760_tenxe'] : '';
    $p = isset($_POST['DH52003760_giaxe']) ? $_POST['DH52003760_giaxe'] : 0;
    $e = isset($_POST['DH52003760_dcxe']) ? $_POST['DH52003760_dcxe'] : '';
    $hp = isset($_POST['DH52003760_mlxe']) ? $_POST['DH52003760_mlxe'] : '';
    $se = isset($_POST['DH52003760_cho']) ? $_POST['DH52003760_cho'] : '';
    $gb = isset($_POST['DH52003760_hopso']) ? $_POST['DH52003760_hopso'] : '';
    $w = isset($_POST['DH52003760_cr']) ? $_POST['DH52003760_cr'] : 0;
    $h = isset($_POST['DH52003760_cc']) ? $_POST['DH52003760_cc'] : 0;
    $mh = isset($_POST['DH52003760_mahang']) ? $_POST['DH52003760_mahang'] : "";
    $a = '';
    if (Utilities::file('DH52003760_anh') && $_FILES['DH52003760_anh']['error'] == 0) {
        $uploadedFile = $_FILES['DH52003760_anh'];
        $fileInfo = pathinfo($uploadedFile['name']);
        $fileExtension = strtolower($fileInfo['extension']);

        // Kiểm tra xem tệp có phải là hình ảnh hay không
        $imageInfo = getimagesize($uploadedFile['tmp_name']);
        if ($imageInfo !== false) {
            // Nếu là hình ảnh, tiếp tục xử lý
            $a = $uploadedFile['name'];
            move_uploaded_file($uploadedFile['tmp_name'], "../views/image/product/$a");
        }
    } else {
        $data = $Product->getById($id);
        foreach ($data as $d) {
            $a = $d['urlImagePro'];
        }
    }

    $data = $Product->update($n, $p, $a, $e, $hp, $se, $gb, $w, $h, $mh, $id);
    $dataSP = $Product->getAll();
    include './views-ad/product/index.php';
    if ($data == 1) {
        echo '<script> swal("Good job!", "Cập nhật thành công", "success"); </script>';
    } else {
        echo '<script> swal("Warning!", "Cập nhật thất bại", "error"); </script>';
    }
}
