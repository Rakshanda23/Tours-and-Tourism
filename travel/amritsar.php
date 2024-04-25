<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Package</title>
    <!-- Add your CSS link here -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link href="css/style.css" rel="stylesheet">
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
            background-color: #f1f1f1;
            /* Changed background color */
            border-radius: 20px;
            /* Increased border-radius */
            box-shadow: 0 0 100px rgba(0, 0, 0, 0.1);
            /* Increased box-shadow */
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
            text-align: left;
            /* Align package name to the left */
        }

        .package-info p {
            font-size: 16px;
            color: #666;
            margin-bottom: 8px;
            text-align: left;
            /* Align package info to the left */
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

    if (!isset($_SESSION["username"])) {
        include ("common/headerLoggedIn.php");
    } else {
        include ("common/headerLoggedIn.php");
    }

    ?>

    <div class="spacer">a</div>
    <div class="spacer">a</div>
    <div class="spacer">a</div>

    <div class="package-details">
        <div class="package-image">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/12/e7/47/b5/this-sanctum-sanctorum.jpg?w=600&h=400&s=1"
                alt="Package Image">
        </div>
        <div class="package-info">
            <h2>Amritsar</h2>
            <p><b>Number of Days:</b> 8</p>
            <p><b>Description:</b> Amritsar, the spiritual heart of Sikhism, pulsates with a vibrant energy in Punjab,
                India. The crown jewel is the Harmandir Sahib, also known as the Golden Temple, a breathtaking spectacle
                with its gold-plated dome reflecting in the holy Amrit Sarovar pool. Here, immerse yourself in the
                peaceful serenity and witness the selfless service (langar) offered to all visitors. A short walk away,
                Jallianwala Bagh stands as a poignant reminder of a historical event. Delve deeper into Sikh history at
                the Akal Takht, the highest seat of Sikh authority. Beyond spiritual sites, Amritsar's bazaars overflow
                with colorful textiles and local handicrafts. Don't miss the historic Partition Museum chronicling the
                human cost of India's division. Foodies can indulge in Amritsar's rich culinary scene, savoring the
                iconic vegetarian dish "kulcha" or creamy "lassi." In the evenings, witness the electrifying Wagah
                Border Ceremony, a symbolic display of patriotism at the India-Pakistan border. Amritsar offers a unique
                blend of spiritual enlightenment, historical exploration, and cultural immersion, leaving a lasting
                impression.</p>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="destinationTrain">Origin:<p> </p></label>

                    <select id="destinationTrain" data-live-search="true" class="selectpicker form-control"
                        data-size="5" title="Select Destination Station" name="destination" required>
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
                        <input id="datetime3" type="text" class="inputDate form-control" placeholder="Select Date"
                            name="date" required />
                        <span class="input-group-addon">
                            <span class="fa fa-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
            <script>
                function showTransportInfo() {
                    var transport = document.getElementById("transport").value;
                    var transportInfoDiv = document.getElementById("transportInfo");

                    if (transport === "") {
                        transportInfoDiv.innerHTML = ''; // Clear the transport info
                    } else if (transport === "flight") {
                        transportInfoDiv.innerHTML = '<label for="flightName">Flight Name:</label><span>   Indigo</span><br><label for="hotelName">Hotel Name:</label><span>  Paradise</span><br> <label for="hotelName">Cost:</label><span> Rs 80000</span>';

                    } else if (transport === "train") {
                        transportInfoDiv.innerHTML = '<label for="trainName">Train Name:</label><span>  abc</span><br><label for="hotelName">Hotel Name:</label><span>  Taj</span> <br> <label for="hotelName">Cost:</label><span> Rs 40000</span>';
                    }
                    transportInfoDiv.classList.remove("hidden");
                }
            </script>
        </div>
    </div>

    <a href="locationDisplay.php?destination=Amritsar" class="buy-now-button">Buy Now</a>
    <div class="spacerLarge">.</div> <!-- just a dummy class for creating some space -->

    <?php include ("common/footer.php"); ?>
</body>

</html>