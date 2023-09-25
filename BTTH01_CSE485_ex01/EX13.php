<?php
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

// Tính toán giá trị trung bình của mảng
$average = array_sum($numbers) / count($numbers);

// Liệt kê các số lớn hơn giá trị trung bình
$greaterThanAverage = [];
foreach ($numbers as $number) {
    if ($number > $average) {
        $greaterThanAverage[] = $number;
    }
}

// Liệt kê các số nhỏ hơn hoặc bằng giá trị trung bình
$lessThanOrEqualAverage = [];
foreach ($numbers as $number) {
    if ($number <= $average) {
        $lessThanOrEqualAverage[] = $number;
    }
}

// Hiển thị kết quả
echo "Average: " . $average . "\n";
echo "Numbers greater than average: ";
print_r($greaterThanAverage);
echo "Numbers less than or equal to average: ";
print_r($lessThanOrEqualAverage);
?>