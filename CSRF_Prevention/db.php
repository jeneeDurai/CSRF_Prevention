<?php

    define("HOST","localhost");
	define("USER","root");
	define("PASSWORD","");
	define("DATABASE","csrf");

	$conn = mysqli_connect(HOST,USER,PASSWORD,DATABASE) or die("database in not connected"); 


?>