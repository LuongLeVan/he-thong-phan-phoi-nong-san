<?php 
	
	class cMailer{
		function sendmail($mailnguoinhan, $tennguoinhan, $noidung){
	
			include "guimail/vendor/PHPMailer-6.2.0/src/PHPMailer.php";
			include "guimail/vendor/PHPMailer-6.2.0/src/Exception.php";
			include "guimail/vendor/PHPMailer-6.2.0/src/OAuth.php";
			include "guimail/vendor/PHPMailer-6.2.0/src/POP3.php";
			include "guimail/vendor/PHPMailer-6.2.0/src/SMTP.php";
			//use PHPMailer\PHPMailer\PHPMailer;
			//use PHPMailer\PHPMailer\Exception;

			$mail = new PHPMailer\PHPMailer\PHPMailer(true);                              // Passing `true` enables exceptions
			//print_r($mail);
			try {
				//Server settings
				$mail->SMTPDebug = 0;                                 // Enable verbose debug output
				$mail->isSMTP();
				$mail->CharSet  = "utf-8";                                      // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = 'nongsansachvietnam.create@gmail.com';                 // SMTP username
				$mail->Password = 'uwrmownptylugmjh';                           // SMTP password
				$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;                                    // TCP port to connect to
			
				//Recipients
				$mail->setFrom('nongsansachvietnam.create@gmail.com', 'Nông sản sạch Việt Nam');
				$mail->addAddress($mailnguoinhan, $tennguoinhan);   
				//Add a recipient
				//$mail->addAddress('ellen@example.com');               // Name is optional
				//$mail->addReplyTo('info@example.com', 'Information');
				//$mail->addCC('cc@example.com');
				//$mail->addBCC('bcc@example.com');
			
				//Attachments
				//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
				//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
			
				//Content
				$mail->isHTML(true);                                  // Set email format to HTML
				$mail->Subject = 'Đặt hàng thành công';
				$mail->Body    = '<div style="color:red;">'.$noidung.'</div>';
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			
				$mail->send();
				echo 'Thông tin đơn hàng đã được gửi đến mail của bạn';
			} catch (Exception $e) {
				echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			}
		}
	
}
	 
	

 ?>