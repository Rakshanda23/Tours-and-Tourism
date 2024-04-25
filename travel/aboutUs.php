<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">
	
	<!-- HEAD TAG STARTS -->

	<head>
	
  		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
		<title>About Us | tourism_management</title>
    
    	<link href="css/main.css" rel="stylesheet">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    	<script src="js/jquery-3.2.1.min.js"></script>
    	<script src="js/main.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	
		<style>
			 .package-info {
            width: 95%; 
            background-color: #fff; 
            padding: 20px; 
            border-radius: 20px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
            margin-left: 35px; 
            margin-right: 100px;
            transition: background-color 0.3s ease-in-out; 
        }
			</style>

	</head>
		
	<body>
		
		<?php 
		
			if(!isset($_SESSION["username"])) {
				include("common/headerLoggedOut.php");
			}
			else {
				include("common/headerLoggedIn.php");
			}
		
		?>
		
		<div class="spacer">a</div>
		
		<div class="col-sm-12 aboutUsWrapper">
			
			<div class="headingOne">
				
				About Us
				
			</div>
			
			<div class="para">
			<div class="package-info">
				<p>Welcome to ToursAndTravels, your ultimate destination for hassle-free travel bookings and unforgettable adventures!</p>
				<br>
				<p>At ToursAndTravels, we understand the excitement and anticipation that comes with planning a trip. Whether you're seeking the thrill of exploring new cultures, the tranquility of scenic landscapes, or the comfort of luxurious accommodations, we are here to turn your travel dreams into reality.</p>
				<br>
				<p>Our dedicated team of travel enthusiasts brings together a wealth of experience and expertise to ensure that your journey is seamless from start to finish. Let us introduce you to the faces behind the scenes:</p>
				<br>
				<p><b>Siddhi Sangwai</b> - Managing Director and Co-Founder: Our Managing Director, is the driving force behind our company's success. Her strategic acumen and visionary leadership propel us forward, ensuring that we continually innovate and exceed expectations in the travel industry.</p>
				<p><b>Rijul Sidnale</b> - Operations Manager and Co-Founder: Rijul meticulously oversees the intricate details of each booking, ensuring that every aspect of your travel experience is meticulously planned and executed to perfection.</p>
				<p><b>Sandesh Kadam</b> - Customer Relations Specialist and Co-Founder: Sandesh is your go-to person for any inquiries or assistance you may need along your journey. With a friendly demeanor and a knack for problem-solving, he ensures that your needs are always met with prompt and courteous service.</p>
				<p><b>Shreyas Ruikar</b> - Marketing Director and Co-Founder: Shreyas's creative flair and strategic vision are instrumental in spreading the word about our exciting travel offerings. From captivating campaigns to engaging content, he ensures that our brand remains at the forefront of the industry.</p>
				<p><b>Siddharth Sadake</b> - Technology Guru and Co-Founder: Siddharth's technological expertise powers the seamless functionality of our website, making it easier than ever for you to browse, book, and manage your travel arrangements with ease.</p>
				<br>
				<p>At ToursAndTravels, we pride ourselves on delivering personalized experiences tailored to your unique preferences and interests. Whether you're embarking on a solo adventure, planning a romantic getaway, or organizing a group excursion, we are here to make your travel dreams come true.</p>
				<p>Explore our extensive selection of flights, trains, hotels, and curated packages, and let us help you create memories that will last a lifetime. Your next adventure awaits – book with us today and let the journey begin!</p>

		</div>
			</div>
			
		</div> <!-- paymentWrapper -->
	
	<div class="spacerLarge">.</div> <!-- just a dummy class for creating some space -->
			
		<?php include("common/footer.php"); ?>
				
	</body>
		
</html>