<?php

// tests that the username is valid
function validateUsername($username)
{
	if ($username == NULL)
	{
		return false;
	}
	
	len = strlen($username)
	if (len < 4 || len > 15)
	{
		return false;
	}
	
	if (0 == preg_match("/^[a-zA-Z_]*$/", $username))
	{
		return false;
	}
	
	// nothing is wrong
	return true;
}


// tests that the email is valid
function validateEmail($email)
{
	if ($email == NULL)
	{
		return false;
	}
	
	len = strlen($email)
	if (len > 30)
	{
		return false;
	}
	
	if (0 == preg_match("/^[a-zA-Z_]+[\@][a-zA-Z_]+$/", $email))
	{
		return false;
	}
	
	// nothing is wrong
	return true;
}

?>
