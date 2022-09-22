
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="LOGIN_STYLE.css">
</head>
<body>
    <div class="contain">
        <div class="login">
    <form action="LOGCONNECTION.php" method="post"> 
        <h1>LOGIN FORM</h1></legend> 
    
        <label for="uname">USER NAME:</label>
        <input type="text" id="uname" name="uname" required=""><br><br>
        <label for="pass">PASSWORD:</label>
        <input type="password" id="pass" name="pass" required=""><br>
        <input type="submit" value="LOGIN" class="btn">
    </form>
    
</div>

<div class="registationfo">
<form action="CONNECTION.php" method="post"> 
    <h1>REGESTRATION FORM</h1></legend> 
    
    <label for="uname">USER NAME:</label>
    <input type="text" id="uname" name="runame" required=""><br><br>
    <label for="pass">PASSWORD:</label>
    <input type="password" id="pass" name="rpass" required=""><br>
    <input type="submit" value="REGESTER" class="btn">
</form>
</div> 


</div>
</body>
</html>