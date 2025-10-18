<?php
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $title = $_POST['title'];
  $message = $_POST['message'];

  require_once "PHPMailer/PHPMailer.php";
  require_once "PHPMailer/SMTP.php";
  require_once "PHPMailer/Exception.php";

  $mail = new PHPMailer();

  $mail-> isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "testmywebsitebilal@gmail.com";
  $mail->Password = 'Bilal*1234';
  $mail->Port = 465;
  $mail->SMTPSecure = "ssl";

  $mail->isHTML(true);
  $mail->setFrom($email, $name);
  $mail->addAddress("testmywebsitebilal@gmail.com");
  $mail->Title = ("$email ($title)");
  $mail->Message = $message;

  if($mail->send()){
    $status = "success";
    $response = "Email is sent";
  }
  else
  {
    $status = "failed";
    $response = "Something is wrong: <br>" . $mail->ErrorInfo;
  }

  exit(json_encode(array("status" => $status, "response" => $response)));
}
 ?>
