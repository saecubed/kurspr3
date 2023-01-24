<?php
include "database.php";
$sql = mysqli_query($conn, 'SELECT FullName, Services, Address, WorkingHours, PublicPhone FROM `vetclinics`');
  while ($result = mysqli_fetch_array($sql)) {
    echo '<tr>'.'<td>' .$result['FullName'].'</td>'.'<td>'. $result['Services'].'</td>'.'<td>'. $result['Address'].'</td>'.'<td>'. $result['WorkingHours'].'</td>'.'<td>'. $result['PublicPhone'].'</td>'.'</tr>';
  }
?>


