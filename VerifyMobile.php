<?php session_start();?>
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
<?php
$number = $_POST['mobile'];
$name = $_POST['name'];
$_SESSION['num']=$number;
$_SESSION['naam']=$name;
$otpForVerification = rand(1001,9999);
echo "<h6 id='otpSent' style='display: none'>".$otpForVerification."</h6>";
$fields = array(
    "sender_id" => "SMSINI",
    "message" => "2",
    "variables_values" => "Your OTP is $otpForVerification",
    "route" => "s",
    "numbers" => "$number",
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: 3WXsIyhJckal4TD6tuoSObfEAPV0GBM8Hq7niRNUjr2epQKCzwjTYQIeSmnvoRF9wzqL4DipkB6sAaxM",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
//   echo $response;
  echo "<div class='container-fluid'>";
    echo "<h1> OTP Verification</h1><br>";
    echo "<input type='number' id='otp' class='form-control' placeholder='Enter Your OTP ' name='num'><br>";
    echo "<button id='sub' class='btn btn-primary' onclick='verify()'>Submit</button><br>";
    echo "</div>";
   
}

?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>

    function verify() {

        if($('#otp').val() == $('#otpSent').text()) {

            window.location = "mobileSuccess.php";

        } else {

            $('#wrongOTP').html('<h2>OTP entered by you is not correct. <br>Please Try Again!!!</h2><hr>');

        }

    }

</script>


</body>

</html>