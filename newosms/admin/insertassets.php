<?php
define("TITLE","add assets");
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
if(isset($_REQUEST["assetbtn"])){
   
    if( ($_REQUEST["p_name"] == "") ||
    ($_REQUEST["p_date"] == "") ||
    ($_REQUEST["p_name"] == "") ||
    ($_REQUEST["p_available"] == "") ||
    ($_REQUEST["p_total"] == "") ||
    ($_REQUEST["p_or_cost"] == "") ||
    ($_REQUEST["p_sel_price"] == "") 
    
    ){
        $msg = "<div class='alert alert-danger mt-3' role='alert'>insert all fields</div>";
    }else{
        $p_name = $_REQUEST["p_name"];
    $p_date = $_REQUEST["p_date"];
    $p_available = $_REQUEST["p_available"];
    $p_total = $_REQUEST["p_total"];
    $p_or_cost = $_REQUEST["p_or_cost"];
    $p_sel_price = $_REQUEST["p_sel_price"];
    $sql="INSERT INTO assetes_tb (p_name, p_dop, p_available, p_total, p_or_price, p_sel_price) 
    VALUES ('{$p_name}','{$p_date}','{$p_available}','{$p_total}','{$p_or_cost}','{$p_sel_price}')";
    $result = mysqli_query($connect,$sql) or die("Query failed.");
    if($result == true){
        $msg = "<div class='alert mt-3 alert-success' role='alert'>successfully assigned</div>";
    }
    }
    
}

?>

<div class="container-fluid">
    <div class="row">
    <!-- start side bar  -->
        <?php include("sidebar.php");?>
        <!-- end side bar  -->
        <!-- start insert  content  -->
        <div class="col-sm-6 mt-5  jumbotron">
        <h3 class="text-center text-capitalize">assign technician</h3>

            <table class="table ">
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                <div class="form-group">
                    <input type="hidden" class="form-control" placeholder="product id" name="p_id">
                </div>
                <div class="form-group">
                    <label for=""> product name</label>
                    <input type="text" class="form-control" placeholder="name" name="p_name">
                </div>
                <div class="form-group">
                    <label for="">date of purchase</label>
                    <input type="date" class="form-control" placeholder="Date of product" name="p_date">
                </div>
                <div class="form-group">
                    <label for="">available</label>
                    <input type="text" class="form-control" placeholder="available" name="p_available">
                </div>
                <div class="form-group">
                    <label for="">total</label>
                    <input type="text" class="form-control" placeholder="total" name="p_total">
                </div>
                <div class="form-group">
                    <label for="">orginal cost</label>
                    <input type="text" class="form-control" placeholder="orginal cost" name="p_or_cost">
                </div>
                <div class="form-group">
                    <label for="">selling price</label>
                    <input type="text" class="form-control" placeholder="selling price" name="p_sel_price">
                </div>
                <input type="submit" class="btn btn-danger" name="assetbtn">
                <a href="assets.php" class="btn btn-secondary ml-2"> close</a>
                <?php if(isset($msg)){ echo "$msg";}  ?>
                
                </form>

            
            </table>
        </div>
        <!-- end insert content  -->
    </div>
</div>
<?php
include("includes/footer.php");
?>

















