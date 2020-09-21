<?php
define("TITLE","sell products");
define("PAGE","assets");
include("../config.php");
session_start();
if(isset($_SESSION["admin"])){
   $a_email =   $_SESSION["adminemail"];
}else{
    header("location: http://localhost/newosms/admin/admin_login.php");
} 
include("includes/header.php");
?>
<?php


if(isset($_REQUEST["submit"])){

    //  update quantity 
    $cp_ava = $_REQUEST["p_ava"] - $_REQUEST["cp_quantity"];
    $pid = $_REQUEST["pid"];

    // insert variable 
    
    $cp_cus_nm = $_REQUEST["c_name"];
    $cp_name = $_REQUEST["cp_name"];
    $cp_add = $_REQUEST["cp_add"];
    $cp_total = $_REQUEST["cp_total"];
    $cp_quantity = $_REQUEST["cp_quantity"];
    $cp_each = $_REQUEST["cp_each"];
    $cp_date = $_REQUEST["cp_date"];

    $sql1="INSERT INTO customer_tb (cp_cust_name, cp_add, cp_name, cp_quantity, cp_each, cp_total, cp_date)
     VALUES('{$cp_cus_nm}','{$cp_add}','{$cp_name}','{$cp_quantity}','{$cp_each}','{$cp_total}','{$cp_date}')";
    $result1=mysqli_query($connect,$sql1) or die("Query failed");
    if($result1 == true){
       $genid =   mysqli_insert_id($connect);
       session_start();
       $_SESSION["myid"] = $genid;
        header("location: http://localhost/newosms/admin/sellproductsuccess.php");
    }

    $sql3 ="UPDATE assetes_tb SET p_available ='{$cp_ava}' WHERE p_id='{$pid}'";
    $result3 = mysqli_query($connect,$sql3) or die("Query failed.");

}


?>


<div class="container-fluid">
    <div class="row">
    <!-- start side bar  -->
        <?php include("sidebar.php");?>
        <!-- end side bar  -->
        <!-- start dashboard content  -->
        <div class="col-sm-6 mt-5 jumbotron">
            <h3 class="text-center text-capitalize">update  technician information</h3>
<?php

if(isset($_REQUEST["sellbtn"])){
    $p_id = $_REQUEST["p_id"];
    

    $sql="SELECT * FROM assetes_tb WHERE p_id='{$p_id}'";
    $result=mysqli_query($connect,$sql) or die("Query failed.");
    if($result == true){
        $row =mysqli_fetch_array($result);
    }

}

?>
<table class="table ">
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <div class="form-group">
    <label for=""> product id</label>
    <input type="text" value="<?php if(isset($row['p_id'])){ echo $row['p_id'];} ?>" class="form-control" placeholder="id" name="pid" readonly>
        <label for=""> customer name</label>
        <input type="text"  class="form-control" placeholder="name" name="c_name">
    </div>
    <div class="form-group">
        <label for="">customers address</label>
        <input type="text"  class="form-control" placeholder="city" name="cp_add">
    </div>
    <div class="form-group">
        <label for="">product name</label>
        <input type="text" value="<?php if(isset($row['p_name'])){echo $row['p_name'];} ?>" class="form-control" placeholder="mobile" name="cp_name" readonly>
    </div>
    <div class="form-group">
        <label for="">available </label>
        <input type="email" value="<?php if(isset($row['p_available'])){echo $row['p_available'];} ?>" class="form-control" placeholder="email" name="p_ava" readonly>
    </div>
    <div class="form-group">
        <label for="">quantity </label>
        <input type="text"  class="form-control" placeholder="quantity" name="cp_quantity">
    </div>
    <div class="form-group">
        <label for="">price each </label>
        <input type="text"  class="form-control" placeholder="price each" name="cp_each">
    </div>
    <div class="form-group">
        <label for="">Total price </label>
        <input type="text"  class="form-control" placeholder="Total price" name="cp_total">
    </div>
    <div class="form-group">
        <label for="">selling date </label>
        <input type="date"  class="form-control" placeholder="Total price" name="cp_date">
    </div>
    <input type="submit" class="btn btn-danger" name="submit">
    <?php if(isset($msg)){ echo "$msg";}  ?>
    
    </form>


</table>
        </div>
        <!-- end dashboard content  -->
    </div>
</div>
<?php
include("includes/footer.php");
?>

















