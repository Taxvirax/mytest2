<?php

include("conn.php");

$sql = "insert into plant_table (pl_name,pl_type) values('" . $_POST["pl_name"] . "','" . $_POST["pl_type"] . "')";

if (mysqli_query($conn, $sql)) {
    echo "Complete";
} else {
    echo "Fail";
    
}
mysqli_close($conn);


