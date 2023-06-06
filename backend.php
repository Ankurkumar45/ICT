<?php

	require 'con.php';
	
	$YR=$_POST['Year'];
	$CHAMP=$_POST['champion'];
	$CN=$_POST['captainName'];
	$CoN=$_POST['coachName'];
	
	$qurey = mysqli_query($db,"INSERT INTO indian_premier_league VALUES ('$YR','$CHAMP','$CN','$CoN')");
	
	if($qurey){
		echo "<script>
			alert('Succussfully updated ');
		</script>";
	}
?>
<br><br>
<a href="record_view.php">view records</a>