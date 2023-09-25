<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];

// Lấy giá trị = 3 với key là 'b'
$value1 = $a['b']['o']['b'];
echo "Giá trị = $value1 với key là 'b'\n";

// Lấy giá trị = 1 với key là 'c'
$value2 = $a['a']['c'];
echo "Giá trị = $value2 với key là 'c'\n";

// Lấy thông tin của phần tử có key là 'a'
$info = $a['a'];
echo "Thông tin của phần tử có key là 'a':\n";
print_r($info);
?>