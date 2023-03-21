<?php
$arr = [790, 483, 281, 224, 198, 60, 698, 400, 709, 168];

function bubbleSort($arr)
{
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // Swap the values
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

function getAverage($arr)
{
    $sum = 0;
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        $sum += $arr[$i];
    }
    return $sum / $n;
}

echo 'sorting : <br>';
print_r(bubbleSort($arr));
echo '<br>';
echo 'lowest number : <br>';
print_r(bubbleSort($arr)[0]);
echo '<br>';
echo 'average number : <br>';
print_r(getAverage($arr));
