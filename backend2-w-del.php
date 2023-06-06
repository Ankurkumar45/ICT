<?php
    require 'configure.php';

	$N=$_POST['Name'];
	$qurey=mysqli_query($db,"DELETE FROM women_with_grade_ab WHERE Name=('$N')");
	
	if($qurey){
		echo"<script>alert('File successfully Deleted')</script>";
	}
?>

<br><br>
<a href="women.php">See all players</a>