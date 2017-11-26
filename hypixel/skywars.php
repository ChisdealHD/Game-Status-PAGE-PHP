<?php 
    //grabs the parameters of the url ?user=
    $_GET['user'];
    $streamer = $_GET['user'];
    $url = "https://api.hypixel.net/player?key=APIKEY&name=$streamer";
    $content = file_get_contents($url);
    $json = json_decode($content, true);
    $name = $json['player']['playername'];
    $coins = $json['player']['stats']['SkyWars']['coins'];
    $survivedgames = $json['player']['stats']['SkyWars']['survived_players'];
    $wins = $json['player']['stats']['SkyWars']['wins'];
    $playedgames = $json['player']['stats']['SkyWars']['games'];
    $losses = $json['player']['stats']['SkyWars']['losses'];
    $quits = $json['player']['stats']['SkyWars']['quits'];
    $deaths = $json['player']['stats']['SkyWars']['deaths'];
    $kills = $json['player']['stats']['SkyWars']['kills'];
    $assists = $json['player']['stats']['SkyWars']['assists'];
    $souls = $json['player']['stats']['SkyWars']['soul_well'];
    $ahits = $json['player']['stats']['SkyWars']['arrows_hit'];
    $killstreak = $json['player']['stats']['SkyWars']['killstreak'];#
    $lastmode = $json['player']['stats']['SkyWars']['lastMode'];
    
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Hypixel API - Coming SOON</title>

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

                <h1>Name:</h1>
	            <p><?php echo "$name";?></p>
	            
	            <h1>Coins:</h1>
	            <p><?php echo "$coins";?></p>
	            
	            <h1>Survived Games:</h1>
	            <p><?php echo "$survivedgames";?></p>
	            
	            <h1>Wins:</h1>
	            <p><?php echo "$wins";?></p>
	            
	            <h1>Played Games:</h1>
	            <p><?php echo "$playedgames";?></p>
	            
	            <h1>Deaths:</h1>
	            <p><?php echo "$deaths";?></p>
	            
	            <h1>Quit Matches:</h1>
	            <p><?php echo "$quits";?></p>
	            
	            <h1>Kills:</h1>
	            <p><?php echo "$kills";?></p>
	            
	            <h1>Assists:</h1>
	            <p><?php echo "$assists";?></p>
	            
	            <h1>Souls Well:</h1>
	            <p><?php echo "$souls";?></p>
	            
	            <h1>Arrows Hits:</h1>
	            <p><?php echo "$ahits";?></p>
	            
	            <h1>Killstreak:</h1>
	            <p><?php echo "$killstreak";?></p>
	            
	            <h1>Last Mode:</h1>
	            <p><?php echo "$lastmode";?></p>

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