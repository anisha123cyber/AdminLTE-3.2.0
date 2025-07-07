<?php
 include "header.php";
 ?>
 <div class="content-wrapper">
    
      <div class="container-fluid">
        <div class="container">
          <div class="header text-center">
            <h1>Customer List</h1>
          </div>
          <div class="headera text-right p-5">
          <label for="">Customer Name </label>
          <input type="text" placeholder="customer Name">
          <button type="button" class="btn btn-info shadow-lg"><i class="fa-solid fa-magnifying-glass"></i>Find</button>
        <a href="addcustomer.php" class="btn btn-success shadow-lg"><i class="fa-solid fa-plus"></i>Add Customer</a>
       </div>
       <hr>
       
       <div class="table-responsive">
       <table class="table table-borderless">
  
      <tr>
        <th>#</th>
        
        <th>Customer Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Status</th>
        <th>Action</th>
        
      </tr>
      <?php
      include "connection.php";
      $query="SELECT * FROM tbl_customer";
      $result = mysqli_query($conn,$query);
      while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
          <td>
            <?php
            echo $row["customer_id"];
            ?>
          </td>
          
          
          <td>
            <?php
            echo $row["customer_fullname"];
            ?>
          </td>
          <td>
            <?php
            echo $row["customer_email"];
            ?>
          </td>
          <td>
            <?php
            echo $row["customer_phoneno"];
            ?>
          </td>
          <td>
            <?php
            echo $row["customer_address"];
            ?>
          </td>
          
          <td><?php
            echo $row["customer_status"];
            ?></td>

              <td>
            <a href="updatecustomer.php?id=<?php echo $row["customer_id"]?>" class="btn btn-info shadow mb-5"><i class="fa-solid fa-pen"></i></a>
            <a href="deletecustomer.php?id=<?php echo $row["customer_id"]?>" class="btn btn-danger shadow mb-5"><i class="fa-solid fa-trash"></i></a>
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
  