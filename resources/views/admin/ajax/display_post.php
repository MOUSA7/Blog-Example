<?php
include ("db.php");

$query = "select * from posts";
$query_info =mysqli_query($conn,$query);

if (!$query_info){
    die('Query Failed'.mysqli_error($conn));
}

while ($row =mysqli_fetch_array($query_info)){
    echo "<tr>";

    echo "<td>{$row['id']} </td>";
    echo "<td>{$row['title']} </td>";



    echo "</tr>";
}
?>