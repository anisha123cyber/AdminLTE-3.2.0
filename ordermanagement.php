<?php
 include "header.php";
 ?>
<div class="content-wrapper">

  <div class="container-fluid">
    <div class="container">
      <div class="header text-center">
        <h1>Order Management</h1>
      </div>
      <div class="headera d-flex" style="padding-left:500px;">
        <div>
          <label for="">Order Status </label><br>
          <input list="All">
          <datalist id="All">
            <option value="One"></option>
            <option value="Two"></option>
            <option value="Three"></option>
          </datalist>
        </div>
        <div style="margin-left: 10px;">
          <label for="">Payment Status </label>
          <input list="All">
          <datalist id="All">
            <option value="One"></option>
            <option value="Two"></option>
            <option value="Three"></option>
          </datalist>
        </div>
           
        <button type="button" class="btn btn-success shadow-lg " style="margin-left 10px; margin-top :20px; width: 100px; height: 50px;"><i
            class="fa-solid fa-magnifying-glass"></i>Find</button>

      </div>

      <hr>
      <table class="table ">
        <thead>
          <tr>
            
            <th>Order Id</th>
            <th>Order Date</th>
            <th>Status</th>
            <th>Total price</th>
            <th>Payment Method</th>
            <th>Payment Status</th>
            <th>Action</th>
          </tr>
        </thead>
        
          
            <?php
            include "connection.php";
            $query= "SELECT * FROM `tbl_order_master` INNER JOIN tbl_customer  ON tbl_customer.customer_id = tbl_order_master.order_m_customer_id";
            $result = mysqli_query($conn,$query);
            while($row= mysqli_fetch_array($result)){
            ?>
            <tr>
            <td><?php echo $row['order_m_id']; ?></td>
            <td><?php echo $row['order_m_date']; ?></td>
            <td>
            <?php
            if($row["order_m_status"]==1){
                echo "pending";
            }   
            else if($row["order_m_status"]==2){
                echo "In Progress";
            }
            else if($row["order_m_status"]==3){
                echo "Shipping";
            }
            else if($row["order_m_status"]==4){
                echo "Delivered";
            }
            else if($row["order_m_status"]==5){
                echo "Rejected";
            }
          ?></td>
            <td><?php echo $row['order_m_total_price']; ?></td>
            <td><?php
            if($row['order_m_payment_term']==1){
                echo "cash on delivery";
            }   
            else if($row["order_m_payment_term"]==2){
                echo "online Payment";
            }

           ?> </td>
             <td><?php
            if($row['order_m_payment_status']==1){
                echo "unpaid";
            }   
            else if($row["order_m_payment_status"]==2){
                echo "paid";
            }

           ?> </td>
            <td>
              
            <a href="updateorder.php?id=<?php echo $row["order_m_id"]?>" class="btn btn-info shadow mb-5"><i class="fa-solid fa-pen"></i></a>
            <a href="deleteorder.php?id=<?php echo $row["order_m_id"]?>" class="btn btn-danger shadow mb-5"><i class="fa-solid fa-trash"></i></a>
            </td>
          </tr>
          <?php
            }
            ?>
        
      </table>

    </div>
  </div>

</div>

<?php
 include "sidebar.php";
 ?>


<?php
  include "footer.php";
  ?>