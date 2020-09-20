<?php

$api ="http://ws.audioscrobbler.com/2.0/?method=track.search&track=a&api_key=75564a2a37164bb6928f91322d0ba733&format=json";$chload = curl_init(); curl_setopt($chload, CURLOPT_HEADER, 0); curl_setopt($chload, CURLOPT_RETURNTRANSFER, 1);curl_setopt($chload, CURLOPT_URL, $api); curl_setopt($chload, CURLOPT_FOLLOWLOCATION, 1); curl_setopt($chload, CURLOPT_VERBOSE, 0); curl_setopt($chload, CURLOPT_SSL_VERIFYPEER, false); $responsepath = curl_exec($chload); curl_close($chload);
$curlfast = str_replace("opensearch:Query","openget","$curlfast");
$app_api_from_curl = json_decode($responsepath);

foreach ($app_api_from_curl->results->trackmatches->track as $appid){
echo "$appid->artist $appid->name";
echo "<p>";
}
?>
