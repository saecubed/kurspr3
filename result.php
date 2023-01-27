<?php
    $title = "Результат поиска";
    require "header.php";
?>

<h1 class="display-5 text-center top_text">Результат поиска</h1>

<?php
    $connect = mysqli_connect("std-mysql", "std_1987_kurspr3", "12345678", "std_1987_kurspr3");

    $inputSearch = $_REQUEST['search']; 
    
    $sql = "SELECT FullName, Services, Address, WorkingHours, PublicPhone FROM `vetclinics` WHERE `FullName` LIKE '%$inputSearch%' OR `Address` LIKE '%$inputSearch%'  OR `Services` LIKE '%$inputSearch%'";
     $result = $connect -> query($sql);

    function getData(array $arr) {
        $data = array(
            'data' => $arr['data']
        );
        return $data; 
    }        
        
    function echoRes($result) { 
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $arr = getData($row);
                echo "Название: ". $row['FullName'] ."<br>
                    Услуги: ". $row['Services'] ."<br>
                    Адрес: ". $row['Address'] ."<br>
                    ". $row['WorkingHours'] ."<br>
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
        echoRes($result);
    ?>
</div>

<h1 class="top_text"></h1>  

<?php
    require "footer.php";
?>
