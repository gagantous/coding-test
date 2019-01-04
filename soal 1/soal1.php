<?php 

$input = fgets(STDIN);
$split = str_split($input);

$a = array();
for ($i=0; $i < count($split); $i++) { 
   $check = in_array($split[$i],$a);
    if($check) {
        $char = $split[$i];
        break;
    }else{
        $a[] = $split[$i];
    }
}

echo $char."\n";

?>