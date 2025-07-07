<?php
 include "header.php";
 ?>
 <div class="content-wrapper">
    
      <div class="container-fluid">
        <div class="card card-center" style="width:48rem;height:18rem; justify-content:center">
  <div class="card-body"> <h4>Create New Category</h4>
  <a href="categorylist.php"> <button type="submit" class="btn btn-success" style="float:right;margin: 10px;">
  <i class="fa-solid fa-eye"></i>category list</button></a> 
    <form action="insertcategory.php" method="post">
    <div class="headera text-left p-5">
          <label for="">Category Name<span style="color:red;">*</span> </label><br>
          <input type="text"name="categoryname" placeholder="category Name"><br>
          <label for="">Category Image<span style="color:red;">*</span></label><br>
          <input type="file" name="category_image"><br><br>
          <button type="submit" class="btn btn-primary">
           <i class="fa-solid fa-floppy-disk"></i>Create Category</button>
          <button type="reset"class="btn btn-danger">
           <i class="fa-solid fa-xmark"></i> Clear
          </button>

    </form>
  </div>
</div>
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
  