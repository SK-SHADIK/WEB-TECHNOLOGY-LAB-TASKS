<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
<div>
    <?php include 'NAV.php';?>
</div>
<div>
    <h1>HOME PAGE</h1>
    <hr>
</div>
<div>
    <?php

    session_start();
  
            if(isset($_SESSION['postt'])){
            echo "<h4>".$_SESSION['uname']."</h4>";
            echo "<br>" ;
            echo "<p>".$_SESSION['postt']."</p>";
        }

    ?>

</div>
</body>
</html>