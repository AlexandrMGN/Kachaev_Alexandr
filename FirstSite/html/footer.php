<?php
date_default_timezone_set('Asia/Yekaterinburg');
$t = (strtotime (date('m.d.y')) - strtotime ("23.01.1982")) / (60*60*24);
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
<!--<body>-->
<footer class="footer">
    <div class="date">
         <span>Я родился
        <?
        echo "23.01.1982";
        ?>
        </span>
        <span>Сегодня
        <?
        echo date('m.d.y');
        ?>
        </span>
    </div>
    <span>Мне
         <?
         echo floor($t);
         ?> дней
        </span>
</footer>
<!--</body>-->
</html>
