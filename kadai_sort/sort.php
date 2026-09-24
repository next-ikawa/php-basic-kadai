<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
<?php
// ソートする関数を作る
function sort_2way(&$array, $order) {
    if ($order == true) {
        sort($array);  // 小さい順
    } else {
        rsort($array); // 大きい順
    }
}

// ソートする配列を宣言
$nums = [15, 4, 18, 23, 10 ];

// 1. 昇順（小さい順）
echo "昇順にソートします。<br>";
sort_2way($nums, true);

foreach ($nums as $num) {
    echo $num . "<br>";
}

// 2. 降順（大きい順）
echo "降順にソートします。<br>";
sort_2way($nums, false);

foreach ($nums as $num) {
    echo $num . "<br>";
}
?>
    </p>
</body>

</html>