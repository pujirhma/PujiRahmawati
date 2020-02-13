<?php

function selection_sort($data){
  for($i=0; $i<count($data)-1; $i++) {
    $min = $i;
    for($j=$i+1; $j<count($data); $j++) {
             if ($data[$j]<$data[$min]) {
                   $min = $j;
              }
     }
    $data = swap_positions($data, $i, $min);
   }
 return $data;
}

function swap_positions($data1, $left, $right) {
    $backup_old_data_right_value = $data1[$right];
    $data1[$right] = $data1[$left];
    $data1[$left] = $backup_old_data_right_value;
    return $data1;
}
$no	= array(1,2,3,4,5,6);
$my_array = array(20, 100, 30, 15, 5,120);
"<br/>";
echo implode(', ',$no);
echo"<br/>";
echo implode(', ',selection_sort($my_array));