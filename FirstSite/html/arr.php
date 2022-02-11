<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../styles/arrstyle.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--ШАПКА-->
<?
require_once 'headr.php'
?>
<div class="grid">
    <div class="a">
        <h1>Задача № 1 </h1>
        <p>Числовая последовательность</p>
<?
for ($a = 5; $a <= 13; $a++) {
  echo "$a" . "<br>"  ;
}
?>
    </div>
    <div class="a">
        <h1>Задача № 2 </h1>
        <h3>Решение через while </h3>
<?
    $num = 1000;
    $i= 0;
while($num>50) {
    $num /= 2;
    $i++;
    $a=$i+1;
}
    echo "Число = $num <br> Количество итерации = $a";
?>
            <h3>Решение через for </h3>
<?for ($num=1000, $i= 0; $num>50; $num/=2, $i++);
    $a=$i+1;
    echo "Число = $num <br> Количество итерации = $a";
?>
    </div>
    <div>
            <h1>Задача № 3 </h1>
        <h3>Решение через arr </h3>
<?
    $i = mt_rand(0,10);
    echo "Число i = " . $i . "<br>";
    $a = "0 1 2 3 4 5 6 7 8 9 10";
    $b = "0 1 2 3 4 5 6 7 8 9";
    $c = "0 1 2 3 4 5 6 7 8";
    $d = "0 1 2 3 4 5 6 7";
    $e = "0 1 2 3 4 5 6";
    $g = "0 1 2 3 4 5";
    $k = "0 1 2 3 4";
    $l = "0 1 2 3";
    $m = "0 1 2";
    $n = "0 1";
    $o = "0";
    $arr = [$a,$b,$c,$d,$e,$g,$k,$l,$m,$n,$o];
    echo "Строка: " . $arr[$i];
?>
        <h3>Решение через for </h3>
        <?
        $i = mt_rand(0,10);
        $c = 10-$i;
        echo "Число i = " . $i . "<br> Строка: ";
        for ($a=0, $b=0; $b=10-$a, $a<=$c; $a++)
            echo $a;
        ?>
    </div>
</div>
<!---------------ПОДВАЛ------------------>
<?
require_once 'footer.php'
?>
</body>
</html>
