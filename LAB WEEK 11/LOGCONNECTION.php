<?php
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
   $lusername = $_POST['uname'];
   $lPassword = $_POST['pass'];

   
    $sql="SELECT *FROM users where username= '$lusername' AND passwords= '$lPassword' ";
    $con=mysqli_connect('localhost','root');
    mysqli_select_db($con,'infobd');
    $q= mysqli_query($con,$sql);
    $num= mysqli_num_rows($q);
    if($num == 1){
        
        header("Location: http://localhost/LAB WEEK 11/HOME.php?name=$lusername");
    }
    else
    {
        header("Location: http://localhost/LAB WEEK 11/LOGIN.php");
    } 
    
 }

?>