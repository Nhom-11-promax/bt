<?php
$a = 2;
$b = 3;
function Sum()
{
    $c = 0;
    global $a, $b;
    $c = $a + $b;
    $b = $c;
    echo $c . "<br>";
}
Sum();
echo $b . "<br>";
$d = 7;
echo "Hôm nay là thứ " . $d . "<br>";
$arr = array("chung cứt", "cường súc vật");
foreach ($arr as $ten) {
    echo $ten . "<br>";
}
;
function printt()
{
    for ($i = 1; $i <= 200; $i++) {
        if ($i % 2 == 0) {
            echo "<b><font color=red>" . $i . "</font></b>";
        } else {
            echo "<b><font color=blue>" . $i . "</font></b>";
        }
    }
}
printt();
function normalize($st)
{
    // Loại bỏ khoảng trắng ở hai đầu chuỗi
    $st = trim($st);
    // Khoảng trắng duy nhất    
    $st = preg_replace('/\s+/', ' ', $st);

    return $st;
}

$st = "   Đây   là    một    đoạn    văn     bản    ";
echo normalize($st);

// Chèn tệp tin timSach.php
require_once ("timSach.php");
?>