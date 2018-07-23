<?php
    session_start();
    include("db.php");


    if(isset($_POST['_token']) && $_POST['_token'] == $_SESSION['csrf'])
    {
        if($_POST && isset($_POST['uname']) && isset($_POST['pwd']))
        {
            $uname= $_POST['uname'];
            $pwd = $_POST['pwd'];


            $queryString = "insert into users (UserName,PassWord) values ('$uname','$pwd')";

            $query = mysqli_query($conn,$queryString) or die("Error on storing");

            if($query==1)
            {
                readfile("home.php");
            }
            else{
                readfile("error.php");
            }
        }
    }
    else{
        echo "Invalid data";
    }


?>