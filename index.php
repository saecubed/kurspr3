<?php
    $title = "Главная";
    require "header.php";
?>

<h1 class="display-3 text-center top_text">Таблица с информацией о ветеринарных клиниках</h1>
<div class="container-fluid text-center">
    <div class="row">
        <form action="result.php">
            <input type="text" name="search" class="form-control w-50 p-3 container-fluid text-center mt-3" placeholder="Поиск">
            <button type="submit" class="btn mt-1 text-light find-button" style="background-color:#13085b">Найти</button>
        </form>
    </div>
</div>
<div class ="par">
<table border="3px" bordercolor = "black" bgcolor = "white" width = "550" align="center" class="table">
        <?php require "table.php"; ?>
    </table>
</div>
<?php
    require "footer.php";
?>