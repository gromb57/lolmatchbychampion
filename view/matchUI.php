<?php

class MatchUI{
	static function noMatch() {
		echo '<div class="card blue-grey darken-1">';
			echo '<div class="card-content white-text">';
				echo '<span class="card-title">'.("No matches found.").'</span>';
			echo '</div>';
		echo '</div>';
	}

	static function render($match) {
		// see: https://developer.riotgames.com/docs/spectating-games
		$client_path = "C:\Riot Games\League of Legends\RADS\solutions\lol_game_client_sln\releases\0.0.1.74\deploy\League of Legends.exe";
		$maestro = "8394 LoLLauncher.exe";
		$params =  '"" "spectator spectator.euw1.lol.riotgames.com:80"';
		$encryptionKey = $match->observers->encryptionKey;
		$gameId = $match->gameId;
		$platformId = $match->platformId;

		$cmd = "$client_path $maestro $params $encryptionKey $gameId $platformId";

		echo '<div class="card blue-grey darken-1">';
			echo '<div class="card-content white-text">';
				echo '<span class="card-title">Game mode : '.$match->gameMode.'</span>';
				echo '<p>';
					echo 'Match start at : '.date("Y-m-d h:i:s", $match->gameStartTime).'<br/>';
					echo 'Match length : '.round($match->gameLength / 60).'\'<br/>';
					echo 'Launch the game : '.$cmd.'<br/>';
				echo '</p>';
			echo '</div>';
		echo '</div>';
	}
}
?>