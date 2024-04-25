<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<title>Home | tourism_management</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/hover-min.css" rel="stylesheet"/>
	<link href="css/main.css" rel="stylesheet"/>
   	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
	
    <style>
        /* CSS code */
        <?php
        // CSS variables
        $color_primary_white = "rgb(240, 240, 240)";
        ?>

        main {
            display: flex;
            flex-wrap: wrap; 
            justify-content: space-around; 
            padding: 50px;
            font-family: 'Roboto', sans-serif;
        }

        .card {
            width: calc(33.33% - 20px); 
            margin: 10px; 
            height: 20rem; 
            border-radius: 10px;
            overflow: hidden;
            cursor: pointer;
            position: relative;
            color: <?php echo $color_primary_white; ?>;
            box-shadow: 0 10px 30px 5px rgba(0, 0, 0, 0.2);
        }

        .card img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0.9;
            transition: opacity .2s ease-out;
        }

        .card h2 {
            position: absolute;
            inset: auto auto 30px 30px;
            margin: 0;
            transition: inset .3s .3s ease-out;
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: normal;
            text-transform: uppercase;
        }

        .card p,
        .card a {
            position: absolute;
            opacity: 0;
            max-width: 80%;
            transition: opacity .3s ease-out;
        }

        .card p {
            inset: auto auto 80px 30px;
        }

        .card a {
            inset: auto auto 40px 30px;
            color: inherit;
            text-decoration: none;
        }

        .card:hover h2 {
            inset: auto auto 220px 30px;
            transition: inset .3s ease-out;
        }

        .card:hover p,
        .card:hover a {
            opacity: 1;
            transition: opacity .5s .1s ease-in;
        }

        .card:hover img {
            transition: opacity .3s ease-in;
            opacity: 1;
        }

        .material-symbols-outlined {
            vertical-align: middle;
        }

    /* Add this CSS code to your existing styles */
.card a.button {
    display: block;
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    color: white;
    background-color: transparent; /* Set background to transparent */
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: color 0.3s ease, background-color 0.3s ease; /* Add transition for color change */
}

.card a.button:hover {
    background-color: rgba(0, 0, 0, 0.4); /* Change the background color or make it darker on hover */
    
}
    </style>
	</head>
	
	<body>
	
		<div class="col-xs-12 home">
		
        <?php 
		
        if(!isset($_SESSION["username"])) {
            include("common/headerPackagesTransperantLoggedOut.php");
        }
        else {
            include("common/headerPackagesTransperantLoggedIn.php");
        }
    
    ?>
    <!---icons---->
			<div class="col-xs-12 popularDestinationsContainer">
				
				<div class="col-xs-12 destinationHolder">
				
					<div class="col-xs-12 destinationQuote">
						What would you like to book today?
					</div>
					
            <main>        
            <?php 
        // Array of image URLs, corresponding place names, and information about each place
        $places = array(
            "https://cdn.britannica.com/96/115096-050-5AFDAF5D/Bellagio-Hotel-Casino-Las-Vegas.jpg" => array("Hotels", "Discover a world of choice with our diverse array of handpicked hotels for every traveler's preference.",'url' => 'hotels.php'),
            "https://static.india.com/wp-content/uploads/2021/10/Flights.png" => array("Flights", "Unlock boundless skies with our extensive range of flight options tailored to your journey.",'url' => 'flights.php'),
            "https://www.timeforkids.com/wp-content/uploads/2020/02/feature-cover_-train-k1.jpg" => array("Trains", "Embark on railway adventures with our diverse selection of train bookings, connecting you to destinations near and far.",'url' => 'trains.php')
            
        );

        // Loop through each place and create a card
        foreach ($places as $image_url => $info) :
        ?>
            <div class="card">
                <img src="<?php echo $image_url; ?>" alt="">
                <div class="card-content">
                    <h2>
                        <?php echo $info[0]; ?>
                    </h2>
                    <p>
                        <?php echo $info[1]; ?>
                    </p>
                    <a href="<?php echo $info['url']; ?>" class="button">Find out more</a>
                </div>
            </div>
        <?php endforeach; ?>
    </main>
        </div>
        </div>
	
				<!--popular destinations-->
			
			<div class="col-xs-12 popularDestinationsContainer">
				
				<div class="col-xs-12 destinationHolder">
				
					<div class="col-xs-12 destinationQuote">
                    <a href="packages.php" class="button">
						Our Popular Packages
        </a>
					</div>
                    <main>        
            <?php 
        // Array of image URLs, corresponding place names, and information about each place
        $places = array(
            "https://imgs.search.brave.com/OW-u12y8b3AWIeF1wiFEHkg1nSSxyiAEnss2grvqFCU/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9oYmxp/bWcubW10Y2RuLmNv/bS9jb250ZW50L2h1/YmJsZS9pbWcvc2hp/bWxhL21tdC9kZXN0/aW5hdGlvbi9tX2xh/bmRzY2FwZV9sXzQw/MF82NDAuanBn" => array("Shimla", "Shimla, in the Himalayan foothills, offers scenic beauty and colonial charm. Known for snow-capped mountains and outdoor activities like hiking and skiing, it's a favorite for nature lovers and history buffs.",'url' => 'shimla.php'),
            "https://imgs.search.brave.com/vvAlbQXTgXB9OOMy279iH5aMXXi0s5JcnKa8Z2n1PGo/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTMx/OTczNTkxNS9waG90/by9ncmVhdC1pbmRp/YW4tcmhpbm9jZXJv/cy1zdG9jay1waG90/by5qcGc_cz02MTJ4/NjEyJnc9MCZrPTIw/JmM9RjNCT3lYTm93/eHBpOENSbGhkbk01/X21HTVlDbFlFSHZ5/WWI2eDZwNzg4dz0" => array("Assam", "Assam is a state in northeastern India known for its tea plantations, wildlife sanctuaries, and scenic beauty. It's also famous for its traditional dance forms and rich cultural heritage.",'url' => 'assam.php'),
            "https://imgs.search.brave.com/KsIxfg2ZpJuoHJirnS0VnqFF_vltD384U2ttkZ8KzSg/rs:fit:860:0:0/g:ce/aHR0cHM6Ly93YWxs/cGFwZXJjYXZlLmNv/bS93cC93cDcyMTA1/MTQuanBn" => array("Amritsar", "Amritsar is a city in the northwestern Indian state of Punjab known for its Golden Temple, a sacred Sikh shrine. It's also famous for its delicious Punjabi cuisine and vibrant bazaars.",'url' => 'amritsar.php')
        );

        // Loop through each place and create a card
        foreach ($places as $image_url => $info) :
        ?>
            <div class="card">
                <img src="<?php echo $image_url; ?>" alt="">
                <div class="card-content">
                    <h2>
                        <?php echo $info[0]; ?>
                    </h2>
                    <p>
                        <?php echo $info[1]; ?>
                    </p>
                    <a href="<?php echo $info['url']; ?>" class="button">Find out more</a>
                </div>
            </div>
        <?php endforeach; ?>
    </main>
    <div class="col-xs-12 destinationQuote">
                    <a href="packages.php" class="button">
                    Find out more
        </a>
					</div>
			</div>
		</div> <!-- home -->
		<div class="spacerLarge">.</div> 
		<?php include("common/footer.php"); ?>
	</body>
	
</html>