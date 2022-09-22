<?php
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
   $userid = $_POST['runame'];
   $Password = $_POST['rpass'];

   $con=mysqli_connect('localhost','root');
   mysqli_select_db($con,'infobd');

   $ql="SELECT *FROM users where username='$userid'";
   $result= mysqli_query($con, $ql);

    $num= mysqli_num_rows($result);
    if($num == 1){
        
        echo "USERNAME IS SAME";
    }
    else
    {
        $sql="INSERT INTO `users` (`username`,`passwords`) VALUES ('$userid','$Password') ";
        $q=mysqli_query($con,$sql);
    
    
        header("Location: http://localhost/LAB%20WEEK%2011/LOGIN.php");
     
    }
    
    
 }

?>

