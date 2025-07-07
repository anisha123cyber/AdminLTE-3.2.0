<?php

include "connection.php";
if(isset($_GET['id'])){
$c_id=$_GET['id'];
$del_sql= "DELETE FROM `tbl_customer` WHERE `customer_id`='$c_id'";
$data = mysqli_query($conn,$del_sql);
    echo"<script>window.location.href='customer.php';</script>";
}


?>