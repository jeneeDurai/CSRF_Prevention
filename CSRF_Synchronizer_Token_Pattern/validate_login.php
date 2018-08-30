<?php

	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$uname=$_POST['username'];
		$psw=$_POST['password'];

		if (($uname=='root') && ($psw=='root'))
		{	
            readfile("home.php");
		}

		else
		{
			echo "INVALID LOGIN. PLEASE TRY AGAIN.";
			exit();
		}

	}

?>
