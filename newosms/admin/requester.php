<?php
define("TITLE","requester page");
define("PAGE","requester");
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
        <!-- start request content  -->
        <div class="col-sm-10 mt-5 text-center" >
        <p class="bg-dark text-white mt-5 p-2">List of requesters</p>
    <?php
    $sql = "SELECT * FROM requesterlogin_tb";
    $result= mysqli_query($connect,$sql) or die("Query failed");
    if(mysqli_num_rows($result) > 0){
        

    
    ?>

        <table class="table ">
            <thead class="font-weight-bold text-capitalize table-primary">
            <tr>
                <td>requester id</td>
                <td>name</td>
                <td>email </td>
                <td>action </td>
            </tr>
            </thead>
            <tbody>
            <?php
            while($row = mysqli_fetch_array($result)){
            
            ?>
            <tr>
                <td><?php echo $row["r_login_id"];?></td>
                <td><?php echo $row["r_name"];?></td>
                <td><?php echo $row["r_email"];?></td>
                <td><form action="editrequester.php" method="post">
                <input type="hidden" name="r_id" value="<?php echo $row["r_login_id"];?>">
                <button type="submit" name="editbtn" class="btn btn-primary"> <i class="fas fa-pen  "></i></button>
                <button type="submit" name="dltbtn" class="btn btn-secondary" > <i class="fas fa-trash    "></i> </button>
                
                </form></td>
                
            </tr>
            <?php 
             }
            
            ?>

            
            </tbody>
        </table>
    <?php
   
}
    
    
    ?>
          
                
           
                
        </div>
        <!-- end request content  -->
    </div>
</div>
<?php
include("includes/footer.php");
?>

















