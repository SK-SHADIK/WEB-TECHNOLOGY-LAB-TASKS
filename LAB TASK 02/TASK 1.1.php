<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <title>FORM SAMPLE TASK 1.1</title>

  </head>
  <body>
     
    <form method="get" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <label>First Name: </label> <input type="text" name="fname"><br><br>
    
    <label>Last Name: </label> <input type="text" name="lname"><br><br>
    
    <input type="submit" name="submit">

<?php  
    if ($_SERVER["REQUEST_METHOD"] == "GET")

        $fname = $_GET['fname'];
        $lname = $_GET['lname'];

        echo "<hr>";
        echo "First name: ". $fname."<br>";
        echo "Last name: ". $lname."<br>";
?>

</body>
</html>
