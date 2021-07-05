<?php
function sortArr($arr)
{
    $n = sizeof($arr);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $t = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $t;
            }
        }
    }
    $min_kc=[];
    for ($t = 0; $t < $n-1; $t++) {
        $min_kc[$t] = $arr[$t + 1] - $arr[$t];
    }
    $min=$min_kc[0];
    for ($z = 1; $z < $n-1; $z++) {
        if ($min_kc[$z] < $min) {
            $min = $min_kc[$z];
        }
    }
    $mangTo = [] ;
    $count = 0;
    $mangNho = []   ;
    for ($i = 0; $i < $n-1; $i++)  {
        if ($arr[$i + 1]-$arr[$i]==$min){
            $mangNho[0] = $arr[$i];
            $mangNho[1] = $arr[$i + 1];
            $mangTo[$count] = $mangNho;
            $count++;
            $mangNho=[];
        }
    }
    return $mangTo;
}
print_r(sortArr([1,8,56,9,87,42,57]));