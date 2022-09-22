<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TASK-01</title>
</head>
<body >
 
  <?php
    $myfile=fopen("labTest.txt","r")or die("Unable to open file");
 
    while(!feof($myfile))
    {
        echo fgets($myfile)."<br>";
       
    }
    fclose($myfile);
    ?>
 
<?php
    $myfile=fopen("labTest.txt","a+")or die("unable to open file");
    fwrite($myfile,"");
    $txt=" NAME: HASAN, SHADIK <br> ID: 19-39357-1  ";
    fwrite($myfile,$txt)."<br>";
    fclose($myfile);
    ?>
    
</body>
</html>