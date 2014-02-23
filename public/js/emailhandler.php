<?php

function CleanData($data)
{
	if (get_magic_quotes_gpc()) {
		$data = stripslashes($data);
	}
		$data = str_replace("\n", '', trim($data));
		$data = str_replace("\r", '', $data);
		return $data;

}

if (!isset($_POST['subject']) || empty($_POST['subject'])){
	$subject = "Feedback from Website";
}
else {
	$subject = CleanData($_POST['subject']);
}


$name = CleanData($_POST['name']);
$email = CleanData($_POST['email']);
$message = CleanData($_POST['message']);

$nameregex = '/^[a-zA-Z0-9\-]+$/';
$emailregex = '/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-Z0-9]{2,4}$/';

if (empty($name) || empty($email) || empty($message) || (preg_match($nameregex, $name) == 0) || (preg_match($emailregex, $email) == 0))
{
	header("Location: ../error/");
	die;
}
else
{

	$toaddress = "postmaster@starlearningsystems.com";	

	$mailcontent = $message."\n";

	$fromaddress = "From: ".$name."<".$email.">";

	mail($toaddress, $subject, $mailcontent, $fromaddress);

	header("Location: ../contact/");
	die;
}
?>
