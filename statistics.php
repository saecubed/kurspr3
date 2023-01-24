<?php
    $title = "Районы";
    require "header.php";
?>

<h1 class="display-3 text-center top_text">Таблица с информацией о ветеринарных клиниках по районам</h1>
<div class ="par">
<table border="3px" bordercolor = "black" bgcolor = "white" width = "550" align="center" class="table">
        <?php require "districts.php"; ?>
    </table>
</div>
<?php
    require "footer.php";
?>