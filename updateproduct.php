<?php
include "connection.php";


$p_id=$_GET['id'];
$get_sql="SELECT * FROM tbl_product where product_id='$p_id'";
$query=mysqli_query($conn,$get_sql);
$row=mysqli_fetch_assoc($query);

if(isset($_POST['update'])){
$p_id=$_GET['id'];
$p_name=$_POST['product_name'];
$p_category=$_POST['product_category'];
$p_stock=$_POST['product_stock'];
$p_price=$_POST['product_mrp'];
$p_image= $_FILES["product_image"]["name"];
 $tmp_name=$_FILES["product_image"]["tmp_name"];
 move_uploaded_file($tmp_name,"uploads/product/$p_image");
 



$update_sql= "UPDATE tbl_order SET `product_name`='$p_name',`product_category`='$p_category',`product_stock`='$p_stock',`product_mrp`='$p_price' WHERE product_id='$p_id'";
$data = mysqli_query($conn,$update_sql);
if($data){
    echo "<script>'Record update Successfully.!!'; </script>";
    echo"<script>window.location.href='productmanagement.php';</script>";
}


}


?>
<?php
 include "header.php";
 ?>
 <div class="content-wrapper">
    
      <div class="container-fluid">
        <div class="card card-center" style=" justify-content:center">
  <div class="card-body"><h4>Update Product</h4> 
<form action="" method="post" enctype="multipart/form-data">
     
        <div>
          <label for="">Product Image<span style="color:red;">*</span></label>
          <input type="file" name="product_image" value="<?php echo $row["product_image"]?>"class="form-control"style="width: 300px;" placeholder="no file">
</div>
          <br><br>
        
        <div>
          <label for="">product Name<span style="color:red;">*</span> </label>
          <input type="text"name="product_name" value="<?php echo $row["product_name"]?>"></div>
          <br><br>
          <div>
          <label for="">Customer email<span style="color:red;">*</span></label>
          <input type="text" name="product_category" value="<?php echo $row["product_category"]?>"></div>
          <br><br>
          <div>
          <label for="">stock<span style="color:red;">*</span></label>
          <input type="text" name="product_stock" value="<?php echo $row["product_stock"]?>"></div>
          <br><br>
          <div>
          <label for="">price<span style="color:red;">*</span></label>
          <input type="text" name="product_mrp" value="<?php echo $row["product_mrp"]?>"></div>
          <br><br>
          <div>
          <button type="submit" name="update" class="btn btn-primary">Update product</button>
          <a href="categorylist.php" class="btn btn-danger">Back</a>

            </div>

    </form>
 <?php
 include "sidebar.php";
 ?>
 
 
  


