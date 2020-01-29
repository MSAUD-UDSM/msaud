<?php 

// //Taking all values
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];
$output = "Name: " . $fname . "\nPhone: " . $phone . "\nMessage: " . $msg;

$to = 'msaud.udsm@gmail.com';
$headers = 'FROM: ' . $email . '';

$send = mail($to, $fname, $output . "\n\n***This message has been sent from MSAUD Website ", $headers);

if ($send) {

    header("Location: https://msaud-udsm.github.io/msaud/index.html");
    echo "successfully";
    exit();

} else {
    echo "still loading have patience........";
}
?>