<?php 
    //grabs the parameters of the url ?user=
    $_GET['user'];
    $streamer = $_GET['user'];
    $url = "https://api.hypixel.net/player?key=APIKEY&name=$streamer";
    $content = file_get_contents($url);
    $json = json_decode($content, true);
    $name = $json['player']['playername'];
    $exp = $json['player']['networkExp'];
    $karma = $json['player']['karma'];
    $RecentGameType = $json['player']['mostRecentGameType'];
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

                <h1>Name:</h1>
	            <p><?php echo "$name";?></p>

	            <h1>EXP:</h1>
	            <p><?php echo "$exp";?></p>
	            
	            <h1>Karma:</h1>
	            <p><?php echo "$karma";?></p>
	            
	            <h1>Resent Game:</h1>
	            <p><?php echo "$RecentGameType";?></p>

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