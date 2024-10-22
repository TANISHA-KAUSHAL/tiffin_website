<!DOCTYPE html>
<html>
    <head>
	    <title>All time Tiffin Service</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Young+Serif&display=swap" rel="stylesheet">
	</head>
	<body style="background-image:url(bg.avif); background-size:100% auto; background-repeat: no-repeat;">
		<header class="nav">
            <ul>
                <li><a href="#home"><span class="text">Home</span>
                    </a>
                </li>
                <li><a href="cuisine.php"><span class="text">Cuisine</span>
                    </a>
                </li>
                <li><a href="service.php"><span class="text">Service</span>
                    </a>
                </li>
                <li><a href="about.php"><span class="text">About-Us</span>
                    </a>
                </li>
                </ul>
		<label class="logo"><span style="font-family:'Dancing Script';">Tiffin service</span></label>
		<ul>
			<li><a href="categories.php"><span class="text">Categories</span>
			    </a>
			</li>
			<li><a href="contact.php"  class="active"><span class="text">Contact</span>
			    </a>
			</li>
			<li><a href="https://robinhoodarmy.com/"><span class="text">Donation</span>
			    </a>
                
			</li>
            <li><a href="logout.php" class="login_button">Logout</a>
			</li>
			</ul>
            <div><input type="checkbox" id="check" name="check" value="check">
                <label for="check" id="chk"><i class="fa fa-bars" aria-hidden="true"></i></label>
            </div>
		</header>
		<section class="Contact" id="contact">
        <div class="middle1">
            <div class="info1">
            <h5><span style="font-family:'Young Serif';font-size:30px; color:#000;">Contact Us</span></h5>
            </div>
				<div class="contact_content">
				<div class="contact-text">
				    <div class="contact-list">
				        <li><i class="fa fa-envelope" aria-hidden="true" style="color:#263238;"></i> kaushaltanisha@gmail.com</li>
						<li><i class="fa fa-phone" aria-hidden="true" style="color:#263238;"></i>80927389928</li>
				   </div>
				   <div class="contact-icons">
				        <a href="https://www.linkedin.com/in/tanisha-kaushal-350960230"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						<a href="https://github.com/TANISHA-KAUSHAL"><i class="fa fa-github" aria-hidden="true"></i></a>
				        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="https://instagram.com/tanisha.k_345?igshid=YTQwZjQ0NmI0OA=="><i class="fa fa-instagram" aria-hidden="true"></i></a>
				   </div>
				</div>
			    <div class="contact-form">
			    <form action="">
			    <input type="text" name="uname" placeholder="NAME" required>
				<input type="email" name="email" placeholder="EMAIL" required>
				<input type="text" name="number" placeholder="PHONE" required>
				<textarea name="text" id="" cols="40" rows="10" placeholder="RESPONSE"></textarea>
				<input type="submit" name="ook" value="submit" class="send">
			    </form>
			    </div>
		        </div>
	    </div>
				<?php
			    if(isset($_REQUEST['ook']))
				{
					$username=$_REQUEST['uname'];
					$email=$_REQUEST['email'];
					$phnumber=$_REQUEST['number'];
					$textarea=$_REQUEST['text'];
					$con=mysqli_connect("localhost","root","","tiffin_db");
					mysqli_query($con,"INSERT INTO contactes_user(`username`, `email`,`phnumber`, `textarea`) VALUES ('$username','$email','$phnumber','$textarea')");
					
					mysqli_close($con);
				}
			    ?>
        </section>
    <script src="index.js"></script>
	<body>
</html>