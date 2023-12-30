<?php
include './config.php';
function loadClass($c)
{
    include "./class/$c.php";
}
if (!isset($_SESSION)) {
    session_start();
}
spl_autoload_register('loadClass');
if (!isset($_SESSION['admin'])) {
    include './controllers/con_login_ad.php';
    exit;
}
//unset($_SESSION['admin']);
$controller = Utilities::get('controller', 'home');


// print_r($dataNgauNhien);
// exit;

?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once './pages-ad/header-indexngoai.php';
?>

<body class="g-sidenav-show  bg-gray-200">

    <?php
    include_once './pages-ad/menu-left.php';
    ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <?php
        include_once './pages-ad/navbar-top.php';
        ?>
        <!-- End Navbar -->
        <?php
        if ($controller == 'home') {
            include_once './controllers/con_home_ad.php';
        }
        if ($controller == 'brand') {
            include_once './controllers/con_brand_ad.php';
        }
        if ($controller == 'product') {
            include_once './controllers/con_product_ad.php';
        }
        if ($controller == 'user') {
            include_once './controllers/con_user_ad.php';
        }
        if ($controller == 'testDrive') {
            include_once './controllers/con_testDrive_ad.php';
        }
        if ($controller == 'login') {
            include_once './controllers/con_login_ad.php';
        }
        ?>
        <?php
        include_once './pages-ad/footer.php';
        ?>
    </main>
    <?php
    include_once './pages-ad/script_index_ngoai.php';
    ?>
    <!--   Core JS Files   -->
    <?php
    include './pages-ad/script-last.php';
    ?>
</body>

</html>