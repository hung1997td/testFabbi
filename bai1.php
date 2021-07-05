<?php
function changeArr($arr) {
    $n =  count($arr)/ 3;
    $newArr=[];

    for( $i = 0, $j = 0; $i < $n, $j <= 3 * ($n - 1) ; $i++, $j+=3) {
        $newArr[$j] = $arr[$i];
        $newArr[$j + 1] = $arr[$i + $n];
        $newArr[$j + 2] = $arr[$i + 2 * $n];
    }
    return $newArr;
}
print_r(changeArr([1,5,9,4,6,9,6,9,8]));
