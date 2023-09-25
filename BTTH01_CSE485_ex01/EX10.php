<?php
$arr2 = ['1', 'b', 'c', 'd'];
$arr3 = ['a', 0, null, false];

function convertToUppercaseArray($array) {
    return array_map(function($item) {
        if (is_string($item)) {
            return strtoupper($item);
        }
        return $item;
    }, $array);
}

$result2 = convertToUppercaseArray($arr2);
$result3 = convertToUppercaseArray($arr3);

echo "Result 2:<br> ";
print_r($result2);
"<br>";
echo "Result 3:<br> ";
print_r($result3);
?>