<?php
 include "header.php";
 ?>
 <div class="content-wrapper">
    
      <div class="container-fluid">
        <div class="container">
          <div class="header text-center">
            <h1>Offer List</h1>
          </div>
          <div class="headera text-right">
        <button type="button" class="btn btn-success shadow-lg"><i class="fa-solid fa-plus"></i>Create Offer</button>
       </div>
       </div>
       <hr> 
       <h5>Total Offer:1</h5>
       <table class="table table-borderless">
    <thead>
      <tr>
        <th>#</th>
        <th>Image</th>
        <th>Category</th>
        <th>Discription</th>
        <th>Discount(%)</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td><img src="specialoffer.jpg" alt="alert" style="width: 100px;height: 100px;"></td>
        <td>Mens Clothing</td>
        <td>Test</td>
        <td>10.00%</td>
        <td><a href="" class="btn btn-success "> Active </a></td>
        <td>
          <a href="" class="btn btn-info shadow mb-5"><i class="fa-solid fa-pen"></i></a>
          <a class="btn btn-danger shadow mb-5"><i class="fa-solid fa-trash"></i></a>
        </td>
      </tr>
      
          </tbody>
  </table>

      </div>
        
      </div>

 <?php
 include "sidebar.php";
 ?>
 
 
  <?php
  include "footer.php";
  ?>
  