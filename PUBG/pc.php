<?php 
    //grabs the parameters of the url ?user=
    $_GET['user'];
    $streamer = $_GET['user'];
    $url = "https://chisdealhdapi.000webhostapp.com/PUBG/apipc.php?user=$streamer";
    $content = file_get_contents($url);
    $json = json_decode($content, true);
    $name = $json['nickname'];
    $id = $json['steamId'];
    $soloeuwins = $json['stats']['0']['stats']['5']['value'];
    $soloeulost = $json['stats']['0']['stats']['9']['value'];
    $duoeuwins = $json['stats']['1']['stats']['5']['value'];
    $duoeulost = $json['stats']['1']['stats']['9']['value'];
    $squardeuwins = $json['stats']['2']['stats']['5']['value'];
    $squardeulost = $json['stats']['2']['stats']['9']['value'];
    $soloaggwins = $json['stats']['3']['stats']['5']['value'];
    $soloagglost = $json['stats']['3']['stats']['9']['value'];
    $duoaggwins = $json['stats']['4']['stats']['5']['value'];
    $duoagglost = $json['stats']['4']['stats']['9']['value'];
    $squardaggwins = $json['stats']['5']['stats']['5']['value'];
    $squardagglost = $json['stats']['5']['stats']['9']['value'];
    $duofppeuwins = $json['stats']['6']['stats']['5']['value'];
    $duofppeulost = $json['stats']['6']['stats']['9']['value'];
    $duofppaggwins = $json['stats']['6']['stats']['5']['value'];
    $duofppagglost = $json['stats']['6']['stats']['9']['value'];
?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>PUBG API - Statics Page</title>

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

            <h2>PUBG API</h2>

            <span>
                
                <h1>PUBG API - Status</h1>
                
                
                    <h1>Name:</h1>
	            <p><?php echo "$name";?></p>
	            
	            <h1>ID:</h1>
	            <p><?php echo "$id";?></p>
                
                <h1>Total</h1>
	            
	            <h1>Solo Eroupe Wins:</h1>
	            <p><?php echo "$soloeuwins";?></p>
	            
	            <h1>Solo Eroupe Lost:</h1>
	            <p><?php echo "$soloeulost";?></p>
	            
	            
	            <h1>Duo Eroupe Wins:</h1>
	            <p><?php echo "$duoeuwins";?></p>
	            
	            <h1>Duo Eroupe Lost:</h1>
	            <p><?php echo "$duoeulost";?></p>
	            
	            <h1>Squard Eroupe Wins:</h1>
	            <p><?php echo "$squardeuwins";?></p>
	            
	            <h1>Squard Eroupe Lost:</h1>
	            <p><?php echo "$squardeulost";?></p>
	            
	            <h1>Solo agg Wins:</h1>
	            <p><?php echo "$soloaggwins";?></p>
	            
	            <h1>Solo agg Lost:</h1>
	            <p><?php echo "$soloagglost";?></p>
	          
	            <h1>Duo agg Wins:</h1>
	            <p><?php echo "$duoaggwins";?></p>
	            
	            <h1>Duo agg Lost:</h1>
	            <p><?php echo "$duoagglost";?></p>
	            
	            <h1>Squard agg Wins:</h1>
	            <p><?php echo "$squardaggwins";?></p>
	            
	            <h1>Squard agg Lost:</h1>
	            <p><?php echo "$squardagglost";?></p>

                 <h1>FFP Matches</h1>
	            <h1>duoFPP agg Win:</h1>
	            <p><?php echo "$duofppaggwins";?></p>

	            <h1>duoFPP agg Lost:</h1>
	            <p><?php echo "$duofppagglost";?></p>

	            <h1>duoFPP Eroupe Win:</h1>
	            <p><?php echo "$duofppeuwins";?></p>

	            <h1>duoFPP Eroupe Lost:</h1>
	            <p><?php echo "$duofppeulost";?></p>	            

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