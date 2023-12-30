<?php
session_start();
include_once '../../includes/db.inc.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$sql = "SELECT * FROM studentlogin";

$result = mysqli_query($conn, $sql);
// Include PHPMailer autoloader
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';
if (isset($_POST['post'])) {

	$username = 'ishikapawar578@gmail.com'; // Replace with your email address
	$password = 'ffeb vwfu emii ndjq'; // Replace with your email password

	if ($result) {

		$mail = new PHPMailer(true);
		$message = $_POST['message'];
		$user = $_SESSION['username'];

		// Check if any rows are returned
		if (mysqli_num_rows($result) > 0) {

			while ($row = mysqli_fetch_assoc($result)) {
				$toEmail = $row['email']; // Assuming you receive 'toEmail' and 'message' through POST request

				try {
					// SMTP configuration
					$mail->isSMTP();
					$mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server address (e.g., for Gmail, use smtp.gmail.com)
					$mail->SMTPAuth = true;
					$mail->Username = $username;
					$mail->Password = $password;
					$mail->SMTPSecure = 'tls';
					$mail->Port = 587; // Replace with your SMTP server's port number

					// Email content
					$mail->setFrom($username);
					$mail->addAddress($toEmail);
					$mail->isHTML(true);
					$mail->Subject = 'Subject of Email';
					$mail->Body = "<h1>Email Content</h1><table border='1'><tr><th>Field</th><th>Value</th></tr>" .
						"<tr><td>Message</td><td>" . $_POST["message"] . "</td></tr>" .
						"</table>";

					$mail->send();
					echo "Email sent successfully!";
				} catch (Exception $e) {
					echo "Error occurred while sending email: " . $mail->ErrorInfo;
				}

			}

			$sql = "insert into feed (user, message, date, time) values('$user', '$message', curdate(), curtime());";
			$res = mysqli_query($conn, $sql);

		}

	}

	if (!$res) {
		header("Location: ../index.php?result=fail");
	} else {
		header("Location: ../index.php?result=success");
	}
}
