<?php
include "connection.php";


$c_id=$_GET['id'];
$get_sql="SELECT * FROM tbl_category where category_id='$c_id'";
$query=mysqli_query($conn,$get_sql);
$row=mysqli_fetch_assoc($query);

if(isset($_POST['update'])){
 $c_id=$_GET['id'];
 $c_name=$_POST['category_name'];
 $c_image= $_FILES["category_image"]["name"];
 $tmp_name=$_FILES["category_image"]["tmp_name"];
 move_uploaded_file($tmp_name,"uploads/product/$c_image");
 
 
 
 $update_sql= "UPDATE `tbl_category` SET `category_name`='$c_name',`category_image`='$c_image' WHERE category_id='$c_id'";
 $data = mysqli_query($conn,$update_sql);
if($data){
    echo "<script>'Record update Successfully.!!'; </script>";
    echo"<script>window.location.href='categorylist.php';</script>";
}


}


?>




<?php
 include "header.php";
 ?>
 
 <?php
 include "sidebar.php";
 ?>
 <div class="content-wrapper">
    
      <div class="container-fluid">
        <div class="card card-center" style="width:48rem;height:18rem; justify-content:center">
  <div class="card-body"> <h4>Update Category</h4>
    <form action="" method="post" enctype="multipart/form-data">
     
        <div>
          <label for="">Category Name<span style="color:red;">*</span> </label>
          <input type="text"name="category_name" value="<?php echo $row["category_name"]?>"></div>
          <br><br>
          <div>
          <label for="">Category Image<span style="color:red;">*</span></label>
          <input type="file" name="category_image" value="<?php echo $row["category_image"]?>"></div>
          <br><br>
          <div>
          <button type="submit" name="update" class="btn btn-primary">Update Category</button>
          <a href="categorylist.php" class="btn btn-danger">Back</a>

            </div>
  </form>
  </div>
</div>
    </div>
    </div>
    </div>
    </div>

 
  <?php
  include "footer.php";
  ?>
  