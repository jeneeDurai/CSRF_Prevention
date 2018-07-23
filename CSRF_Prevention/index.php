<?php
    session_start();

    $rand = rand();

    $_SESSION['csrf'] = $rand;
?>


<form method="post" action  = "save_user.php">

username : <input type = "text" name = "uname" /></br>
password : <input type = "text" name = "pwd"/> </br>

<input type="hidden" name ="_token" value="<?php echo $rand?>"?/>

<input type = "submit" name ="submit" value="Add new user"/>

</form>