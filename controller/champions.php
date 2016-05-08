<?php
class Champions{
	/**
	* @param id: (string) champion’s id
	* @return (object) Champion
	*/
	static function getById($id) {
		global $api;

		$staticData = $api->staticData();
		$champion = $staticData->getChampion($id);

		return $champion;
	}

	static function render() {
		global $api;

		//$champion = $api->champion();
		//$champions = $champion->all();

		$staticData = $api->staticData();
		$champions = $staticData->getChampions();

		for($i = 0, $size = count($champions); $i < $size; $i++) {
			$champ = $champions[$i]; //$staticData->getChampion($champions[$i]->id);
			$name = $champ->name;
			if( !empty($name) ) {
				ChampionsUI::iconize($champ);
			}
		}
	}

	/**
	* @param name: (String) champion’s name
	* @return (String) fixed name, used to get static data (eg. image)
	*/
	static function fixname($name) {
		$name = str_replace(" ", "", $name);
		$name = str_replace(".", "", $name);
		$name = str_replace("'", "", $name);

		if( $name == "LeBlanc" ){ $name = "Leblanc"; }
		else if( $name == "Fiddlesticks" ){ $name = "FiddleSticks"; }
		else if( $name == "ChoGath" ){ $name = "Chogath"; }
		else if( $name == "Wukong" ){ $name = "MonkeyKing"; }
		else if( $name == "KhaZix" ){ $name = "Khazix"; }

		return $name;
	}

	/**
	* @param name: (String) champion’s name
	* @return (String) URL of champion’s square icon  
	*/
	static function image($name) {
		$name = self::fixname($name);

		return "https://ddragon.leagueoflegends.com/cdn/6.9.1/img/champion/".$name.".png";
	}
}
?>