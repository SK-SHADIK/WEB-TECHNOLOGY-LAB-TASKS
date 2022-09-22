<title>TASK 1.4 </title>
<?php  
    if ($_SERVER["REQUEST_METHOD"] == "POST")

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];

        echo "Welcome ". $fname. " " . $lname;
?>