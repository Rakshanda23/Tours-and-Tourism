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
                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/12/e7/47/b5/this-sanctum-sanctorum.jpg?w=600&h=400&s=1" alt="Package Image">
            </div>
            <div class="package-info">
                <p><b>Name of package:</b> Amritsar</p>
                <p><b>Number of Days:</b> 8</p>
                <p><b>Number of People:</b> 3</p>
                <p><b>Name of Train:</b> xyz</p>
                <p><b>Name of Hotel:</b> XYZ</p>
                <p><b><div class="form-group">
                                <label for="name">Cost:</label>
            						<div class="input-cost" id="cost">
                                    <input type="text" class="input" name="cost" required/>
            						</div>
        						</div></p></b>
    						</div>
    						
              </div>
        </div>

        <a href="buffer.php" class="buy-now-button">Confirm Booking</a>
    <div class="spacerLarge">.</div> <!-- just a dummy class for creating some space -->
            
        <?php include("common/footer.php"); ?>
</body>
</html>
