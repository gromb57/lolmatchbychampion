<?php
class Summoner{
	static function info($nickname) {
		$summonerApi = $api->summoner();           // Load up the summoner request object.
		$summoner  = $summonerApi->info($nickname); // Get the information about this user.

		//$summoner = $summoner->info(74602);      // same thing as above, just to show that an id will work

		echo $summoner->summonerLevel."<br/>";
		echo $summoner->id."<br/>";
		echo $summoner->name."<br/>";
		echo $summoner->profileIconId."<br/>";
		echo $summoner->revisionDate."<br/>";
		echo $summoner->revisionDateStr."<br/>";
	}

	static function infoById($id) {
		$summonerApi = $api->summoner();           	// Load up the summoner request object.
		$summoner  = $summonerApi->info($id);		// same thing as above, just to show that an id will work   

		echo $summoner->summonerLevel."<br/>";
		echo $summoner->id."<br/>";
		echo $summoner->name."<br/>";
		echo $summoner->profileIconId."<br/>";
		echo $summoner->revisionDate."<br/>";
		echo $summoner->revisionDateStr."<br/>";
	}	
}
?>