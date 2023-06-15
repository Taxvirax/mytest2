<?php
include("conn.php");

// ดึงข้อมูลต้นไม้
$sql1 = "SELECT * FROM plant_table";
$pl = mysqli_query($conn, $sql1);
?>

