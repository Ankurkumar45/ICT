<?php
    require 'configure.php';

	$N=$_POST['Name'];
	$R=$_POST['Role'];
    $F=$_FILES['uploaded']['name'];

	$qurey=mysqli_query($db,"INSERT INTO women_with_grade_ac VALUES('$N','$R','$F')");
	
	if($qurey){
		echo"<script>alert('File successfully uploaded')</script>";
	}
?>

<br><br>
<a href="women.php">See all players</a>