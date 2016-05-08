<?php

class ChampionsUI{
	static function iconize($champion) {
		//print_r($champion);
		echo '<div class="col s2">';
		echo '<label for="champion'.$champion->id.'">';
		echo '<span class="mbc_champname">'.$champion->name.'</span><br/>';
		echo '<img src="'.Champions::image($champion->name).'"/>';
		echo '<input type="checkbox" class="mbc_champcheckbox" id="champion'.$champion->id.'" name="champion[]" value="'.$champion->id.'" />';
		echo '<br/>';
		echo '<span>'.$champion->title.'</span></div>';
		echo '</label>';
	}
}
?>