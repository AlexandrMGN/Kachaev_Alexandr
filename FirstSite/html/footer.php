<?php
function c()
{
    date_default_timezone_set('Asia/Yekaterinburg');
    $t = (strtotime(date('m.d.y')) - strtotime("23.01.1982")) / (60 * 60 * 24);
    echo floor($t);
}
?>
<?php
function d($site)
{
    $site = preg_replace('/[^\w\s]/u', '', $site);
    $site = mb_strtolower($site);

    $vl = ['й', 'у', 'е', 'ё', 'ы', 'а', 'о', 'э', 'я', 'и', 'ю', 'e', 'y', 'u', 'i', 'o', 'a'];
    $cl = mb_strlen($site);
    $ccl = mb_strlen(str_replace($vl, '', $site));
    $cvl = $cl - $ccl;
    echo "<span>Колличество гласных букв</span>" . $cvl;
}
function e($site){
    $site = preg_replace('/[^\w\s]/u', '', $site);
    $site = mb_strtolower($site);
    $cw = str_word_count($site, 0, 'йцукенгшщзхфывапролджэячсмитьбю');
    echo "<span>Колличество слов</span>" . $cw;
}


?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../styles/footerstyle.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<footer class="footer">
    <div class="date">
         <span>Я родился
        <?
        echo "23.01.1982";
        ?>
        </span>
        <span>Сегодня
        <?
        echo date('d.m.y');
        ?>
        </span>
    </div>
    <span>Дней с даты моего рождения
         <?
         c();
         ?> дней
        </span>
    <?
    d($site);
    e($site);
    ?>
</footer>
</html>
