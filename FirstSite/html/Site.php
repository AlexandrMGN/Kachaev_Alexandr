<?php
$me = 'Всем привет! Коротко о себе. Мне 40 лет. Образование высшее металлургическое. До этого обучения программированием не занимался. Мои хобби: спорт, компьютерные игры, кулинария.';
$hi =mb_substr($me, 0, 12);
?>
<?php
$opinion = 'Моё мнение о курсах: интересно, информативно.';
$arr = explode(' ',$opinion);
foreach ($arr as $key => &$value)
{
    if ($key % 2 == 0)
    {
        $value = "<span style='color: brown'>$value</span>";
    }
    else $value = "<span style='color: rebeccapurple'>$value</span>";
}
$opinion = implode(' ', $arr);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?
     date_default_timezone_set('Asia/Yekaterinburg');
     $time = date(G);
     echo date('G-i-s');
     if ($time >= 8 and $time < 20) {
    ?>
        <link rel="stylesheet" href="../styles/StyleSiteDay.css">
    <? }else {?>
        <link rel="stylesheet" href="../styles/StyleSiteNight.css">
    <?}?>
    </head>
<body class="body">
    <!--ШАПКА-->
    <?
    require_once 'headr.php'
    ?>
    <main>
        <!--РУЗЮМЕ-->
        <div class="resume">
            <img class="picture" src="../images/i.jpg" alt="Ops...">
            <div class="text1">
                    <h1 class="titlle">Качаев Александр Анатольевич
                    </h1>
                <div class="text2">
                    <p class="titlle">
                        <?echo "<span style='color: aqua'>$hi</span>", mb_substr($me, 12) ;?>
                    </p>
                    <p class="titlle">
                        <?echo $opinion;?>
                    </p>
                </div>
            </div>
        </div>
        <!--СОСТОЯНИЯ ВЕЩЕСТВА-->
        <h1 class="titlle">СОСТОЯНИЕ ВЕЩЕСТВА</h1>
        <div class="states">
            <div class="box1">
                <div class="crystal">
                    <img class="picture" src="../images/crystal.jpg" alt="Ops...">
                    <div class="text">
                        <p class="titlle">Твердое состояние
                        </p>
                    </div>
                </div>
                <div class="liquid">
                    <img class="picture" src="../images/liquid.jpg" alt="Ops...">
                    <div class="text">
                        <p class="titlle">Жидкое состояние
                        </p>
                    </div>
                </div>
            </div>
            <div class="box2">
                <div class="gas">
                    <img class="picture" src="../images/gas.jpg" alt="Ops...">
                    <div class="text">
                        <p class="titlle">Газообразное состояние
                        </p>
                    </div>
                </div>
                <div class="plasma">
                    <img class="picture" src="../images/plasma.jpg" alt="Ops...">
                    <div class="text">
                        <p class="titlle">Плазма
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--АТОМНОЕ СТРОЕНИЕ ВЕЩЕСТВА-->
        <h1 class="titlle">АТОМНОЕ СТРОЕНИЕ ВЕЩЕСТВА</h1>
        <div class="grid2">
            <div class="ci"><img class="picture" src="../images/structure crystal.jpg" alt="Ops...">
            </div>
            <div class="c">
                <p class="titlle">Атомное сроение твердого вещества
                </p>
            </div>
            <div class="li"><img class="picture" src="../images/structure liquid.jpg" alt="Ops...">
            </div>
            <div class="l">
                <p class="titlle">Атомное строение жидкость
                </p>
            </div>
            <div class="gi"><img class="picture" src="../images/structure gas.jpg" alt="Ops...">
            </div>
            <div class="g">
                <p class="titlle">Атомное строение газов
                </p>
            </div>
            <div class="pi"><img class="picture" src="../images/structure plasma.jfif" alt="Ops...">
            </div>
            <div class="p">
                <p class="titlle">Атомное строение плазмы
                </p>
            </div>
        </div>
    </main>
    <!---------------ПОДВАЛ------------------>
    <?
    require_once 'footer.php'
    ?>
</body>
</html>