<?php
include "database.php";
$sql = mysqli_query($conn, 'SELECT FullName, Services, Address, PublicPhone FROM `vetclinics` WHERE `FullName` LIKE '%$inputSearch%' OR `Address` LIKE '%$inputSearch%'');
  while ($result = mysqli_fetch_array($sql)) {
    echo '<tr>'.'<td>' .$result['FullName'].'</td>'.'<td>'. $result['Services'].'</td>'.'<td>'. $result['Address'].'</td>'.'<td>'. $result['PublicPhone'].'</td>'.'</tr>';
  }
?>


