<?php 
$array = array(1,9,20,8,7,6,100,20,29);
print_r($array)."</br>";
$loop = false;

do{
	$status = false;
		for($i=0;$i<count($array)-1; $i++ ){
			if( $array[$i] > $array[$i + 1] ){
				list( $array[$i+1],$array[$i] ) = array($array[$i],$array[$i+1]);
				$status = true;
				}
			}
}
while($status);

print_r($array);

?>