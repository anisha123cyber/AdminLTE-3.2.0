<?php

include "connection.php";
if(isset($_GET['id'])){
$c_id=$_GET['id'];
$del_sql= "DELETE FROM `tbl_category` WHERE `category_id`='$c_id'";
$data = mysqli_query($conn,$del_sql);
    echo"<script>window.location.href='categorylist.php';</script>";
}


?>