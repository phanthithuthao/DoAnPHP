<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
$action = Utilities::get('action', 'tologin');
$qt = new quantri();
if ($action == 'tologin') {
    include './views-ad/sign-in.php';
}
if ($action == 'login') {
    if (!isset($_SESSION)) {
        session_start();
    }

    if (isset($_POST['btndangnhap'])) {
        $ten = $_POST['DH52003760_username'];
        $pass = $_POST['DH52003760_pass'];

        $datadn = $qt->signin($ten, $pass);
        if ($datadn == 1) {
            $_SESSION['admin'] = $ten;
            echo '<script> swal ( "Nice Shot" ,  "Sign In Success" ,  "success" ) </script>';
?>
            <script>
                window.location = "index.php?controller=home";
            </script>
        <?php

        } else {
            echo '<script> swal ( "Nice Try Bro" ,  "Sign Up Failed! Please Relogin <3" ,  "error" ) </script>';
        ?>
            <script>
                window.location = "index.php?controller=login&action=tologin";
            </script>
    <?php
        }
    }
}
if ($action == 'signout') {
    $m = $qt->signOut();
    ?>
    <script>
        window.location = "index.php?controller=login&tologin";
    </script>
<?php
}
