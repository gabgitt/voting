<?php
/**
 * Created by PhpStorm.
 * User: gabriel
 * Date: 1/6/16
 * Time: 4:38 PM
 */

$fname= $_POST['fname'];
$lname = $_POST['lname'];
$username= mysql_real_escape_string($_POST['username']);
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$email = $_POST['email'];
$phone= $_POST['phone'];
$gender = $_POST['sex'];
print $username;
print $_POST['username'];
print $_POST['email'];
$key=md5($email);
echo(isset($_POST['submit']));
echo($_POST['password1']);


$mail = new MandrillEmail();
$msg='This is to notify you that your email address has been used to create an admin account with us. Kindly go through
 the verification process or ignore if your mail was used without your consent.Thank you';
if ($mail->sendEmail($fname,$email,'Welcome to eVoting',$msg)) {
    echo "sent";
}else{
    echo('not sent');
}

