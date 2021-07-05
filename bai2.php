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
    return $arr[$n - 1] + $arr[$n - 2];
}

print_r(sortArr([1,5,9,4]));