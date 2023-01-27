<?php
    $title = "Районы";
    require "header.php";
?>

<h1 class="display-3 text-center top_text">Таблица с информацией о количестве ветеринарных клиник по районам</h1>
<div class ="par">
<table border="3px" bordercolor = "black" bgcolor = "white" width = "550" align="center" class="table">
        <?php require "districts.php"; ?>
    </table>
    <h1 class="top_text"></h1>  
</div>
<?php
    require "footer.php";
?>