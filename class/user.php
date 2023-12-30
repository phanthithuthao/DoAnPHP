<?php
if (!defined('HOST')) exit;
class user extends db
{
    protected $user;
    protected $role;
    function getAccount()
    {
        return $this->selectQuery('select userName, pass from user');
    }
    function signup($u, $p, $ph, $e)
    {
        $r = 0;
        $sql = "insert into user(userName, pass, phoneUser, emailUser, role) values(?,?,?,?,$r)";
        $arr = [$u, $p, $ph, $e];
        return $this->updateQuery($sql, $arr);
    }
    function sendMail($emaill, $hoTen)
    {
        require "PHPMailer-master/src/PHPMailer.php";
        require "PHPMailer-master/src/SMTP.php";
        require 'PHPMailer-master/src/Exception.php';
        $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
        try {
            $mail->SMTPDebug = 0; //0,1,2: chế độ debug. khi chạy ngon thì chỉnh lại 0 nhé
            $mail->isSMTP();
            $mail->CharSet  = "utf-8";
            $mail->Host = 'smtp.gmail.com';  //SMTP servers
            $mail->SMTPAuth = true; // Enable authentication
            $mail->Username = 'phanthithuthao0204@gmail.com'; // SMTP username
            $mail->Password = 'xlsdbijkqxlruesr';   // SMTP password
            $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
            $mail->Port = 465;  // port to connect to                
            $mail->setFrom('phanthithuthao0204@gmail.com', 'Thao_D20_TH05');
            $mail->addAddress($emaill, $hoTen); //mail và tên người nhận  
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = 'THƯ THÔNG BÁO ĐĂNG KÝ TÀI KHOẢN THÀNH CÔNG';
            $noidungthu = '<h5>Bạn đã đăng ký tài khoản thành công tại website </h5> <p><a href="https://kristdh52003760.000webhostapp.com/">Visit Me !! Come onnnnn</a></p>';
            $mail->Body = $noidungthu;
            $mail->smtpConnect(array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            $mail->send();
            echo 'Đã gửi mail xong';
        } catch (Exception $e) {
            echo 'Error: ', $mail->ErrorInfo;
        }
    }
    function signin($t, $p)
    {
        $sql = "select * from user where userName=? and pass=?";
        $arr = [$t, $p];
        return $this->updateQuery($sql, $arr);
    }
    function adminSignIn($t, $p)
    {
        $sql = "select * from user where userName=? and pass=? and role=1";
        $arr = [$t, $p];
        return $this->updateQuery($sql, $arr);
    }
    function isSignin()
    {
        if (isset($_SESSION['user'])) {
            $u = $_SESSION['user'];
            //$this->user = $u['userName'];
            return true;
        }
        return false;
    }
    function signOut()
    {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            return true;
        }
        return false;
    }
}
