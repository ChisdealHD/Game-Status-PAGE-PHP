<?php 
    //grabs the parameters of the url ?user=
    $_GET['user'];
    $streamer = $_GET['user'];
    $url = "https://api.hypixel.net/player?key=APIKEY&name=$streamer";
    $content = file_get_contents($url);
    $json = json_decode($content, true);
    $name = $json['player']['playername'];
    $exp = $json['player']['stats']['Bedwars']['Experience'];
    $coins = $json['player']['stats']['Bedwars']['coins'];
    $deaths = $json['player']['stats']['Bedwars']['deaths_bedwars'];
    $lost = $json['player']['stats']['Bedwars']['losses_bedwars'];
    $wins = $json['player']['stats']['Bedwars']['wins_bedwars'];
    $kills = $json['player']['stats']['Bedwars']['kills_bedwars'];
    $bedwarscrates = $json['player']['stats']['Bedwars']['bedwars_boxes'];
    $winstreak = $json['player']['stats']['Bedwars']['winstreak'];
    $played = $json['player']['stats']['Bedwars']['games_played_bedwars'];
    $bedsbroken = $json['player']['stats']['Bedwars']['beds_broken_bedwars'];
    $oneteamlost = $json['player']['stats']['Bedwars']['eight_one_losses_bedwars'];
    $twoteamlost = $json['player']['stats']['Bedwars']['eight_two_losses_bedwars'];
    $twoteamwins = $json['player']['stats']['Bedwars']['eight_two_wins_bedwars'];
    $threeteamlost = $json['player']['stats']['Bedwars']['four_three_losses_bedwars'];
    $threeteamwins = $json['player']['stats']['Bedwars']['four_three_wins_bedwars'];
    $fourteamlost = $json['player']['stats']['Bedwars']['four_four_losses_bedwars'];
    $fourteamwins = $json['player']['stats']['Bedwars']['four_four_wins_bedwars'];
?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Hypixel API - Statics Page</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/main.min.css">

    <link rel="icon" type="image/png" href="assets/images/favicon-32x32.png">

    <link rel="icon" type="image/png" href="assets/images/favicon-16x16.png">
    
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script>
window.setInterval("reloadIFrame();", 600000);

function reloadIFrame() {
 document.frames["Refresh"].location.reload();
}
</script> 

</head>

<body>

<div class="container">

    <div class="center">

        <div style="margin-top: 5em">

            <img src="assets/images/logo.png">

            <h2>Hypixel API</h2>

            <span>
                
                <h1>Hypixel - Bedwars Status</h1>
                
                
                <h1>Name:</h1>
	            <p><?php echo "$name";?></p>

                <h1>Experience:</h1>
	            <p><?php echo "$exp";?></p>
	            
	            <h1>Coins:</h1>
	            <p><?php echo "$coins";?></p>
                
                <h1>Total</h1>
	            
	            <h1>Total Deaths:</h1>
	            <p><?php echo "$deaths";?></p>
	            
	            <h1>Total Win:</h1>
	            <p><?php echo "$wins";?></p>
	            
	            <h1>Total Lost:</h1>
	            <p><?php echo "$lost";?></p>
	            
	            <h1>Total Kills:</h1>
	            <p><?php echo "$kills";?></p>
	            
	            <h1>Total Bedwars Crates:</h1>
	            <p><?php echo "$bedwarscrates";?></p>
	            
	            <h1>Total Win Streaks:</h1>
	            <p><?php echo "$winstreak";?></p>
	            
	            <h1>Total Bedwars Played:</h1>
	            <p><?php echo "$played";?></p>
	            
	            <h1>Total Beds Broken:</h1>
	            <p><?php echo "$bedsbroken";?></p>
	            
	            <h1>Match Thy Played:</h1>
	            
	            <h1>One Player Match Lost:</h1>
	            <p><?php echo "$oneteamlost";?></p>
	            
	            <h1>Two Player Match Lost:</h1>
	            <p><?php echo "$twoteamlost";?></p>
	            
	            <h1>Two Player Match Wins:</h1>
	            <p><?php echo "$twoteamwins";?></p>
	            
	            <h1>Three Player Match Lost:</h1>
	            <p><?php echo "$threeteamlost";?></p>
	            
	            <h1>Three Player Match Wins:</h1>
	            <p><?php echo "$threeteamwins";?></p>
	            
	            <h1>Four Player Match Lost:</h1>
	            <p><?php echo "$fourteamlost";?></p>
	            
	            <h1>Four Player Match Wins:</h1>
	            <p><?php echo "$fourteamwins";?></p>
	            

            </span>

        </div>

    </div>

</div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>