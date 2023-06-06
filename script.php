<?php
    $db = mysqli_connect('localhost','root','','user_registration');

    $NAME = $_POST['Name'];
    $NUMBER = $_POST['Number'];
    $EMAIL = $_POST['Email'];
    $PASSWORD = $_POST['Password'];

    $qurey = mysqli_query($db,"INSERT INTO registration_form VALUES('$NAME','$NUMBER','$EMAIL','$PASSWORD')");
	if($qurey){
		echo"<script>
			alert('Thanks for your details...');
		</script>";
	}
	else{
		echo"<script>
			alert('Sorry! <br> Email id used...');
		</script>";
	}
?>