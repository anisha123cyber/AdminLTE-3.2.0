<?php
 include "header.php";
 ?>
 <div class="content-wrapper">
    
      <div class="container-fluid">
        <div class="container">
          <div class="header text-center">
            <h1>Product Management</h1>
          </div>
          <div class="headera text-right p-5">
          <label for="">Product Name </label>
          <input type="text" placeholder="Product Name">
          <button type="button" class="btn btn-success shadow-lg"><i class="fa-solid fa-magnifying-glass"></i>Find</button>
        <a href="addproduct.php" class="btn btn-success shadow-lg"><i class="fa-solid fa-plus"></i>Add Product</a>
       </div>
       <hr> 
       <table class="table table-borderless">
    
      <tr>
        <th>#</th>
        <th>Product image</th>
        <th>Product Name</th>
        <th>Category</th>
        <th>Stock</th>
        <th>Price</th>
        <th>Status</th>
        
      </tr>
      <?php
      include "connection.php";
      $query="SELECT * FROM tbl_product";
      $result = mysqli_query($conn,$query);
      while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
          <td>
            <?php
            echo $row["product_id"];
            ?>
          </td>
          
          <td>
            <img src="uploads/product/<?= $row["product_image"] ?>"width="150"height="150" alt="">
          </td>
          <td>
            <?php
            echo $row["product_name"];
            ?>
          </td>
          <td>
            <?php
            echo $row["product_category"];
            ?>
          </td>
          <td>
            <?php
            echo $row["product_mrp"];
            ?>
          </td>
          <td>
            <?php
            echo $row["product_stock"];
            ?>
          </td>
          
          <td><?php
            echo $row["product_status"];
            ?></td>

            
              <td>
            </div>
            <a href="updateproduct.php?id=<?php echo $row["product_id"]?>" class="btn btn-info shadow mb-5"><i class="fa-solid fa-pen"></i></a>
            <a href="deleteproduct.php?id=<?php echo $row["product_id"]?>" class="btn btn-danger shadow mb-5"><i class="fa-solid fa-trash"></i></a>
          </td>
        </tr>

        <?php
      }
      ?>
    
    
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
  