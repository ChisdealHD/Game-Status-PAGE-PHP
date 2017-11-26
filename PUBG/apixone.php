<?php

$_GET['user'];
$streamer = $_GET['user'];
 
$ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "https://api.pubgtracker.com/v2/profile/xboxone/$streamer");
    curl_setopt($ch, CURLOPT_HTTPHEADER, [ 'TRN-Api-Key:  APIKEY']);

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);
        echo $output;
?>
