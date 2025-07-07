<?php
 include "header.php";
 ?>
 <div class="content-wrapper">
    
      <div class="container-fluid">
        <div class="card card-center" style=" justify-content:center">
  <div class="card-body"> <h4>Create New Customer</h4>
  <a href="categorylist.php"> <button type="submit" class="btn btn-success" style="float:right;margin: 10px;">
  <i class="fa-solid fa-eye"></i>Customer list</button></a> 
<form action="insertcustomer.php" method="post">
    <table class="table ">
      <tr>
          <th>Fullname <span style="color:red;">*</span></th>
          <th>Email <span style="color:red;">*</span></th>
        <th>Phone Number <span style="color:red;">*</span></th>
      </tr>
      <tr>
        <td><input type="text" name="customer_fullname" class="form-control"style="width: 300px;" placeholder="Enter full name"></td>
        <td><input type="text" name="email" class="form-control"style="width: 300px;" placeholder="Enter Email"></td>
        <td><input type="text" name="phone"class="form-control"style="width: 300px;" placeholder="Enter phone no"></td>
      </tr>
</table> 
      <table class="table">
      <tr>
          <th>Password <span style="color:red;">*</span></th>
          <th>Confirm Password<span style="color:red;">*</span></th>
        <th>Profile Image<span style="color:red;">*</span></th>
      </tr>
      <tr>
        <td><input type="text" name="password"class="form-control"style="width: 300px;" placeholder="Enter password"></td>
        <td><input type="text" name="cpassword"class="form-control"style="width: 300px;" placeholder="Enter cpassword"></td>
        <td><input type="file" name="customer_profile"class="form-control"style="width: 300px;" placeholder="no file"></td>
      </tr>
      </table>
      <table class="table">
     <tr>
          <th>Address <span style="color:red;">*</span></th>
      </tr>
      <tr>
      <td><textarea class="form-control" rows="10" name="address" placeholder="Enter Address"></textarea></td>
      </tr>
  </table>
  <div class="text-right">
   <button type="submit" class="btn btn-primary">
           <i class="fa-solid fa-floppy-disk"></i>Create customer</button>
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
  