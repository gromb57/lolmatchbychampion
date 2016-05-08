<?php
use LeagueWrap\Api;

$api      = new Api(RIOT_API_KEY);            // Load up the API
$api->setRegion('euw');  // Set the region to 'euw'
//$api->remember();     // Enable cache with the default value for each API call.
?>