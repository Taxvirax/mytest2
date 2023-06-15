<?php   
include("loaddata.php");
header("Content-type:text/html; charset=UTF-8");        
header("Cache-Control: no-store, no-cache, must-revalidate");       
header("Cache-Control: post-check=0, pre-check=0", false);       
if($_GET['rev']==1){
    // echo date("Y-m-d H:i:s");
    foreach ($pl as $data) {
        echo "$data[pl_id] &nbsp";
        echo "$data[pl_name] &nbsp ";
        echo "&nbsp $data[pl_type] <br>";
    }
    exit;
}
