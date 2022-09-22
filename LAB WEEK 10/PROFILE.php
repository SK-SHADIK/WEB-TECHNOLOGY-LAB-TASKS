<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE</title>
</head>
<body>
<div>
    <?php include 'NAV.php';?>
</div>
<div>
    <h1>PROFILE PAGE</h1>
    <hr>
</div>
<div>
    <?php
    session_start();
    if(isset($_SESSION['uname'])){
        echo "USER NAME:". $_SESSION['uname'];
        echo"<br>";
        echo "PASSWORD:". $_SESSION['Pass'];

    }
    ?>
</div>

</body>
</html>