<?php
$hoten = isset($_POST['hoten']) ? $_POST['hoten'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$tieude = isset($_POST['tieude']) ? $_POST['tieude'] : '';
$noidung = isset($_POST['noidung']) ? $_POST['noidung'] : '';

require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'pro11.emailserver.vn';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@southernrct.com';                 // SMTP username
$mail->Password = 'info789%';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->CharSet = 'UTF-8';
$mail->setFrom('info@southernrct.com', 'SouthernRCT');
$mail->addAddress('info@southernrct.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $tieude;
$mail->Body    = '<p>Họ tên: '.$hoten.'</p><p>Email: ' .$email .'</p><p>Tiêu đề: '.$tieude.'</p><p>'  . $noidung .'</p>';
$mail->AltBody = $noidung;
$mail->send();
$mail->ClearAddresses();

$mail->addAddress($email, $hoten);     // Add a recipient
$mail->Subject = $tieude;
$mail->Body    = '<b>Cám ơn Ông (Bà) đã liên hệ, chúng tôi sẽ trả lời sớm nhất.</b><hr />CÔNG TY HỢP DANH NGHIÊN CỨU - TƯ VẤN - ĐÀO TẠO PHƯƠNG NAM<br />Địa chỉ: 666/34 Trần Hưng Đạo, P. Bình Khánh Tp. Long Xuyên, An Giang (Lầu 2)<br />Điện thoại: 0763 989.101';
$mail->AltBody = 'Cám ơn Ông (Bà) đã liên hệ, chúng tôi sẽ trả lời sớm nhất.
<hr />
CÔNG TY HỢP DANH NGHIÊN CỨU - TƯ VẤN - ĐÀO TẠO PHƯƠNG NAM
Địa chỉ: 666/34 Trần Hưng Đạo, P. Bình Khánh Tp. Long Xuyên, An Giang (Lầu 2)
Điện thoại: 0763 989.101';
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	require_once('header.php');
	echo '<div class="hentry container" role="main">';
    echo '<h3>Cám ơn bạn đã liên hệ, chúng tôi sẽ trả lời sớm nhất.</a>';
    echo '<h4><a href="lien-he.html">Trở về</a></h4>';
    echo '</div>';
    require_once('footer.php');
}

?>