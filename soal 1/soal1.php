<?php 

$input = fgets(STDIN);
$rows = str_split(trim($input));
$arr = array();
while (True) {
    $reset = False;
    $ind = 0;
    $index = 0;
    foreach ($rows as $row => $val) {
      if($rows[0] != $rows[$row]) {
         continue;
      } else {
          $reset = True;
          $arr[$index][0] = $rows[0];
          $arr[$index][1] = $rows[$row];
          break;
      }
    }
    if ( ! $reset ) {
        break; # break out of the while(true)
    }else{
        unset($rows[0]);
        sort($rows);
    }
    # otherwise the foreach loop is `reset`
}

print_r($arr);

?>