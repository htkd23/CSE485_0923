<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];

// Lấy phần tử đầu tiên và phần tử cuối cùng
$firstElement = reset($numbers);
$lastElement = end($numbers);

// Tìm số lớn nhất, số nhỏ nhất, tổng giá trị
$minValue = min($numbers);
$maxValue = max($numbers);
$sumValues = array_sum($numbers);

// Sắp xếp mảng theo chiều tăng và giảm giá trị
$ascendingValues = $numbers;
sort($ascendingValues);
$descendingValues = $numbers;
rsort($descendingValues);

// Sắp xếp mảng theo chiều tăng và giảm key
$ascendingKeys = $numbers;
ksort($ascendingKeys);
$descendingKeys = $numbers;
krsort($descendingKeys);

// Hiển thị kết quả
echo "First Element: " . $firstElement . "\n";
echo "Last Element: " . $lastElement . "\n";
echo "Minimum Value: " . $minValue . "\n";
echo "Maximum Value: " . $maxValue . "\n";
echo "Sum of Values: " . $sumValues . "\n";
echo "Ascending Values: <br>";
print_r($ascendingValues);
echo "Descending Values: <br>";
print_r($descendingValues);
echo "Ascending Keys: <br>";
print_r($ascendingKeys);
echo "Descending Keys: <br>";
print_r($descendingKeys);
?>