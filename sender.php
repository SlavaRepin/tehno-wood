<?php
   $file = $_POST['file'];
   $message = $_POST['message'];
	$phone = $_POST['phone'];
   $check = $_POST['check'];
   

	$to = "revv80@mail.ru"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
	 Файл: $file /n
    Комментарий: $message /n
    Телефон: $phone /n
    Согласие: $check";
	mail($to, $subject, $msg, "From: $to");

?>

<p>Привет, форма отправлена</p>
