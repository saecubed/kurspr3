<?php
    $title = "Результат поиска";
    require "header.php";
?>

<h1 class="display-5 text-center top_text">Результат поиска</h1>

<?php
    $connect = mysqli_connect("std-mysql", "std_1987_kurspr3", "12345678", "std_1987_kurspr3");

    $inputSearch = $_REQUEST['search']; 
    
    $sql = "SELECT FullName, Services, Address, PublicPhone FROM `vetclinics` WHERE `FullName` LIKE '%$inputSearch%' OR `Address` LIKE '%$inputSearch%'  OR `Services` LIKE '%$inputSearch%'";
     $result = $connect -> query($sql);

    function doesItExist(array $arr) {
        $data = array(
            'FullName' => $arr['FullName'] != false ? $arr['FullName'] : 'Нет данных'
        );
        return $data; 
    }        
        
    function countParks($result) { 
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $arr = doesItExist($row);
                echo "Название: ". $row['FullName'] ."<br>
                    Услуги: ". $row['Services'] ."<br>
                    Адрес: ". $row['Address'] ."<br>
                    ". $row['PublicPhone'] ."<hr>";
            }
        } 
        else {
            echo "Ничего не найдено";
        }
    }
?>

<div class="res">
    <?php
        countParks($result);
    ?>
</div>



<?php
    require "footer.php";
?>
