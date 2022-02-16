<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3> Задача 4</h3>
<?
function a($arr){
    $arr = array();
for($i = 0; $i <= 10; $i ++){
    $arr[$i] = mt_rand(1, 10);
}
print_r($arr);
}
a($arr);
?>
<h3> Задача 5</h3>
<?
$arr1 = [2, 5, 1, 3, 6, 4, 5, 9, 3, 7];
function b($arr1)
{
for($i = 0; $i < 10; $i ++)
{
$summ += $arr1[$i];
$sra = $summ / count($arr1);
}
return $sra;
}
echo b($arr1);
?>
<h3> Задача 6</h3>
<?
$str = 'Давным давно в далёкой далёкой галактике.';
function c($str)
{
    $str = preg_replace('/[^\w\s]/u', '', $str);
    $str = mb_strtolower($str);
    $cw = str_word_count($str, 0, 'йцукеёнгшщзхфывапролджэячсмитьбю');
    echo $cw;
}
c($str);
?>
<h3> Задача 7</h3>
<?
for($i=0; $i<=9; $i++);
function d($fib)
{
   if($fib == 0)
       return 0;
    if($fib == 1)
        return 1;
    else
    {
return d($fib-1) + d($fib-2);
}
}
echo d($i);
?>
</body>
</html>