<?php
if(isset($_POST['postt'])){
    $postt= $_POST['post'];

    session_start();
    $_SESSION['postt'] = $postt;

    header('location:HOME.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
<div>
    <?php include 'NAV.php';?>
</div>
<div>
    <h1>POST PAGE</h1>
    <hr>
</div>
<div> 
    <form method="post" style="margin:50px; margin-left:500px;"> 
    <input type="text" id="uname" name="post" required="" placeholder="WRITE YOUR POST...">
    <input type="submit" name="postt" value="POST NOW">
    
    </form>
</body>
</html>