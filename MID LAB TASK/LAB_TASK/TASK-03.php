<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>TASK-03</title>
    <style>
.error {color: #FF0000;
}
</style>
</head>
<body>
 
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    $NameErr= $emailErr = $genderErr = $websiteErr =$commentErr= "";
    $name == $email = $gender = $comment = $website = "";
    



 
if (empty($_POST["name"])) {
$NameErr = "Name required";
} else {
$name = validateInpute($_POST["name"]);
}




 
echo"<hr>";


 
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } 
  else {
    $email = validateInpute($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
  }






 
if (empty($_POST["website"])) {
    $websiteErr = "website is required";
  } 
  else {
    $website = validateInpute($_POST["website"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $websiteErr = "Invalid URL";
      }
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
$data = trim($data); 
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;

}


 
?>
 
<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
 
<label>Name: <input type="text" name="name" > <span class="error">* <?php echo $NameErr;?></span><br><br></label> 
 
<label for="name">E-mail:<input type="text" name="email" ><span class="error">* <?php echo $emailErr;?></span><br><br></label>
 
<label for="name">University Website:<input type="text" name="website" ><span class="error">*<?php echo $websiteErr;?></span><br><br></label>
 
<label for="name">
Comment: <textarea name="comment" rows="5" cols="40" style="resize:none;" ></textarea></label>
<br><br>
<label for="name">
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php echo $genderErr;?></span></label>
<br>
 
<input type="submit" name="submit" value="Submit">
 
</form>


 
<?php
echo "<h2>Here is the input details:</h2>";
echo "Name: ". $name."<br>";
echo "Email ". $email."<br>";
echo "Wedsite ". $website."<br>";
echo "Comment: ". $comment."<br>";
echo "Gender: ". $gender."<br>";
 
?>
    
</body>
</html>