 <?php
 include "header.php";
 ?>
 <div class="content-wrapper">
    
      <div class="container-fluid">
        <div class="container">
          <div class="header text-center">
            <h1>Category List</h1>
          </div>
          <div class="headera text-right p-5">
          <label for="">Category Name </label>
          <input type="text" placeholder="category Name">
          <button type="button" class="btn btn-success shadow-lg"><i class="fa-solid fa-magnifying-glass"></i>Find</button>
        <a href="addcategory.php" class="btn btn-success shadow-lg"><i class="fa-solid fa-plus"></i>Add Category</a>
       </div>
       <hr> 
       <table class="table table-borderless">
    
      <tr>
        <th>#</th>
        <th>Category name</th>
        <th>Category image</th>
        <th>Status</th>
        <th>action</th>
      </tr>
    
    
      <?php
      include "connection.php";
      $query="SELECT * FROM tbl_category";
      $result = mysqli_query($conn,$query);
      while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
          <td>
            <?php
            echo $row["category_id"];
            ?>
          </td>
          
          <td>
            <?php
            echo $row["category_name"];
            ?>
          </td>
         <td>
            <img src="uploads/product/<?= $row["category_image"] ?>"width="150"height="150" alt="">
          </td>
          <td>
            <?php
            echo $row["category_status"];
            ?>
          </td>

          <td>
            <a href="updatecategory.php?id=<?php echo $row["category_id"]?>" class="btn btn-info shadow mb-5"><i class="fa-solid fa-pen"></i></a>
            <a href="deletecategory.php?id=<?php echo $row["category_id"]?>" class="btn btn-danger shadow mb-5"><i class="fa-solid fa-trash"></i></a>
          </td>
          
        </tr>

        <?php
        }
        ?>

          
  

</div>

</div>
</div>
</div>

</table>
 <?php
 include "sidebar.php";
 ?>

 <?php
 include "footer.php";
 ?>