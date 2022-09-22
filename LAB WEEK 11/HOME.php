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
  

            echo "<h4>Welcome to ".$_GET['name']."</h4>";
            echo "<br>" ;
           

    ?>

</div>
</body>
</html>