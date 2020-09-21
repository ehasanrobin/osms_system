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


<div class="container-fluid">
    <div class="row">
    <!-- start side bar  -->
        <?php include("sidebar.php");?>
        <!-- end side bar  -->
        <!-- start dashboard content  -->
        <div class="col-sm-4 mt-5">
        <?php 

        if(isset($_SESSION["myid"])){
            $c_id =$_SESSION["myid"];
            $sql="SELECT * FROM customer_tb WHERE cp_id ='{$c_id}'";
            $result=mysqli_query($connect,$sql) or die("Query failed");
            if($result == true){
                while($row = mysqli_fetch_array($result)){

            
        
        
        ?>
         <p class="bg-dark text-white d-print-none text-center text-capitalize mt-5 p-2">List of technician</p>
            <table class="table table-bordered">
            <tbody>
            <tr>
                <th>customer id</th>
                <td><?php echo $row["cp_id"];?></td>
            </tr>
            <tr>
                <th>customer name</th>
                <td><?php echo $row["cp_cust_name"];?></td>
            </tr>
            <tr>
                <th>address</th>
                <td><?php echo $row["cp_add"];?></td>
            </tr>
            <tr>
                <th>product</th>
                <td><?php echo $row["cp_name"];?></td>
            </tr>
            <tr>
                <th>quantity</th>
                <td><?php echo $row["cp_quantity"];?></td>
            </tr>
            <tr>
                <th>price each</th>
                <td><?php echo $row["cp_each"];?></td>
            </tr>
            <tr>
                <th>price cost</th>
                <td><?php echo $row["cp_total"];?></td>
            </tr>
            <tr>
                <th>date</th>
                <td><?php echo $row["cp_date"];?></td>
            </tr>
            <tr class="text-center">
            <td colspan="2"><form action="" class="d-print-none"><input type="submit" value="print" class="btn btn-danger" onClick="window.print()">
                    <a href="assets.php " class="btn btn-secondary d-print-none" > close</a>
            </form></td>
            
            </tr>
            </tbody>
            
            </table>
            <?php 
                }
            }

        }
            
            
            ?>
        </div>
        <!-- end dashboard content  -->
    </div>
</div>
<?php
include("includes/footer.php");
?>

















