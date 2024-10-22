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
                <li><a href="cuisine.php" class="active"><span class="text">Cuisine</span>
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
			<li><a href="contact.php"><span class="text">Contact</span>
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
		<section class="Cuisine" id="cuisine">
        <div class="middle1">
            <div class="info1">
            <h5><span style="font-family:'Young Serif';font-size:30px; color:#000;">Type of Cuisine</span></h5>
            </div>
            <div class="box">
            <div class="b">
                    <div class="box1"><a href="gujrati.php"><img src="cuisine/indian veg thali.png"></a></div>
                    <div class="binfo">Indian Main Food</div>
                    <div class="binfo1">normal indian food offers something for everyone, it consists of dal, rice, roti, puri and sweets.</div>
                </div>
                <div class="b">
                    <div class="box1"><a href="punjabi.php"><img src="cuisine/punjabi-cuisine.png"></a></div>
                    <div class="binfo">Punjabi Cuisine</div>
                    <div class="binfo1">Punjabi Thali consist of Dal Makhani, Kadai Paneer, Jeera Rice, Raita, Missi Roti and Papad. </div>
                </div>
                <div class="b">
                    <div class="box1"><a href="south.php"><img src="cuisine/southindian-cuisine.png"></a></div>
                    <div class="binfo">South Indian Cuisine</div>
                    <div class="binfo1">South Idian Thali consist of Vada, Appam, Pongal, Dosa, Puttu, Malabar Parota and Coconut Rice, Rava Kesari or Payasam.</div>
                </div>
                <div class="b">
                    <div class="box1"><a href="nonveg.php"><img src="cuisine/gujraati-cuisine.png"></a></div>
                    <div class="binfo">Non Veg food</div>
                    <div class="binfo1">Non veg food consists of Biryani, egg kari, chicken food.</div>
                </div>
            </div>
        </div>
        </section>
    <script src="index.js"></script>
	<body>
</html>