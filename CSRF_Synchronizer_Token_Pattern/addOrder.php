<?php
require_once 'csrf_token.php';
$csrf_value = $_POST["csrf_token"];


if(isset($_POST['itemName']) && $_POST['itemName'] !=null && isset($_POST['quantity']) && $_POST['quantity']!=null)
{
    if(csrf_token::check_csrf_token($csrf_value,$_COOKIE['csrf_cookie']))
    {
            
        readfile("success.html");
    }
	else
	{
        readfile("error.html");
	}
}

?>