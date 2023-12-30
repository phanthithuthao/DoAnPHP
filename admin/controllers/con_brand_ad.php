<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
$action = Utilities::get('action', 'index');
$Brand = new brand();

if ($action == 'index') {
    $dataBrand = $Brand->getAll();
    include './views-ad/brand/index.php';
}
if ($action == 'inserthang') {
    include './views-ad/brand/insert.php';
}
if ($action == 'storehang') {
    $id = isset($_POST['DH52003760_mahang']) ? $_POST['DH52003760_mahang'] : '';
    $n = isset($_POST['DH52003760_tenhang']) ? $_POST['DH52003760_tenhang'] : '';
    $c = isset($_POST['DH52003760_quocgia']) ? $_POST['DH52003760_quocgia'] : '';
    $a = '';
    if (isset($_FILES['DH52003760_anh'])) {
        if ($_FILES['DH52003760_anh']['error'] == 0) {
            $a = $_FILES['DH52003760_anh']['name'];
            move_uploaded_file($_FILES['DH52003760_anh']['tmp_name'], "../views/image/brand/$a");
        }
    }
    $data = $Brand->insert($id, $n, $a, $c);
    if ($data == 1) {
        echo '<script> swal("Good job!", "Add Successed", "success"); </script>';
    } else {
        echo '<script> swal("Good job!", "Add Failed", "error"); </script>';
    }
    $dataBrand = $Brand->getAll();
    include './views-ad/brand/index.php';
}
if ($action == 'delete') {
    $id = Utilities::get('id');
    $sl = $Brand->countProduct($id);
    foreach ($sl as $s) {
        $m = $s['sl'];
    }
    if ($m > 0) {
        echo '<script> swal("Warning!", "Cant delete brand have product", "error"); </script>';
        $dataBrand = $Brand->getAll();
        include './views-ad/brand/index.php';
    } else {
        $n = $Brand->delete($id);
        $dataBrand = $Brand->getAll();
        include './views-ad/brand/index.php';
        if ($n == 1) {
            echo '<script> swal("Good job!", "Delete Successed", "success"); </script>';
        } else {
            echo '<script> swal("Warning!", "Delete Failed", "error"); </script>';
        }
    }
}
if ($action == 'edithang') {
    $m = Utilities::get('id');
    $dataBrand = $Brand->getById($m);
    include './views-ad/brand/update.php';
}
if ($action == 'updatehang') {

    $id = isset($_POST['DH52003760_mahang']) ? $_POST['DH52003760_mahang'] : '';

    $n = isset($_POST['DH52003760_tenhang']) ? $_POST['DH52003760_tenhang'] : '';
    $c = isset($_POST['DH52003760_quocgia']) ? $_POST['DH52003760_quocgia'] : '';
    $a = '';
    if (Utilities::file('DH52003760_anh')) {
        if ($_FILES['DH52003760_anh']['error'] == 0) {
            $a = $_FILES['DH52003760_anh']['name'];
            move_uploaded_file($_FILES['DH52003760_anh']['tmp_name'], "../views/image/brand/$a");
        }
    } else {
        $data = $Brand->getById($id);
        foreach ($data as $d) {
            $a = $d['urlImageBrand'];
        }
    }
    $data = $Brand->update($n, $a, $c, $id);
    $dataBrand = $Brand->getAll();
    include './views-ad/brand/index.php';
    if ($data == 1) {
        echo '<script> swal("Good job!", "Update Successed", "success"); </script>';
    } else {
        echo '<script> swal("Warning!", "Update Failed", "error"); </script>';
    }
}
