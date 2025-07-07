<?php

include "connection.php";
if(isset($_GET['id'])){
$o_id=$_GET['id'];
$del_sql= "DELETE FROM `tbl_order_master` WHERE `order_m_id`='$o_id'";
$data = mysqli_query($conn,$del_sql);
    echo"<script>window.location.href='ordermanagement.php';</script>";
}


?>