<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Package</title>
    <!-- Add your CSS link here -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link href="css/style.css" rel="stylesheet">

    <script src="js/jquery-3.2.1.min.js"></script>
    	<script src="js/main.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script src="js/bootstrap-dropdown.js"></script>
    	<script src="js/jquery-2.1.1.min.js"></script>
    	<script src="js/moment-with-locales.js"></script>
    	<script src="js/bootstrap-datetimepicker.js"></script>
		<script type="text/javascript">
		
			$(function () {
				
                $('#datetimepicker3').datetimepicker({
					format: 'L',
		   			locale: 'en-gb',
					useCurrent: false,
					minDate: moment()
				});
				
				$('#datetimepicker3').on('dp.change',function(e){
					console.log(e.date.format('dddd'));
					$('#dayTrain').val(e.date.format('dddd'));
				});
            });
		
		</script>
    
    <style>
        body {
            font-family: 'Raleway', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f1f1f1; /* Changed background color */
            border-radius: 20px; /* Increased border-radius */
            box-shadow: 0 0 100px rgba(0, 0, 0, 0.1); /* Increased box-shadow */
            overflow: hidden;
        }

        .package-details {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .package-image img {
            width: 100%; 
            border-radius: 20px; 
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.6); 
            transition: transform 0.3s ease-in-out; 
            margin-left: 40px;
        }

        .package-image:hover img {
            transform: scale(1.05); 
        }

        .package-info {
            width: 65%; 
            background-color: #fff; 
            padding: 20px; 
            border-radius: 20px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
            margin-left: 100px; 
            margin-right: 100px;
            transition: background-color 0.3s ease-in-out; 
        }

        .package-info h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
            text-align: left; /* Align package name to the left */
        }

        .package-info p {
            font-size: 16px;
            color: #666;
            margin-bottom: 8px;
            text-align: left; /* Align package info to the left */
        }

        /* Buy Now Button */
        .buy-now-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            text-decoration: none;
            margin-top: 20px;
            margin-left: 65%;
        }

        .buy-now-button:hover {
    transform: scale(1.1); 
    color: #fff;
}
    </style>
</head>
<body style="background-color: aliceblue;"> <!-- Added background color -->

    <?php 
        
        if(!isset($_SESSION["username"])) {
            include("common/headerLoggedIn.php");
        }
        else {
            include("common/headerLoggedIn.php");
        }
    
    ?>

<div class="spacer">a</div>
<div class="spacer">a</div>
<div class="spacer">a</div>
    
        <div class="package-details">
            <div class="package-image">
                <img src="https://static.toiimg.com/thumb/msid-96567007,width-748,height-499,resizemode=4,imgsize-184030/.jpg" alt="Package Image">
            </div>
            <div class="package-info">
                <h2>Kashmir</h2>
                <p><b>Number of Days:</b> 15</p>
                <p><b>Description:</b> Crowned "Paradise on Earth," Kashmir is a jewel nestled in the Indian Himalayas. Srinagar, the capital, rests on the glistening Dal Lake, where colorful houseboats offer a unique stay. Mughal marvels like Shalimar Bagh and Nishat Bagh, with their cascading fountains and manicured gardens, transport you to a bygone era. Gulmarg, a meadow adorned with wildflowers in summer and a skier's paradise in winter, offers breathtaking views from its Gondola ride. Pahalgam, with its gushing rivers and pine forests, beckons nature lovers. Adventure awaits in Sonmarg, where trekkers can embark on Himalayan expeditions or marvel at the Thajiwas Glacier.  Kashmir's tapestry extends beyond scenery.  Explore bustling bazaars overflowing with pashmina shawls and hand-crafted souvenirs. Savor the rich Kashmiri cuisine, aromatic with spices like saffron. Immerse yourself in the warmth of Kashmiri hospitality and the echoes of soulful Sufi music. Kashmir offers a perfect blend of natural splendor, cultural richness, and adventure, promising an unforgettable escape.</p>
            
                <div class="col-sm-6">			
   							<div class="form-group">
   								 <label for="destinationTrain">Origin:<p> </p></label>
     
      								<select id= "destinationTrain"  data-live-search="true" class="selectpicker form-control" data-size="5" title="Select Destination Station" name="destination" required>
       									<option value="New Delhi" data-subtext="DLI" data-tokens="DLI New Delhi">New Delhi</option>
        								<option value="Howrah" data-subtext="HWH" data-tokens="HWH Howrah">Howrah</option>
       									<option value="Guwahati" data-subtext="GHY" data-tokens="GHY Guwahati">Guwahati</option>
        								<option value="Silchar" data-subtext="SCL" data-tokens="SCL Silchar">Silchar</option>
        								<option value="Dimapur" data-subtext="DMV" data-tokens="DMV Dimapur">Dimapur</option>
      								</select>
							</div>
            			</div>

                        <div class="col-sm-3">
        						<div class="form-group">
     								<label for="datetime3">Select Date:<p> </p></label>
            						<div class="input-group date" id="datetimepicker3">
                						<input id="datetime3" type="text" class="inputDate form-control" placeholder="Select Date" name="date" required/>
                						<span class="input-group-addon">
                   						<span class="fa fa-calendar"></span>
                						</span>
            						</div>
        						</div>
    						</div>
    						
              </div>
        </div>

        <a href="kashmirpackagedisplay.php" class="buy-now-button">Buy Now</a>
    <div class="spacerLarge">.</div> <!-- just a dummy class for creating some space -->
            
        <?php include("common/footer.php"); ?>
</body>
</html>
