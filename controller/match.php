<?php
class Match{
	/**
	* @param champions_ids : (array of string)
	*/
	static function render($champions_ids) {
		global $api;

		$featuredgames = $api->featuredgames();
		$games = $featuredgames->featuredGames();

		for($i = 0, $size = count($champions_ids); $i < $size; $i++) {
			$champion = Champions::getById($champions_ids[$i]);
			ChampionsUI::iconize($champion);
			echo "<hr/>";
			$matches = self::getByChampion($games, $champions_ids[$i]);

			//var_dump($matches);
			if( empty($matches) ){
				MatchUI::noMatch();
			}else{
				for($j = 0, $nb = count($matches); $j < $nb; $j++) {
					MatchUI::render($matches[$i]);
				}
			}
		}
	}

	/**
	* @param id: (string) champion’s id
	* @return (???)
	*/
	static function getByChampion($games, $id) {
		$matches = [];

		for($i = 0, $size = count($games); $i < $size; $i++) {
			$participants = $games[$i]->participants;
			//var_dump($participants);

			foreach ($participants as $key => $participant) {
				//var_dump($participant);

				if( $participant->championId == $id ) {
					$matches[] = $games[$i];
					break;
				}
			}
		}

		return $matches;
	}
}
?>