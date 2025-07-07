<a href="addcustomer.php" class="btn btn-danger">Back</a>
<?php

$customer_fullname = $_POST["customer_fullname"];

$customer_email= $_POST["email"];

$customer_phoneno= $_POST["phone"];

$customer_password= $_POST["password"];

$customer_confirmpass= $_POST["cpassword"];

$customer_address= $_POST["address"];

include "connection.php";

$query= "INSERT INTO `tbl_customer`(`customer_fullname`, `customer_email`, `customer_phoneno`, `customer_password`, `customer_confirmpass`,`customer_address`) VALUES ('$customer_fullname','$customer_email','$customer_phoneno','$customer_password','$customer_confirmpass','$customer_address')";
$result=mysqli_query($conn,$query);
if($result)
{
    echo"<script>alert('Data Saved!!')</script>";
    echo"<script>window.location.herf='customer.php'</script>";
}
?>