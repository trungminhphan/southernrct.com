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
$mail->Body    = '<p>Full name: '.$hoten.'</p><p>Email: ' .$email .'</p><p>Subject: '.$tieude.'</p><p>'  . $noidung .'</p>';
$mail->AltBody = $noidung;
$mail->send();
$mail->ClearAddresses();

$mail->addAddress($email, $hoten);     // Add a recipient
$mail->Subject = $tieude;
$mail->Body    = '<b>Thanks for your contacts, we will reply as soon as.</b><hr />CÔNG TY HỢP DANH SOUTHERN RESEARCH<br />Address:666/34 Tran Hung Dao street, Binh Khanh ward, Long Xuyen city, An Giang province (floor 2)<br />Phone: 0763 989.101';
$mail->AltBody = 'Thanks for your contacts, we will reply as soon as..
<hr />
CÔNG TY HỢP DANH NGHIÊN CỨU - TƯ VẤN - ĐÀO TẠO PHƯƠNG NAM
Address:666/34 Tran Hung Dao street, Binh Khanh ward, Long Xuyen city, An Giang province (floor 2)
Phone: 0763 989.101';
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    require_once('header_en.php');
    echo '<div class="hentry container" role="main">';
    echo '<h3>Thanks for your contact, we will reply as soon as.</a>';
    echo '<h4><a href="contact.html">Return</a></h4>';
    echo '</div>';
    require_once('footer_en.php');
}

?>