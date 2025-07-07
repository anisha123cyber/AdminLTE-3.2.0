<?php
include "connection.php";


$c_id=$_GET['id'];
$get_sql="SELECT * FROM tbl_customer where customer_id='$c_id'";
$query=mysqli_query($conn,$get_sql);
$row=mysqli_fetch_assoc($query);

if(isset($_POST['update'])){
$c_id=$_GET['id'];
$c_name=$_POST['customer_fullname'];
$c_email=$_POST['customer_email'];
$c_phoneno=$_POST['customer_phoneno'];
$c_address=$_POST['customer_address'];



$update_sql= "UPDATE tbl_customer SET `customer_fullname`='$c_name',`customer_email`='$c_email',`customer_phoneno`='$c_phoneno',`customer_address`='$c_address' WHERE customer_id='$c_id'";
$data = mysqli_query($conn,$update_sql);
if($data){
    echo "<script>'Record update Successfully.!!'; </script>";
    echo"<script>window.location.href='customer.php';</script>";
}


}


?>

<?php
 include "header.php";
 ?>
 <div class="content-wrapper">
    
      <div class="container-fluid">
        <div class="card card-center" style=" justify-content:center">
  <div class="card-body"> <h4>Update Customer</h4>
    <form action="" method="post">
     
        <div>
          <label for="">Customer Name<span style="color:red;">*</span> </label>
          <input type="text"name="customer_fullname" value="<?php echo $row["customer_fullname"]?>"></div>
          <br><br>
          <div>
          <label for="">Customer email<span style="color:red;">*</span></label>
          <input type="text" name="customer_email" value="<?php echo $row["customer_email"]?>"></div>
          <br><br>
          <div>
          <label for="">Customer phoneno<span style="color:red;">*</span></label>
          <input type="text" name="customer_phoneno" value="<?php echo $row["customer_phoneno"]?>"></div>
          <br><br>
          <div>
          <label for="">Customer address<span style="color:red;">*</span></label>
          <input type="text" name="customer_address" value="<?php echo $row["customer_address"]?>"></div>
          <br><br>
          <div>
          <button type="submit" name="update" class="btn btn-primary">Update Customer</button>
          <a href="customer.php" class="btn btn-danger">Back</a>

            </div>

    </form>
 <?php
 include "sidebar.php";
 ?>
 
 
  


