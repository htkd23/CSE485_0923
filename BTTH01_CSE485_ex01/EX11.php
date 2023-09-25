<?php
$array = array(1, 2, 3, 4, 5);

// Xóa phần tử thứ 3 trong mảng
unset($array[2]);

// Đánh lại các khóa của mảng
$array = array_values($array);

// Hiển thị mảng sau khi xóa và đánh lại khóa
print_r($array);
?>