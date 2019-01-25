<?php
$array = [5, 1, 4, 5, 1, 3, 2, 3];
$newArray = [];
$min = $array[0];
$max = $array[0];
$j = 0;
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] < $min) {
        $min = $array[$i];
    }
}
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $min) {
        $newArray[$j] = $min;
        $j++;
    }
}
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > $max) {
        $max = $array[$i];
    }
}
for ($k = 0; $k < count($array); $k++) {
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] > $min) {
            $newMin = $array[$i];
        }
    }
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < $newMin && $array[$i] > $min) {
            $newMin = $array[$i];
        }
    }
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $newMin && $min != $max) {
            $newArray[$j] = $newMin;
            $j++;
        }
    }
    $min = $newMin;
}
for ($i = 0; $i < count($array); $i++) {
    $array[$i] = $newArray[$i];
}
for ($i = 0; $i < count($array); $i++) {
    print $array[$i];
    print ' ';
}

?>