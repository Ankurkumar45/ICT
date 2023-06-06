<!DOCTYPE HTML>
<html>

<head>
	<title>Players in BCCI</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<header>
		<div class="homeMainDiv">
			<div class="home_div">
				<li><img src="BCCI.png" id="home_logo" class="home_head"></li>
				<li>
					<h3 id="home_headings" class="home_head">BCCI</h3>
				</li>
			</div>
		</div>
	</header>
	<div class="navDiv">
		<li><a href="Index.html" id="anc">HOME</a></li>
		<li><a href="about.html" id="anc">ABOUT</a></li>
		<li><a href="history.html" id="anc">HISTORY</a></li>
		<li><a href="women.php" id="anc">WOMEN</a></li>
		<li><a href="leagues.php" id="anc">LEAGUES</a></li>
		<li><a href="wc.html" id="anc">W CUPS</a></li>
		<li><a href="contact.html" id="anc">CONTACT</a></li>
	</div>


	<h1 align="center" id="head_men">MEN</h1>

	<h3>Players With Grade A+</h3>
	<a href="registration.html" id="A">Want to update?</a>
	<?php
	require 'configure.php';
	$qurey = mysqli_query($db, "SELECT * FROM with_grade_aa");
	while ($view = mysqli_fetch_array($qurey)) {
		echo "
			<div class='container'>
            <img src='{$view['Image']}'><br><span id='Name'>{$view['Name']}</span><br><span id='Role'>{$view['Role']}</span>
			</div>";
	}

	echo "<style>
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
					color: aqua;
				}
				#Role{
					color: white;
				}
				
		</style>";
	?>


	<h3>Players With Grade A</h3>

	<?php
	require 'configure.php';
	$qurey = mysqli_query($db, "SELECT * FROM with_grade_ab");
	while ($view = mysqli_fetch_array($qurey)) {
		echo "
			<div class='container'>
            <img src='{$view['Image']}'><br><span id='Name'>{$view['Name']}</span><br><span id='Role'>{$view['Role']}</span>
			</div>";
	}

	echo "<style>
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
					color: aqua;
				}
				#Role{
					color: white;
				}
				
		</style>";
	?>

	<h3>Players With Grade B</h3>

	<?php
	require 'configure.php';
	$qurey = mysqli_query($db, "SELECT * FROM with_grade_ac");
	while ($view = mysqli_fetch_array($qurey)) {
		echo "
			<div class='container'>
            <img src='{$view['Image']}'><br><span id='Name'>{$view['Name']}</span><br><span id='Role'>{$view['Role']}</span>
			</div>";
	}

	echo "<style>
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
					color: aqua;
				}
				#Role{
					color: white;
				}
				
		</style>";
	?>

	<h3>Players With Grade C</h3>

	<?php
	require 'configure.php';
	$qurey = mysqli_query($db, "SELECT * FROM with_grade_ad");
	while ($view = mysqli_fetch_array($qurey)) {
		echo "
			<div class='container'>
            <img src='{$view['Image']}'><br><span id='Name'>{$view['Name']}</span><br><span id='Role'>{$view['Role']}</span>
			</div>";
	}

	echo "<style>
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
					color: aqua;
				}
				#Role{
					color: white;
				}
				
		</style>";
	?>
<footer class="footerDivMain">
    <div  class="footerDiv">
        <div class="footerDiv1">
            <h4 id="homeh4">CONTACT US</h4>
            <p>
                <center style="color: rgb(150, 142, 142);" id="homeCenter">4th Floor, Cricket Centre <br>
                    Wankhede Stadium <br>
                    ‘D’ Road, Churchgate <br>
                    Mumbai- 400020 <br>
                    India. <br>
                    E-mail: office@bcci.tv</center>
            </p>
        </div>
        <div class="footerDiv2">
            <center>
                <div class="footerDiv2Child1">
                    <h4 id="homeh4">MATCHES</h4>
                    <p>
                        <center><a href="https://www.bcci.tv/domestic/fixtures" id="footeranc">Domestic</a></center>
                    </p>
                    <p>
                        <center><a href="https://www.bcci.tv/international/fixtures" id="footeranc">International</a>
                        </center>
                    </p>
                </div>
                <div class="footerDiv2Child2">
                    <h4 id="homeh4">PLAYERS</h4>
                    <p>
                        <center><a href="players.html" id="footeranc">Men</a></center>
                    </p>
                    <p>
                        <center><a href="women.html" id="footeranc">Women</a></center>
                    </p>
                </div>
            </center>
        </div>
        <div class="footerDiv3">
            <h4 id="homeh4">VIDEOS</h4>
            <p>
                <center><a href="https://www.bcci.tv/videos/Latest" id="footeranc">Latest</a></center>
            </p>
            <p>
                <center><a href="https://www.bcci.tv/videos/highlights" id="footeranc">Highlights</a></center>
            </p>
            <p>
                <center><a href="https://www.bcci.tv/videos/features-and-interviews" id="footeranc">Features and
                        Interviews</a></center>
            </p>
            <p>
                <center><a href="https://www.bcci.tv/videos/press-conference" id="footeranc">Press Conferences</a>
                </center>
            </p>
        </div>
        <div class="footerDiv4">
            <h4 id="homeh4">NEWS</h4>
            <p>
                <center><a href="https://www.bcci.tv/articles" id="footeranc">Latest</a></center>
            </p>
            <p>
                <center><a href="https://www.bcci.tv/news/bcci-news" id="footeranc">BCCI News</a></center>
            </p>
        </div>
        <div class="footerDiv5">
            <h4 id="homeh4">MORE</h4>
            <p>
                <center><a href="https://www.iplt20.com/" id="footeranc">IPL</a></center>
            </p>
            <p>
                <center><a href="https://www.bcci.tv/venues" id="footeranc">Vanue</a></center>
            </p>
        </div>
    </div>
    <footer class="homefooter">
        <div>
            <span>T +91 22 - 2289 8800

                F 022 - 2289 8801</span>
        </div>
        <div>
            <span>Copyrights BCCI 2021 , All Rights Reserved.</span>
        </div>
        <div>
            <span><a href="https://www.bcci.tv/about/terms-of-use" id="tc">Terms and Conditions</a></span>
        </div>
        <div>
            <span><a href="https://www.bcci.tv/about/privacy-policy" id="tc">Privacy Policy</a></span>
        </div>
        <div><span>
                <address>Created by: Ankur Dwivedi</address>
            </span></div>
    </footer>
</footer>

	<style>
		#A {
			float: right;
			color: aquamarine;
			text-decoration: none;
			font-size: 15px;
			font-weight: bold;
		}

		#A:hover {
			color: red;
			text-decoration: underline;
			font-size: 15px;
			font-weight: bold;
		}

		.image2 {
			width: 100%;
			height: 1000px;
		}

		p {
			color: white;
			font-size: 20px;
			font-weight: bolder;
		}

		h1 {
			color: white;
			font-size: 100px;
			text-decoration: underline;
		}

		h3 {
			color: yellow;
			font-size: 30px;
		}

		.image {
			width: 100px;
			height: 100px;
		}

		@media screen and (max-width:360px) {
			.image2 {
				width: 100%;
				height: 100%;
			}

			#head_men {
				font-size: 30px;
			}
		}
	</style>
</body>

</html>