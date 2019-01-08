<?php 

// $input = fopen("php://stdin","r");
$hand = fgets(STDIN);
$han = trim($hand);
$hand_convert = str_split($han);
// print_r(array_unique($hand_convert));
function check(){
	foreach ($hand_convert as $key => $val) {
	if ($hand_convert[$key] === $hand_convert[$key-(-1)]) {
		break;
	}

	}
}


?>