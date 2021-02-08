<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <style>

    body {

        background-color: bisque;

    }

    h1, h2 {

        text-align: center;
        color: brown;

    }

    </style>

    <title>OTP Verification</title>
    
</head>
<body>

<h1 id="wrongOTP"></h1>

<?php

use PHPMailer\PHPMailer\PHPMailer;

    class Student {

        public $name;
        public $email;

        public function Registration($name, $email) {

            $this->name = $name; 
            $this->email = $email;
            $arr = [$this->name, $this->email];
            return $arr;

    }

}


$res = new Student();
$res1 = $res->Registration($_POST['name'], $_POST['email']);


$name = $_POST['name'];
$email = $_POST['email'];
$_SESSION['name']=$name;
$_SESSION['email']=$email;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "satyamtiwari1598@gmail.com";
$mail->Password = "yourPassword";
$mail->Port = 465;
$mail->SMTPSecure = "ssl";
$otpForVerification = rand(1001,9999);

$mail->isHTML(true);
$mail->setFrom($email, $name);
$mail->addAddress($email);
$mail->Subject = ("$email");
$mail->Body = 'Your OTP for Verification is: '.$otpForVerification;

echo "<h6 id='otpSent' style='display: none'>".$otpForVerification."</h6>";


if($mail->send()) {

    echo "<div class='container-fluid'>";
    echo "<h1> OTP Verification</h1><br>";
    echo "<input type='number' id='otp' class='form-control' placeholder='Enter Your OTP ' name='num'><br>";
    echo "<button id='sub' class='btn btn-primary' onclick='verify()'>Submit</button><br>";
    echo "</div>";
   

} else {

    echo "<h1>Error 404 </h1>";

}



?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>

    function verify() {

        if($('#otp').val() == $('#otpSent').text()) {

            window.location = "emailSuccess.php";

        } else {

            $('#wrongOTP').html('<h2>OTP entered by you is not correct. <br>Please Try Again!!!</h2><hr>');

        }

    }

</script>

</body>

</html>

