<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
$action = Utilities::get('action', 'index');
$TestDrive = new testDrive();

if ($action == 'index') {
    $dataTestDrive = $TestDrive->getAll();
    include './views-ad/testdrive/index.php';
}
// if ($action == 'deletetestdrive') {
//     $id = Utilities::get('id');
//     $n = $TestDrive->delete($id);
//     $dataTestDrive = $TestDrive->getAll();
//     include './views-ad/testdrive/index.php';
//     if ($n == 1) {
//         echo '<script> swal("Good job!", "Delete Successed", "success"); </script>';
//     } else {
//         echo '<script> swal("Warning!", "Delete Failed", "error"); </script>';
//     }
// }
if ($action == 'deletetestdrive') {
    $id = Utilities::get('id');
    
    // Hiển thị hộp thoại xác nhận
    echo '<script>
            if (confirm("Bạn có chắc chắn muốn xóa?")) {
                window.location.href = "index.php?controller=testDrive&action=confirmdelete&id='.$id.'";
            }
        </script>';

    $dataTestDrive = $TestDrive->getAll();
    include './views-ad/testdrive/index.php';
}

if ($action == 'confirmdelete') {
    $id = Utilities::get('id');
    $n = $TestDrive->delete($id);
    $dataTestDrive = $TestDrive->getAll();
    include './views-ad/testdrive/index.php';
    if ($n == 1) {
        echo '<script> swal("Good job!", "Delete Successed", "success"); </script>';
    } else {
        echo '<script> swal("Warning!", "Delete Failed", "error"); </script>';
    }
}

