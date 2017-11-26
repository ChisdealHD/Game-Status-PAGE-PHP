<?php 
    //grabs the parameters of the url ?user=
    $_GET['user'];
    $streamer = $_GET['user'];
    $url = "http://api.bf3stats.com/pc/player/player=$streamer";
    $content = file_get_contents($url);
    $json = json_decode($content, true);
    $name = $json['name'];
    $tag = $json['tag'];
    $rank = $json['stats']['rank']['nr'];
    $score = $json['stats']['scores']['score'];
    $award = $json['stats']['scores']['award'];
    $unlock = $json['stats']['scores']['unlock'];
    $rankscore = $json['stats']['rank']['score'];
    $kills = $json['stats']['global']['kills'];
    $wins = $json['stats']['global']['wins'];
    $lost = $json['stats']['global']['losses'];
    $killassists = $json['stats']['global']['killassists'];
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>BattleField 3 API - PC</title>

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

            <img src="assets/images/logo.png" width="300" height="100">

            <h2>BattleField 3 API</h2>

            <span>

                <h1>Name:</h1>
	            <p><?php echo "$name";?></p>
	            
	            <h1>Tag:</h1>
	            <p><?php echo "$tag";?></p>

	            <h1>Rank:</h1>
	            <p><?php echo "$rank";?></p>
	            
	            <h1>Score:</h1>
	            <p><?php echo "$score";?></p>
	            
	            <h1>Award:</h1>
	            <p><?php echo "$award";?></p>
	            
	            <h1>Unlock:</h1>
	            <p><?php echo "$unlock";?></p>
	            
	            <h1>RankScore:</h1>
	            <p><?php echo "$rankscore";?></p>
	            
	            <h1>Kills:</h1>
	            <p><?php echo "$kills";?></p>
	            
	            <h1>Wins:</h1>
	            <p><?php echo "$wins";?></p>
	            
	            <h1>Lost:</h1>
	            <p><?php echo "$lost";?></p>
	            
	            <h1>Kill Assists:</h1>
	            <p><?php echo "$killassists";?></p>

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