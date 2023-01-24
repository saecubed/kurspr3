<?php
    $title = "Карта площадок";
    require "header.php";
?>

<div class = "in"> 
    <h1 class="display-3 text-center top_text">Карта ветеринарных клиник</h1>
    <h1 class="display-5 text-center">Найдите удобную для Вас</h1>

    <a class="btn btn-primary" href="map.php" role="button">Все клиники</a>
    <a class="btn btn-primary" href="mapEveryDay.php" role="button">Клиники, работающие каждый день</a>
    <a class="btn btn-primary" href="mapEveryHour.php" role="button">Клиники, работающие круглосуточно</a>

    <div class="row"> 
        <div class="col-lg-11 mb-7">
            <div class="map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3ca7f320cd9fef9d83e1791f190ef056831ccc20ac0ceca45d8a877e82b984e6&amp;width=879&amp;height=453&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </div>
</div>


<?php
    require "footer.php";
?>

