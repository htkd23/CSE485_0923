<?php
$arr2 = ['1', 'B', 'C', 'E'];
$arr3 = ['a', 0, null, false];

function convertToLowercaseArray($array) {
    foreach ($array as &$item) {
        if (is_string($item)) {
            $item = strtolower($item);
        }
    }
    return $array;
}

$result2 = convertToLowercaseArray($arr2);
$result3 = convertToLowercaseArray($arr3);

echo "Result 2: ";
print_r($result2);
echo "Result 3: ";
print_r($result3);
?>