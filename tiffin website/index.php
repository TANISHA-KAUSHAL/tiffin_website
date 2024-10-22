<!DOCTYPE html>
<html>
    <head>
	    <title>All time Tiffin Service</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Young+Serif&display=swap" rel="stylesheet">
        <script type="text/javascript">
            function showMessage(){
                alert("SignUp first");
            }
        </script>
	</head>
	<body style="background-image:url(bg.avif); background-size:100% auto; background-repeat: no-repeat;">
		<header class="nav">
            <ul>
                <li><a href="index.php" class="active"><span class="text">Home</span>
                    </a>
                </li>
                <li><a href="#cuisine" onClick="showMessage()"><span class="text">Cuisine</span>
                    </a>
                </li>
                <li><a href="#service" onClick="showMessage()"><span class="text">Service</span>
                    </a>
                </li>
                <li><a href="#about_us"><span class="text">About-Us</span>
                    </a>
                </li>
                </ul>
		<label class="logo"><span style="font-family:'Dancing Script';">Tiffin service</span></label>
		<ul>
			<li><a href="#categories" onClick="showMessage()"><span class="text">Categories</span>
			    </a>
			</li>
			<li><a href="#contact" onClick="showMessage()"><span class="text">Contact</span>
			    </a>
			</li>
			<li><a href="#" onClick="showMessage()"><span class="text">Donation</span>
			    </a>
			</li>
			<li><a class="login_button active"><span class="text">SignUp</span></a>
			</li>
		</ul>
            <div><input type="checkbox" id="check" name="check" value="check">
                <label for="check" id="chk"><i class="fa fa-bars" aria-hidden="true"></i></label>
            </div>
		</header>
		<section class="Home" id="home">
        <div class="middle">
            <div class="info">
            <h1><span style="font-family:'Young Serif';font-size:39px; color:#000;">Freshly Cooked</span></h1>
            <h5><span style="font-family: monospace;font-size:30px; color:#000; text-align: center;">Home Food Tiffin Service</span></h5>
            <button class="btn">Enquire Now</button>
            </div>
            <div class="form" >
                <span class="icon_close"><i class="fa fa-times" aria-hidden="true"></i></span>
                <?php include 'registerform.php';?>
            </div>
        </div>
        </section>
    <script src="index.js"></script>
        </div>
	<body>
</html>