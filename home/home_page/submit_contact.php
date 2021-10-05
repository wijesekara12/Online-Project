<?php
/*IT20633240
Lakshan W.R.S.M.M
Group MLB_02.01_06
*/
	include_once 'config.php';
?>

<?php

	$username = $_POST["field1"];
	$email = $_POST["field2"];
	$message = $_POST["field3"];


	$sql = "insert into seller_help(username,email,message)values('$username','$email','$message')";

	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Record inserted successfully!!!')</script>";
		//header("Location:index.html");
	}else{
		echo "<script>alert('Error in inserting records')</script>";
	}

	mysqli_close($conn);

?>
