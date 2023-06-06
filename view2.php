<?php
    require 'configure.php';
	$qurey=mysqli_query($db,"SELECT * FROM with_grade_a_");
        while($view=mysqli_fetch_array($qurey)){
            echo"
			<div class='container'>
            <img src='{$view['Image']}'><br><span id='Name'>{$view['Name']}</span><br><span id='Role'>{$view['Role']}</span>
			</div>";
        }
				
        echo"<style>
				img{
					width: 100px;
					height: 100px;
				}
				.container{
					display: inline-block;
					text-align: center;
				}
				#Name{
					font-weight: bold;
				}
				
		</style>"; 
?>