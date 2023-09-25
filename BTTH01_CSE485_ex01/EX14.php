<?php
$array1 = [
    [77, 87],
    [23, 45]
];
$array2 = [
    'giá trị 1', 'giá trị 2'
];

$result = [];

foreach ($array1 as $key => $value) {
    $result[$key] = array_merge([$array2[$key]], $value);
}

print_r($result);
?>