 <?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if (isset($_POST['submit'])) {

    $name = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'webload101@gmail.com';
        $mail->Password = 'kqthjjxpueioycyg';
        $mail->SMTPSecure = "tls";
        $mail->Port = '587';

        $mail->setFrom('webload101@gmail.com');
        $mail->addAddress('webload101@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Message Recevied from Contact:'. $name;
        $mail->Body = "Name: " . $name . "<br>Email: " . $email . "<br>Phone: " . $phone .  "<br>Subject: " . $subject . "<br>Message" . $message;

        $mail->send();
        $alert = "<div class='alert-success'><span>Message Sent! Thanks for contact us.</span></div>";

    } catch (Exception $e) {
        $alert = "<div class='alert-error'><span>".$e->getMessage()."</span></div>";
    }
}