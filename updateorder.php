<?php
include "connection.php";


$o_id=$_GET['id'];
$get_sql="SELECT * FROM tbl_order_master where order_m_id='$o_id'";
$query=mysqli_query($conn,$get_sql);
$row=mysqli_fetch_assoc($query);

if(isset($_POST['update'])){
$o_id=$_GET['id'];
$o_date=$_POST['order_m_date'];
$o_status=$_POST['order_m_status'];
$o_toprice=$_POST['order_m_total_price'];
$o_pterm=$_POST['order_m_payment_term'];
$o_pstatus=$_POST['order_m_payment_status'];

 



$update_sql= "UPDATE tbl_order_master SET `order_m_id`='$o_id',`order_m_date`='$o_date',`order_m_status`='$o_status',`order_m_total_price`='$o_toprice',`order_m_payment_term`='$o_pterm',`order_m_payment_status`=$o_pstatus WHERE order_m_id='$o_id'";
$data = mysqli_query($conn,$update_sql);
if($data){
    echo "<script>'Record update Successfully.!!'; </script>";
    echo"<script>window.location.href='ordermanagement.php';</script>";
}


}


?>
<?php
 include "header.php";
 ?>
 <div class="content-wrapper">
    
      <div class="container-fluid">
        <div class="card card-center" style=" justify-content:center">
  <div class="card-body"><h4>Update Order</h4> 
<form action="" method="post" enctype="multipart/form-data">
     
        
        
        <div>
          <label for="">Order Id<span style="color:red;">*</span> </label>
          <input type="text"name="order_m_id" value="<?php echo $row["order_m_id"]?>"></div>
          <br><br>
          <div>
          <label for="">Order Date<span style="color:red;">*</span></label>
          <input type="text" name="order_m_date" value="<?php echo $row["order_m_date"]?>"></div>
          <br><br>
          <div>
          <label for="">Status<span style="color:red;">*</span></label>
          <input type="text" name="order_m_status" value="<?php echo $row["order_m_status"]?>"></div>
          <br><br>
          <div>
          <label for="">Total price<span style="color:red;">*</span></label>
          <input type="text" name="order_m_total_price" value="<?php echo $row["order_m_total_price"]?>"></div>
          <br><br>
          <div>
          <label for="">Payment Method<span style="color:red;">*</span></label>
          <input type="text" name="order_m_payment_term" value="<?php echo $row["order_m_payment_term"]?>"></div>
          <br><br>
          <div>
          <label for="">Payment Status<span style="color:red;">*</span></label>
          <input type="text" name="order_m_payment_status" value="<?php echo $row["order_m_payment_status"]?>"></div>
          <br><br>
          <div>
          <button type="submit" name="update" class="btn btn-primary">Update product</button>
          <a href="ordermanagement.php" class="btn btn-danger">Back</a>

            </div>

    </form>
 <?php
 include "sidebar.php";
 ?>
 
 
  


