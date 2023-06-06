<?php
    require 'configure.php';

	$N=$_POST['Name'];
	$qurey=mysqli_query($db,"DELETE FROM with_grade_ad WHERE Name=('$N')");
	
	if($qurey){
		echo"<script>alert('File successfully Deleted')</script>";
	}
?>

<br><br>
<a href="players.php">See all players</a>