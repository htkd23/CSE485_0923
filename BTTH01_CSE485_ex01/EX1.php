<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];

// Tính tổng
$tong = array_sum($arrs);
echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $tong . "<br>";

// Tính tích
$tich = array_product($arrs);
echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . $tich . "<br>";

// Tính hiệu
$hieu = $arrs[0] - array_sum(array_slice($arrs, 1));
echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = " . $hieu . "<br>";

// Tính thương
$thuong = $arrs[0];
for ($i = 1; $i < count($arrs); $i++) {
    $thuong /= $arrs[$i];
}
echo "Thương các phần tử = " . implode(" / ", $arrs) . " = " . $thuong . "<br>";
?>
