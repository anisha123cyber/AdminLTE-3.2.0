<?php
 include "header.php";
 ?>
 <div class="content-wrapper">
    
      <div class="container-fluid">
        <div class="card card-center" style=" justify-content:center">
  <div class="card-body"> 
  <a href="categorylist.php"> <button type="submit" class="btn btn-success" style="float:right;margin: 10px;">
  <i class="fa-solid fa-eye"></i>Product list</button></a> 
<form action="insertproduct.php"method="POST" enctype="multipart/form-data">
    <table class="table ">
      <tr>
          <th>Product Image<span style="color:red;">*</span></th>
          <th>Product Name<span style="color:red;">*</span></th>
        <th>Category <span style="color:red;">*</span></th>
      </tr>
      <tr>
        <td><input type="file" name="product_image"class="form-control"style="width: 300px;" placeholder="no file"></td>
        <td><input type="text" name="name"class="form-control"style="width: 300px;" placeholder="Enter Product name"></td>
        <td><input type="text" name="category"class="form-control"style="width: 300px;" placeholder="Enter Category"></td>
      </tr>
</table> 
      <table class="table">
      <tr>
        <th>Stock<span style="color:red;">*</span></th>
        <th>Price<span style="color:red;">*</span></th>
      </tr>
      <tr>
        <td><input type="text" name="stock"class="form-control"style="width: 300px;" placeholder="Enter Stock"></td>
        <td><input type="text" name="price"class="form-control"style="width: 300px;" placeholder="Enter Price"></td>
      </tr>
      </table>
      
  <div class="text-right">
   <button type="submit" class="btn btn-primary">
           <i class="fa-solid fa-floppy-disk"></i>Submit</button>
          <button type="reset"class="btn btn-danger">
           <i class="fa-solid fa-xmark"></i> Clear
          </button>
          </div>
</form>
    </div>
    </div>
    </div>
    </div>

 <?php
 include "sidebar.php";
 ?>
 
 
  <?php
  include "footer.php";
  ?>
  