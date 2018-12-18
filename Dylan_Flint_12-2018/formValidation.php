<?php
echo 'delta alpha centauri';
$email = "";
$subject = "";
$comment = "";
$errorEmail = "";
$errorSubject = "";
$errorComment = "";

if(isset($_POST['email']))
	$email = $_POST['email'];

// Check if email is empty
if(empty($email))
{
	// Checkif the characters '@' and '.' exist in email
	if(preg_match('/@/',$email,$matchOne))
	{
		if(preg_match('/\./',$email,$matchTwo))
		{
			$errorEmail = "";
		}
		else
		{
			$errorEmail = "Must use a valid email";
		}
	}
	else
	{
		$errorEmail = "Must use a valid email.";
	}
}
if(isset($_POST['subject']))
	$subject = $_POST['subject'];

// check if subject is empty
if(empty($subject))
	$errorSubject = "Subject is required";
if(isset($_POST['comment']))
	$comment = $_POST['comment'];

// Check if comment is empty
if(empty($comment))
	$errorComment = "Message is required."
	
?>