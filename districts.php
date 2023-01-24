<?php
include "database.php";
$sql = mysqli_query($conn, 'SELECT District, Quantity FROM `districts` ORDER BY Quantity Desc');
  while ($result = mysqli_fetch_array($sql)) {
    echo '<tr>'.'<td>' .$result['District'].'</td>'.'<td>'. $result['Quantity'].'</td>'.'</tr>';
  }
?>


