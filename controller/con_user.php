<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
$action = Utilities::get('action', 'index');
$User = new user();
ob_start();

if ($action == 'index') {
    include './views/user/signup.php';
}
// if ($action == 'login') {
//     if (!isset($_SESSION))
//         session_start();
//     $user = isset($_POST['DH52003760_username']) ? $_POST['DH52003760_username'] : '';
//     $pass = isset($_POST['DH52003760_pass']) ? $_POST['DH52003760_pass'] : '';

//     if ($user == 'admin' && $pass == '123456') {
//         $_SESSION['admin'] = $user;
//         echo '<script> window.location.href="./admin/index.php" </script>';
//         exit;
//     } else {
//         echo '<script> swal ( "Warning" ,  "Login Failed! Please Relogin <3" ,  "error" ) </script>';
//         echo '<script> window.location.href="./index.php" </script>';
//         exit;
//     }
//     //unset($_SESSION['admin']);
// }
if ($action == 'signup') {
    if (isset($_POST['btndangky'])) {
        $tdn = $_POST['DH52003760_username'];
        $mk = $_POST['DH52003760_pass'];
        $phone = $_POST['DH52003760_phone'];
        $mail = $_POST['DH52003760_mail'];
        // echo $tdn;
        // echo $mk;
        // echo $gt;
        // exit;
        $datadk = $User->signup($tdn, $mk, $phone, $mail);
        if ($datadk == 1) {
            echo '<script> swal ( "Nice Shot" ,  "Sign Up Success" ,  "success" ) </script>';
?>
            <script>
                window.location = "index.php?controller=user&action=tosignin";
            </script>
        <?php
        } else {
            echo '<script>
                swal("Nice Try Bro", "Sign Up Failed! Please Relogin <3", "error")
            </script>';
        ?>
            <script>
                window.location = "index.php?controller=user&action=signup";
            </script>
        <?php
        }
        $sendMail = $User->sendMail($mail, $tdn);
    }
}
if ($action == 'tosignin') {
    include './views/user/signin.php';
}
if ($action == 'signin') {
    if (!isset($_SESSION)) {
        session_start();
        ob_start();
    }

    if (isset($_POST['btndangnhap'])) {
        $ten = $_POST['DH52003760_username'];
        $pass = $_POST['DH52003760_pass'];

        $datadn = $User->signin($ten, $pass);
        if ($datadn == 1) {
            $_SESSION['user'] = $ten;
            //echo '<script> swal ( "Nice Shot" ,  "Sign In Success" ,  "success" ) </script>';
        ?>
            <script>
                window.location = "index.php?controller.home";
                setTimeout(swal("Nice Shot", "Sign In Success", "success"), 5000);
            </script>
        <?php
            ob_end_flush();
        } else {
            echo '<script> swal ( "Nice Try Bro" ,  "Sign Up Failed! Please Relogin <3" ,  "error" ) </script>';
        ?>
            <script>
                window.location = "index.php?controller=user&action=tosignin"
            </script>

        <?php
        }
    }
}
if ($action == 'toadmin') {
    include './views/user/admin-signin.php';
}
if ($action == 'adminsignin') {
    if (!isset($_SESSION)) {
        session_start();
        ob_start();
    }
    if (isset($_POST['btndangnhap'])) {
        $ten = $_POST['DH52003760_username'];
        $pass = $_POST['DH52003760_pass'];

        $dataad = $User->adminSignIn($ten, $pass);
        if ($dataad == 1) {
            $_SESSION['admin'] = $ten;
            echo '<script> swal ( "Nice Shot" ,  "Sign In Success" ,  "success" ) </script>';
        ?>
            <script>
                window.location.href = "./admin/index.php";
            </script>
        <?php
        } else {
            echo '<script> swal ( "Nice Try Bro" ,  "Sign Up Failed! Please Relogin <3" ,  "error" ) </script>';
        ?>
            <script>
                window.location = "index.php?controller=user&action=toadmin"
            </script>
    <?php
        }
    }
}
if ($action == 'signout') {
    $m = $User->signOut();
    echo '<script> swal ( "Nice Shot" ,  "Sign Out Success" ,  "success" ) </script>';
    ?>
    <script>
        window.location = "index.php?controller=home";
    </script>
<?php
}
