<?php
define("TITLE","view request");
define("PAGE","work order");
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
    $chkid = $_REQUEST["chkid"];
    $sql = "DELETE FROM assignwork_tb WHERE request_id = '{$chkid}'";
    $result =mysqli_query($connect,$sql) or die("Query failed");
    if($result == true){
        header("location:  http://localhost/newosms/admin/work.php");
    }

}
?>

<div class="container-fluid">
    <div class="row">
    <!-- start side bar  -->
        <?php include("sidebar.php");?>
        <!-- end side bar  -->
        <!-- start work content  -->
        <div class="col-md-10 mt-5">
            
                
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12 mt-5 ">
                
            <?php
            if(isset($_REQUEST["viewbtn"])){
                $chkid = $_REQUEST["chkid"];
                $sql="SELECT * FROM assignwork_tb WHERE request_id = '{$chkid}'";
                $result= mysqli_query($connect,$sql) or die("Queary failed");
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                
            ?>
             <h3 class="text-capitalize text-center m-3">assinged work details</h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Request id</td>
                        <td><?php echo $row["request_id"];?></td>
                    </tr>
                    <tr>
                        <td>Request info</td>
                        <td><?php echo $row["request_info"];?></td>
                    </tr>
                    <tr>
                        <td>Request description</td>
                        <td><?php echo $row["request_desc"];?></td>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td><?php echo $row["request_name"];?></td>
                    </tr>
                    <tr>
                        <td>address 1</td>
                        <td><?php echo $row["requester_add1"];?></td>
                    </tr>
                    <tr>
                        <td>address 2</td>
                        <td><?php echo $row["requester_add2"];?></td>
                    </tr>
                    <tr>
                        <td>city</td>
                        <td><?php echo $row["requester_city"];?></td>
                    </tr>
                    <tr>
                        <td>state</td>
                        <td><?php echo $row["requester_state"];?></td>
                    </tr>
                    <tr>
                        <td>zip</td>
                        <td><?php echo $row["requester_zip"];?></td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td><?php echo $row["requester_email"];?></td>
                    </tr>
                    <tr>
                        <td>mobile</td>
                        <td><?php echo $row["request_mbl"];?></td>
                    </tr>
                    <tr>
                        <td> assign date</td>
                        <td><?php echo $row["assaign_date"];?></td>
                    </tr>
                    <tr>
                        <td>technician name</td>
                        <td><?php echo $row["assaign_tech"];?></td>
                    </tr>
                    <tr>
                        <td>customer's</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>technician's sign</td>
                        <td></td>
                    </tr>
                </tbody>
            
            </table>
            <div class="text-center">
                <form action="" method="post" class="d-print-none">
                    <input type="submit" class=" mr-2 btn btn-danger" onClick="window.print()" value="print">
                    <a href="work.php" class="btn  btn-secondary">close</a>
                </form>
                    <?php }
                    } }?>
           
                
                </div>
              
              </div>
                
            </div>
        </div>
        <!-- end work content  -->
    </div>
</div>
<?php
include("includes/footer.php");
?>

















