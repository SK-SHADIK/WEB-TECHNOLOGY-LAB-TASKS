<?php

session_start();
if(isset($_SESSION['uname'])){
    header('location:PROFILE.php');
}
if(isset($_POST['submit'])){
    $user= $_POST['uname'];
    $pass= $_POST['pass'];

    $_SESSION['uname'] = $user;
    $_SESSION['Pass'] = $pass;
    header('location:PROFILE.php');

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
<div>
<div>
    <?php include 'nav.php';?>
</div>
<div>
    <h1>LOGIN PAGE</h1>
    <hr>
</div>
    <form method="post"> 
    <fieldset>
    <legend><p>LOGIN FORM</p></legend> 
    <label for="uname">USER NAME:</label>
    <input type="text" id="uname" name="uname" required=""><br><br>
    <label for="pass">PASSWORD:</label>
    <input type="password" id="pass" name="pass" required=""><br>
    <hr> 
       <input type="submit" name="submit" value="LOGIN">
    <a href="#">Forget password...?</a>
    </fieldset>
    </form>
    
</div>
</body>
</html>