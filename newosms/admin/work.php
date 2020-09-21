<?php
define("TITLE","work order");
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
            $sql = "SELECT * FROM assignwork_tb ";
            $result = mysqli_query($connect,$sql) or die("Query failed");
            if(mysqli_num_rows($result) > 0){
                

            ?>
            <table class="table text-center ">
                <thead class="font-weight-bold text-capitalize">
                    <tr>
                        <td>req id</td>
                        <td>req info </td>
                        <td> name</td>
                        <td> address</td>
                        <td> city</td>
                        <td> mobile</td>
                        <td> technician</td>
                        <td> assigned date</td>
                        <td> action</td>
                    </tr>
                
                </thead>
                <tbody>
                <?php 
                while($row = mysqli_fetch_array($result)){
                ?>
                <tr class="border-bottom">
                    <td class="font-weight-bold"><?php echo $row["request_id"];?></td>
                    <td><?php echo $row["request_info"];?></td>
                    <td><?php echo $row["request_name"];?> </td>
                    <td><?php echo $row["requester_add1"];?> </td>
                    <td><?php echo $row["requester_city"];?> </td>
                    <td><?php echo $row["request_mbl"];?> </td>
                    <td><?php echo $row["assaign_tech"];?> </td>
                    <td><?php echo $row["assaign_date"];?> </td>
                    <td> <form action="viewassaign.php" class="d-line" method="post" >
                    <input type="hidden" name="chkid" value="<?php echo $row["request_id"];?>">
                    <button type="submit" name="dltbtn" class="btn d-inline btn-sm btn-warning"><i class="fas fa-trash-alt    "></i></button>
                    <button type="submit" name="viewbtn" class="btn d-inline btn-sm btn-secondary"><i class="fas fa-eye   "></i></button>
                    
                    </form> </td>
                </tr>
                <?php }?>
                </tbody>
                <?php
              
            }else{
                echo "<h1>no assaign request</h1>";
            }
            ?>

            </table>
           
                
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

















