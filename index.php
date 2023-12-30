<?php
include './config.php';
function loadClass($c)
{
    include "./class/$c.php";
}
if (!isset($_SESSION)) session_start();
spl_autoload_register('loadClass');

$controller = Utilities::get('controller', 'home');
// print_r($dataNgauNhien);
// exit;

?>

<!DOCTYPE html>
<html>

<?php
include_once './pages/header.php';
?>

<body>

    <?php
    include_once './pages/menu.php';
    ?>
    <?php
    include_once './pages/banner.php';
    ?>
    <main>
        <?php
        if ($controller == 'home') {
            include './controller/con_home.php';
        }
        if ($controller == 'sanpham') {
            include './controller/con_sanpham.php';
        }
        if ($controller == 'hang') {
            include './controller/con_hang.php';
        }
        if ($controller == 'user') {
            include './controller/con_user.php';
        }
       if ($controller == 'cart') {
            include './controller/con_cart.php';
        }
        if ($controller == 'testDriver') {
            include './controller/con_testDrive.php';
        }

        ?>
    </main>

    <?php
    include_once './pages/footer.php';
    ?>

    <?php
    include_once './pages/script.php';
    ?>
</body>

</html>