<?php
$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];
// 메세지
$headers = 'From: '.$email . "\r\n" .
'Reply-To: fjvbn2003@gmail.com';
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("fjvbn2003@naver.com","My subject",$msg,$headers);
?>
