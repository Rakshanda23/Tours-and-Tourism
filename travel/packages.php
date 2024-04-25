<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tourism Management System - Packages</title>
    <link href="css/main.css" rel="stylesheet">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    	<script src="js/jquery-3.2.1.min.js"></script>
    	<script src="js/main.js"></script>
    	<script src="js/bootstrap.min.js"></script>
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
    <?php 
		
			if(!isset($_SESSION["username"])) {
				include("common/headerLoggedOut.php");
			}
			else {
				include("common/headerLoggedIn.php");
			}
		
		?>

    <div class="spacer">a</div>

    <main>
        <!-- Repeat this card structure nine times -->
        <?php 
        // Array of image URLs, corresponding place names, and information about each place
        $places = array(
            "https://imgs.search.brave.com/OHoMlxHVYP9usPTUaaYNII_QHh9Z8-dW0LnIJE2dzlY/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvNTY3/OTcyNjQ1L3Bob3Rv/L2JvYXRpbmctd2l0/aC1iZWF1dGlmdWwt/aXNsYW5kLWluLWFu/ZGFtYW4tc2VhLmpw/Zz9zPTYxMng2MTIm/dz0wJms9MjAmYz1M/TjZxNllyb3NoUnRF/OVFLdHZESE15dkV0/SVpkQ2dMMHNqWUZX/ZE9VeFdZPQ" => array("Manali", "Manali, in the Himalayas, offers scenic beauty, adventure, and tranquility. With snow-capped peaks, lush valleys, and thrilling activities like trekking and skiing, it's a magnet for nature lovers and adventure seekers alike.",'url' => 'manali.php'),
            "https://imgs.search.brave.com/YljLisr05NIQornhWb6JcWQlaH8FvjcwZp3OEnZh_MI/rs:fit:860:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzA0LzE2LzA1LzUx/LzM2MF9GXzQxNjA1/NTEyMF95T0NuTm5I/WkR5TFhNWUJoUWxF/YTdkR01Db1d0V3Bq/Sy5qcGc" => array("Rajasthan", "Rajasthan is a state in India known for its vibrant culture, rich history, and magnificent forts and palaces. It's also famous for its desert landscapes and traditional cuisine.",'url' => 'rajasthan.php'),
            "https://imgs.search.brave.com/p0g4oyUPpxIMfDjZd_untvv8UokgkPKcIlXQaD2CVTI/rs:fit:860:0:0/g:ce/aHR0cDovL2Zhcm0z/LnN0YXRpY2ZsaWNr/ci5jb20vMjMxNS8y/MTU4NDczNzc3XzQ1/MjA5Y2FjYjBfei5q/cGc" => array("Kerala", "Kerala, known as 'God's Own Country', is famous for its backwaters, lush greenery, and serene beaches. It's also known for its Ayurvedic treatments and traditional art forms.",'url' => 'kerala.php'),
            "https://imgs.search.brave.com/yIUQLVY2usShneekJmr4qenY_Ek6C_6SgNzNIDlVwEY/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzL2Q4LzM2/LzRjL2Q4MzY0YzY2/MWNhOTg3YTdiYzE2/NTM5ZDY3NGQyOTVm/LmpwZw" => array("Kashmir", "Kashmir is a union territory in India known for its scenic beauty, majestic mountains, and picturesque valleys. It's a popular destination for trekking and skiing enthusiasts.",'url' => 'kashmir.php'),
            "https://imgs.search.brave.com/OW-u12y8b3AWIeF1wiFEHkg1nSSxyiAEnss2grvqFCU/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9oYmxp/bWcubW10Y2RuLmNv/bS9jb250ZW50L2h1/YmJsZS9pbWcvc2hp/bWxhL21tdC9kZXN0/aW5hdGlvbi9tX2xh/bmRzY2FwZV9sXzQw/MF82NDAuanBn" => array("Shimla", "Shimla, in the Himalayan foothills, offers scenic beauty and colonial charm. Known for snow-capped mountains and outdoor activities like hiking and skiing, it's a favorite for nature lovers and history buffs.",'url' => 'shimla.php'),
            "https://imgs.search.brave.com/o54DQQMq4NGj86q_Ir5JAjIHvS2oC6Y39Enl103B-u0/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9zdDMu/ZGVwb3NpdHBob3Rv/cy5jb20vMTQ4NDcw/NDQvMTc2MjUvaS80/NTAvZGVwb3NpdHBo/b3Rvc18xNzYyNTkz/MDYtc3RvY2stcGhv/dG8tb3Blbi1nYXRl/cy1lbnRyYW5jZS1s/ZWgtY2l0eS5qcGc" => array("Leh Ladakh", "Leh Ladakh is a region in the Indian state of Jammu and Kashmir known for its stunning landscapes, Buddhist monasteries, and adventurous trekking trails.",'url' => 'lehladakh.php'),
            "https://imgs.search.brave.com/vvAlbQXTgXB9OOMy279iH5aMXXi0s5JcnKa8Z2n1PGo/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTMx/OTczNTkxNS9waG90/by9ncmVhdC1pbmRp/YW4tcmhpbm9jZXJv/cy1zdG9jay1waG90/by5qcGc_cz02MTJ4/NjEyJnc9MCZrPTIw/JmM9RjNCT3lYTm93/eHBpOENSbGhkbk01/X21HTVlDbFlFSHZ5/WWI2eDZwNzg4dz0" => array("Assam", "Assam is a state in northeastern India known for its tea plantations, wildlife sanctuaries, and scenic beauty. It's also famous for its traditional dance forms and rich cultural heritage.",'url' => 'assam.php'),
            "https://imgs.search.brave.com/gHTzlB74YKzkLlpxcd66poc30Xdc2xz46KfGqckCBCc/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvNDgx/NjE1NTMyL3Bob3Rv/L29kaXNzaS5qcGc_/cz02MTJ4NjEyJnc9/MCZrPTIwJmM9VFpV/YVJ0dGdKQ3ZKeXFJ/c28xbFhIZE5nOE45/RVBTM1YwZFpYLTVD/Y0wxMD0" => array("Odisha", "Odisha, formerly known as Orissa, is a state on the eastern coast of India known for its temples, beaches, and tribal cultures. It's also famous for its classical dance forms and festivals.",'url' => 'odisha.php'),
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

    <div class="spacerLarge">.</div> <!-- just a dummy class for creating some space -->
			
		<?php include("common/footer.php"); ?>
</body>
</html>
 