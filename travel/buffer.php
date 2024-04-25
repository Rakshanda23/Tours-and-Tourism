<?php 
session_start();
if(!isset($_SESSION["username"]))
{
    header("Location:blocked.php");
    $_SESSION['url'] = $_SERVER['REQUEST_URI']; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Payment | tourism_management</title>
    <link href="css/main.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php include("common/headerLoggedIn.php"); ?>
        
    <!--<div class="col-sm-3"></div>-->
        
    <div class="spacer">a</div>
    <div class="col-sm-12 paymentWrapper">
        
    <div class="headingOne">
				
				Payment
				
			</div>
            <center><h2> Bill : <?php echo $_GET["cost"] ?></h2></center>

    <div class="col-sm-3"></div>
    
    <div class="col-sm-6">
        
        <div class="boxCenter">
        
        <div class="col-sm-12 tag">
            
            Card Number:
            
        </div>
        
        <div class="col-sm-12">
            
            <input type="text" class="input" name="cardNumber" placeholder="Enter the card number" id="cardNumber"/>
            
        </div>
        
        <div class="col-sm-12 tag">
            
            Name on Card:
            
        </div>
        
        <div class="col-sm-12">
            
            <input type="text" class="input" name="nameOnCard" placeholder="Enter the name of the card holder" id="nameOnCard"/>
            
        </div>
        
        <div class="col-sm-6 tag">
            
            CVV:
            
        </div>
        
        <div class="col-sm-6 tag">
            
            Expiry:
            
        </div>
        
        <div class="col-sm-6">
            
            <input type="password" class="inputSmall" name="cvv" placeholder="CVV" id="cvv"/>
            
        </div>
        
        <div class="col-sm-6">
            
            <input type="text" class="inputSmall" name="expiry" placeholder="MM/YY" id="cardExpiry"/>
        </div>
        <div class="col-sm-6 tag"><input type="submit" class="paymentButton" value="Pay Now"></div>
            </div>
        </div>
       
    </div> <!-- paymentWrapper -->
    <div class="spacerLarge">.</div>
    <?php include("common/footer.php"); ?>
</body>
</html>
