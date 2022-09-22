<!DOCTYPE html>
<html>
    <head>
        <title>
            READ FILE (TASK 03)
        </title>
    </head>
    <body>
    <?php 
    //readfile function
    echo "<pre>";
    echo"</pre>"
    ?>
    <?php
    $myfile=fopen("text.txt","r")or die("Unable to open file");

    while(!feof($myfile))
    {
        echo fread($myfile,filesize("text.txt"))."<br>";
    }
    fclose($myfile);
    ?>

    <?php
    $myfile=fopen("text.txt","w")or die("unable to open file");
    $txt="NICKNAME: SHADIK";
    fwrite($myfile,"write this content");
    $txt="NAME: SHADIK HASAN";
    fwrite($myfile,$txt);
    fclose($myfile);
    ?>

    </body>
</html>