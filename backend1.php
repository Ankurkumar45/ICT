<?php
    require 'configure.php';

	$N=$_POST['Name'];
	$R=$_POST['Role'];
    $F=$_FILES['uploaded']['name'];

	$qurey=mysqli_query($db,"INSERT INTO with_grade_aa VALUES('$N','$R','$F')");
	
	if($qurey){
		echo"<script>alert('File successfully uploaded')</script>";
	}
?>

<br><br>
<a href="players.php">See all players</a>