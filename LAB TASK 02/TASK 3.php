<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>TASK 3</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>



<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$fname = $lname = "";
$fNameErr = $lNameErr = "";
// take input without any validation
//$fname = $_POST['fname'];
//$lname = $_POST['lname'];
// validate input generally



// start of validation for first name againt empty input
if (empty($_POST["fname"])) {
$fNameErr = "First Name required";
//echo "$fNameErr";
} else {
$fname = validateInpute($_POST["fname"]);
}
// start of validation for first name againt empty input




echo"<hr>";



// start of validation for first name againt empty input
if (empty($_POST["lname"])) {
$lNameErr = "Last Name required";
//echo "$lNameErr";
} else {
$lname = validateInpute($_POST["lname"]);

}
// start of validation for first name againt empty input


}
function validateInpute($data){
$data = trim($data); ///// ismail\ ismail
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
//<script>alert("hacked")</script>
}



?>



<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<!-- <form method="post" action="welcome.php"> -->




<label>First Name: </label><input type="text" name="fname"> <span class="error">* <?php echo $fNameErr;?></span> <br><br>



<label>Last Name: </label><input type="text" name="lname"><span class="error">* <?php echo $lNameErr;?></span><br><br>



<input type="submit" name="submit">
</form>



<?php
echo "<h2>Here is the input details:</h2>";
echo "First name: ". $fname."<br>";
echo "Last name: ". $lname."<br>";

?>






</body>
</html>