<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>TASK 4</title>
    <style>
       .error {color: #FF0000;}  
    </style>
</head>
<body>
 
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    $fNameErr = $lNameErr= $emailErr = $genderErr = $websiteErr =$commentErr= "";
    $fname = $lname = $email = $gender = $comment = $website = "";
    
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



 
if (empty($_POST["lname"])) {
$lNameErr = "Last Name required";
//echo "$lNameErr";
} else {
$lname = validateInpute($_POST["lname"]);
 
}







 
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } 
  else {
    $email = validateInpute($_POST["email"]);
  }






 
if (empty($_POST["website"])) {
    $websiteErr = "website is required";
  } 
  else {
    $website = validateInpute($_POST["website"]);
  }
 
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = validateInpute($_POST["gender"]);
  }
 
  if (empty($_POST["comment"])) {
    $commentErr = "comment is required";
  } else {
    $comment = validateInpute($_POST["comment"]);
  }
 
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
 
<label>First Name: <input type="text" name="fname" > <span class="error">* <?php echo $fNameErr;?></span><br><br></label> 
 
<label>Last Name: <input type="text" name="lname" ><span class="error">* <?php echo $lNameErr;?></span><br><br></label>
 
<label for="name">E-mail:<input type="email" name="email" ><span class="error">* <?php echo $emailErr;?></span><br><br></label>
 
<label for="name">Website:<input type="text" name="website" ><br><br></label>
 
<label for="name">Comment: <textarea name="comment" rows="3" cols="30" style="" ></textarea></label>
<br><br>
<label for="name">Gender: <input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php echo $genderErr;?></span></label>
<br>
 
<input type="submit" name="submit" value="Submit">
 
</form>


 
<?php
echo "<h2>Here is the input details:</h2>";
echo "First name: ". $fname."<br>";
echo "Last name: ". $lname."<br>";
echo "Email: ". $email."<br>";
echo "Wedsite: ". $website."<br>";
echo "Comment: ". $comment."<br>";
echo "Gender: ". $gender."<br>";
 
?>
    

</body>
</html>