
<?php
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoloader
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

function sendEmail() {
    $username = 'ishikapawar578@gmail.com'; // Replace with your email address
    $password = 'mgglnvynqprstfxv'; // Replace with your email password
    $toEmail = 'nitindube227@gmail.com'; // Assuming you receive 'toEmail' and 'message' through POST request
    $message = "hyyy";
    $mail = new PHPMailer(true);

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
                      "<tr><td>To Email</td><td>done</td></tr>" .
                      "<tr><td>Message</td><td>yhhhhhhh</td></tr></table>";

        $mail->send();
        echo "Email sent successfully!";
    } catch (Exception $e) {
        echo "Error occurred while sending email: " . $mail->ErrorInfo;
    }
}

// Call the function to send email
sendEmail();
?>
