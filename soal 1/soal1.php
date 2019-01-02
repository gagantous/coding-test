<?php 

$input = fgets(STDIN);
$rows = str_split(trim($input));
$arr = array();
$index = 0;

while (True) {
    $reset = False;
    $ind = 0;
    foreach ($rows as $row => $val) {
    if(!isset($rows[$row+1])){
        continue;
    }
      if($rows[0] !== $rows[$row+1]) {
        $reset = True;
        continue;
      } else {
          $reset = True;
          $arr[$index] = $rows[0];
          $index++;
          break;
      }
    }
    if (!$reset) {
        break; # break out of the while(true)
    }else{
        unset($rows[0]);
        $rows = array_values($rows);
    }
    # otherwise the foreach loop is `reset`
}

echo "{$arr[0]} \n";

?>