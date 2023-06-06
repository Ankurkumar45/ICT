<?php
    include 'config.php';

    $NAME = $_POST['Name'];
    $MOBILE = $_POST['Mobile'];
    $EMAIL = $_POST['Email'];
    $FEEDBACK = $_POST['feedback'];
	
	$query = mysqli_query($db,"INSERT INTO your_feedback VALUES('$NAME','$MOBILE','$EMAIL','$FEEDBACK')");
	
	if($query){
			echo"<script>
			alert('Thanks for your feedback...');
			</script>";
	}

?>