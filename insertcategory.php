<?php
$category_name = $_POST["categoryname"];
$category_image= $_FILES["category_image"]["name"];
$tmp_name=$_FILES["category_image"]["tmp_name"];
move_uploaded_file($tmp_name,"uploads/product/$$$category_image");


include "connection.php";
$query="INSERT INTO `tbl_category`( `category_name`, `category_image`) VALUES ('$category_name','$category_image')";
$result=mysqli_query($conn,$query);
if($result)
{
    echo"<script>alert('Data Saved!!')</script>";
    echo"<script>window.location.herf='categorylist.php'</script>";
}


?>