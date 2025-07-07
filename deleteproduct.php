<?php

include "connection.php";
if(isset($_GET['id'])){
$p_id=$_GET['id'];
$del_sql= "DELETE FROM `tbl_product` WHERE `product_id`='$p_id'";
$data = mysqli_query($conn,$del_sql);
    echo"<script>window.location.href='productmanagement.php';</script>";
}


?>