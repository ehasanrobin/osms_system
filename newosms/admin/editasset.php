<?php
define("TITLE","assets page");
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

if(isset($_REQUEST["dltbtn"])){
    $chkid= $_REQUEST["p_id"];
    $sql2="DELETE FROM assetes_tb WHERE p_id = '{$chkid}'";
    $result2= mysqli_query($connect,$sql2) or die("Query failed.");
    if($result2 == true){
       header("location: http://localhost/newosms/admin/assets.php");
    }
}

if(isset($_REQUEST["updatebtn"])){
   if(($_REQUEST["old_pid"] == "") || ($_REQUEST["p_name"] == "") || ($_REQUEST["p_dop"] == "") ||
    ($_REQUEST["p_available"] == "") || ($_REQUEST["p_total"] == "") || ($_REQUEST["p_or_price"] == "") ||
      ($_REQUEST["p_sel_price"] == "") 
   ){
    $msg= "<div class='alert alert-danger mt-3' role='alert' >input all fields</div>";
   }else{
    $old_id= $_REQUEST["old_pid"];
    $p_name = $_REQUEST["p_name"];
    $p_date = $_REQUEST["p_dop"];
    $p_available = $_REQUEST["p_available"];
    $p_total = $_REQUEST["p_total"];
    $p_or_cost = $_REQUEST["p_or_price"];
    $p_sel_price = $_REQUEST["p_sel_price"];

    $sql1 = "UPDATE assetes_tb SET p_name = '{$p_name}', p_dop = '{$p_date}',p_available='{$p_available}', p_total='{$p_total}', p_or_price='{$p_or_cost}', p_sel_price='{$p_sel_price}' WHERE p_id ='{$old_id}'";
    $result1 = mysqli_query($connect,$sql1) or die("Query failed.");
    if($result1 == true){
        $msg= "<div class='alert alert-success mt-3' role='alert' > updated successfully</div>";
    }
   }
}

?>

<div class="container-fluid">
    <div class="row">
    <!-- start side bar  -->
        <?php include("sidebar.php");?>
        <!-- end side bar  -->
        <!-- start dashboard content  -->
        <div class="col-sm-5 mt-5 jumbotron">
        <?php
        if(isset($_REQUEST["editbtn"])){
            $chkid= $_REQUEST["p_id"];
            $sql= " SELECT * FROM assetes_tb WHERE p_id = '{$chkid}'";
            $result = mysqli_query($connect,$sql) or die("Query failed.");
            if($result == true){
             $row = mysqli_fetch_array($result);
            }
        }
            
       
        ?>
      



            <h3 class="text-center"> update requester details</h3>
            <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
                <div class="form-group">
                <label for="">product id</label>
                <input type="text" name="old_pid" class="form-control" value="<?php if(isset($row['p_id'])){echo $row['p_id'];} ?>" readonly >
                </div>
                <div class="form-group">
                    <label for=""> product name</label>
                    <input type="text" class="form-control" value="<?php if(isset($row['p_name'])){echo $row['p_name'];} ?>" name="p_name">
                </div>
                <div class="form-group">
                    <label for=""> date of purchase</label>
                    <input type="date" class="form-control" value="<?php if(isset($row['p_dop'])){echo $row['p_dop'];} ?>" name="p_dop">
                </div>
                <div class="form-group">
                    <label for=""> available</label>
                    <input type="text" class="form-control" value="<?php if(isset($row['p_available'])){echo $row['p_available'];} ?>" name="p_available">
                </div>
                <div class="form-group">
                    <label for=""> total</label>
                    <input type="text" class="form-control" value="<?php if(isset($row['p_total'])){echo $row['p_total'];} ?>" name="p_total">
                </div>
                <div class="form-group">
                    <label for=""> orginal cost</label>
                    <input type="text" class="form-control" value="<?php if(isset($row['p_or_price'])){echo $row['p_or_price'];} ?>" name="p_or_price">
                </div>
                <div class="form-group">
                    <label for=""> selling price</label>
                    <input type="text" class="form-control" value="<?php if(isset($row['p_sel_price'])){echo $row['p_sel_price'];} ?>" name="p_sel_price">
                </div>
                <button type="submit" name="updatebtn" class="btn btn-danger">update</button>
                <a href="assets.php" class="btn btn-secondary">close</a>


            
            
            
            </form>
            <?php if(isset($msg)){echo $msg;}?>
            <?php
            ?>
        </div>
        <!-- end dashboard content  -->
    </div>
</div>
<?php
include("includes/footer.php");
?>

















