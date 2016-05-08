<?php

class ChampionsUI{
	static function iconize($champion) {
		//print_r($champion);
		echo '<div><img src="'.Champions::image($champion->name).'"/><span>'.$champion->name." ".$champion->title.'</span></div>';
		echo "<br/><br/>";
	}
}
?>