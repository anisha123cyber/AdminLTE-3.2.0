<?php
 include "header.php";
 ?>
<div class="content-wrapper">

  <div class="container-fluid">
    <div class="container">
      <div class="header text-center">
        <h1>Sale Report</h1>
      </div>
      <div class="headera d-flex">
        <div>
          <label for="">Order Id </label><br>
          <input list="All">
          <datalist id="All">
            <option value="One"></option>
            <option value="Two"></option>
            <option value="Three"></option>
          </datalist>
        </div>
        <div>
          <label for="">Order Status</label><br>
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
        <div style="margin-left :10px">
          <label>From Date</label><br>
          <input type="Date">
        </div>
        <div style="margin-left :10px">
          <label>To Date</label><br>
          <input type="Date">
        </div>
           <div class="headera text" style="margin-left 10px;">
          <label for="">Customer Name </label>
          <input type="text" placeholder="customer Name">
          </div>
          <button type="button" class="btn btn-success shadow-lg"><i class="fa-solid fa-magnifying-glass"></i>Find</button>
            </div>
        </div>
      <hr>
      <table class="table ">
      
          <tr>
            <th>#</th>
            <th>Order Id</th>
            <th>Customer Name</th>
            <th>Order Date</th>
            <th>Status</th>
            <th>Total price</th>
            <th>Payment Method</th>
            <th>Payment Status</th>
            <th>Action</th>
          </tr>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>Gwen Stacy</td>
            <td>19/02/1025 09:45PM</td>
            <td>Delivered</td>
            <td>₹ 12,495.95</td>
            <td>Cash on Delivery</td>
            <td>Paid</td>
            <td><a href="" class="btn btn-info "> View</a></td>
          </tr>

        
      </table>

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