
<?php

include "connection.php";
$product_name= $_POST["name"];

$category= $_POST["category"];

$stock= $_POST["stock"];
$price= $_POST["price"];
$product_image=$_FILES["product_image"]["name"];
$tmp_name=$_FILES["product_image"]["tmp_name"];
move_uploaded_file($tmp_name,"uploads/product/$product_image");


$query="INSERT INTO `tbl_product`( `product_name`, `product_category`, `product_mrp`, `product_stock`,`product_image`) VALUES ('$product_name','$category','$stock','$price','$product_image')";
$result=mysqli_query($conn,$query);
if($result)
{
    echo"<script>alert('Data Saved!!')</script>";
    echo"<script>window.location.href='productmanagement.php'</script>";
}
?>

