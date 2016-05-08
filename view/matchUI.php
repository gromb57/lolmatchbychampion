<?php

class MatchUI{
	static function noMatch() {
		echo "<p>".("No matches found.")."</p>";
	}

	static function render($match) {
		$client_path = "C:\Riot Games\League of Legends\RADS\solutions\lol_game_client_sln\releases\0.0.1.74\deploy\League of Legends.exe";
		$maestro = "8394 LoLLauncher.exe";
		$params =  '"" "spectator spectator.euw1.lol.riotgames.com:80"';
		$encryptionKey = $match->observers->encryptionKey;
		$gameId = $match->gameId;
		$platformId = $match->platformId;

		$cmd = "$client_path $maestro $params $encryptionKey $gameId $platformId";
var_dump($match);
		echo "<p>Launch the game : $cmd</p>";
	}
}
?>