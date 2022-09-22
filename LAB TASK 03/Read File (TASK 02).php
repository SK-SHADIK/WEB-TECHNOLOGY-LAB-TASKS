<!DOCTYPE html>
<html>
    <head>
        <title>
            READ FILE (TASK 02)
        </title>
    </head>
    <body>
    <?php
	if(isset($_POST['submit'])){
		// echo $_FILES['fileName']['name'];
		// echo $_FILES['fileName']['tmp_name'];
		$fileName = $_FILES['fileName']['name'];
		$tmp_loc = $_FILES['fileName']['tmp_name'];
		$uploadLoc = 'uploads/';
		if(!empty($fileName) ){
			move_uploaded_file($tmp_loc, $uploadLoc.$fileName);
			echo "file uploaded successfully";
		}
		else{
			echo"select an image";
		}

	}
	?>
	<form method="post" action="" enctype="multipart/form-data">
		Select an Image
		<input type="file" name="fileName">  <br><br>
		<input type="submit" name="submit">
	</form>


    </body>
</html>