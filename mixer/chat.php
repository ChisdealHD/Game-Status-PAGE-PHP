<?php 
    //grabs the parameters of the url ?user=
    $_GET['user'];
    $streamer = $_GET['user'];
    $url = "https://mixer.com/api/v1/channels/$streamer";
    $content = file_get_contents($url);
    $json = json_decode($content, true);
    $id = $json['id'];
    $host1 = $json['hosteeId'];
	$name = $json['hosteeId'] == true ? $host1 : $id;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chat LIVE PAGE!!</title>

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
window.setInterval(reloadIFrame, 60*1000);

function reloadIFrame() {
 var frame = document.getElementById('Refresh');
var tmp = frame.src;
frame.src = '';
frame.src = tmp;
}
</script> 
	
</head>

<body>
    <!--<script>setTimeout(function(){ location.reload() ;},600000);</script>-->
	<iframe id="Refresh" src="https://mixer.com/embed/chat/<?php echo "$name";?>" width="380" height="500"></iframe>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
