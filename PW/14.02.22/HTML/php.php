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
<h2> Страница 13</h2>
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
<h2> Страница 14</h2>
<h3> Задача 1</h3>
<?
$arr2 = [1, 2, 3, 4, 5, 6, 7, 8, 9,];
function e($arr2)
{
for($i = 0; $i < 9; $i ++)
{
    $arr2[$i] = mt_rand(1, 9);
}
print_r($arr2);
}
echo e($arr2);
?>
<h3> Задача 2</h3>
<?
$str1 = 'HTML, CSS, PHP, BITRIX';
function j($str1)
{
    $cw1 = str_word_count($str1, 0, 'QWERTYUIOPASDFGHJKLZXCVBNM');
    echo $cw1;
}
j($str1);
?>
<h3> Задача 3</h3>
<?
function i($str1)
{
    $str3 = strrev($str1);
    echo $str3;
}
i($str1);
?>
<h3> Задача 4</h3>
<?
function p($str1)
{
    $str3 = mb_strlen($str1);
    echo $str3;
}
p($str1);
?>
<h3> Задача 5</h3>
<?
function t($str1)
{
    $str1 = str_replace(' ', '', $str1);
    $str1 = preg_replace('/[^\w\s]/u', '', $str1);
    $str1 = preg_split('//u', $str1, NULL, PREG_SPLIT_NO_EMPTY);
    foreach ($str1 as $value)
   {
       echo $value . "<br>";
   }
}
t($str1);
?>
</body>
</html>