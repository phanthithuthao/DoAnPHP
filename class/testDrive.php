<?php
if (!defined('HOST')) exit;

class testDrive extends db
{
    private $db;

    public function registerTestDrive($name, $email, $phone, $carType, $time, $location, $dob, $gender,$date)
    {
        $sql = "INSERT INTO test_drives (name, email, phone, car_type, time, location, dob, gender, ngay) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $arr = [$name, $email, $phone, $carType, $time, $location, $dob, $gender, $date];
        return $this->updateQuery($sql, $arr);
    }

    function getByPhone($phone)
    {
        $arr = [$phone];
        return $this->selectQuery("SELECT * FROM test_drives WHERE phone=?", $arr);
    }
    function sendMail($email, $hoTen, $information)
    {
        require "PHPMailer-master/src/PHPMailer.php";
        require "PHPMailer-master/src/SMTP.php";
        require 'PHPMailer-master/src/Exception.php';
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        try {
            // Cấu hình SMTP và thông tin người gửi
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->CharSet = "utf-8";
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'trangthuy1061@gmail.com';
            $mail->Password = 'iiyajbebifewxqrz';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('trangthuy1061@gmail.com', 'ThuyTrang_D20_TH05');

            // Thêm người nhận và định dạng email là HTML
            $mail->addAddress($email, $hoTen);
            $mail->isHTML(true);

            // Tạo nội dung email với bảng thông tin
            $noidungthu = '<h5 style="text-align: center;">Bạn đã đăng ký Lái thử xe thành công tại <a href="https://kristdh52003760.000webhostapp.com/"> website</a></h5>';
            $noidungthu .= '<table style="width: 100%; border-collapse: collapse;">';
            $noidungthu .= '<thead>';
            $noidungthu .= '<tr>';
            $noidungthu .= '<th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; background-color: #f2f2f2;">Tên</th>';
            $noidungthu .= '<th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; background-color: #f2f2f2;">Email</th>';
            $noidungthu .= '<th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; background-color: #f2f2f2;">Số điện thoại</th>';
            $noidungthu .= '<th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; background-color: #f2f2f2;">Loại xe muốn lái thử</th>';
            $noidungthu .= '<th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; background-color: #f2f2f2;">Thời gian lái thử</th>';
            $noidungthu .= '<th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; background-color: #f2f2f2;">Ngày lái thử</th>';
            $noidungthu .= '<th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; background-color: #f2f2f2;">Địa điểm lái thử</th>';
            $noidungthu .= '<th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; background-color: #f2f2f2;">Ngày sinh</th>';
            $noidungthu .= '<th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; background-color: #f2f2f2;">Giới tính</th>';
            $noidungthu .= '</tr>';
            $noidungthu .= '</thead>';
            $noidungthu .= '<tbody>';
            $noidungthu .= '<tr>';
            $noidungthu .= '<td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd;">' .$information['name'] . '</td>';
            $noidungthu .= '<td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd;">' . $information['email'] . '</td>';
            $noidungthu .= '<td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd;">' . $information['phone'] . '</td>';
            $noidungthu .= '<td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd;">' . $information['carType'] . '</td>';
            $noidungthu .= '<td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd;">' . $information['time'] . '</td>';
            $noidungthu .= '<td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd;">' . $information['date'] . '</td>';
            $noidungthu .= '<td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd;">' . $information['location'] . '</td>';
            $noidungthu .= '<td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd;">' . $information['dob'] . '</td>';
            $noidungthu .= '<td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd;">' . $information['gender'] . '</td>';
            $noidungthu .= '</tr>';
            $noidungthu .= '</tbody>';
            $noidungthu .= '</table>';
            // $noidungthu .= '<a href="https://kristdh52003760.000webhostapp.com/">Visit Me !! Come onnnnn</a></p>';

            $mail->Subject = 'THƯ THÔNG BÁO ĐĂNG KÝ LÁI THỬ THÀNH CÔNG';
            $mail->Body = $noidungthu;

            // Gửi email
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
}
