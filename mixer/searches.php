<?php 
    //grabs the parameters of the url ?user=
    $_GET['user'];
    $user = $_GET['user'];
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Mixer API - Statics Page</title>

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

            <h2>Mixer API</h2>

            <span>

                <h1>API List</h1>
	
                <br>
	
	            <h1>Chat Link</h1>
	            <input type="button" name="Submit" id="Submit" value="Open ME!" onclick="location.href='https://chisdealhdapi.000webhostapp.com/mixer/chat.php?user=<?php echo "$user";?>'">
	
	            <br><br><br>
	
		        <h1>Game title Link</h1>
		        <input type="button" name="Submit" id="Submit" value="Open ME!" onclick="location.href='https://chisdealhdapi.000webhostapp.com/mixer/gametitle.php?user=<?php echo "$user";?>'">
		
	            <br><br><br>
	
		        <h1>Live Status Link</h1>
		        <input type="button" name="Submit" id="Submit" value="Open ME!" onclick="location.href='https://chisdealhdapi.000webhostapp.com/mixer/livetitle.php?user=<?php echo "$user";?>'">
	
	            <br><br><br>
	
		        <h1>title Status Link</h1>
		        <input type="button" name="Submit" id="Submit" value="Open ME!" onclick="location.href='https://chisdealhdapi.000webhostapp.com/mixer/title.php?user=<?php echo "$user";?>'">
	            <br><br><br>
	
		        <h1>Video Player Link</h1>
		        <input type="button" name="Submit" id="Submit" value="Open ME!" onclick="location.href='https://chisdealhdapi.000webhostapp.com/mixer/video.php?user=<?php echo "$user";?>'">

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