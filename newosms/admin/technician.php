<?php
define("TITLE","technician page");
define("PAGE","technician");
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
        <p class="bg-dark text-white text-capitalize mt-5 p-2">List of technician</p>
    <?php
    $sql = "SELECT * FROM technician_tb";
    $result= mysqli_query($connect,$sql) or die("Query failed");
    if(mysqli_num_rows($result) > 0){
        
    ?>

        <table class="table ">
            <thead class="font-weight-bold text-capitalize table-primary">
            <tr>
                <td>technician id</td>
                <td> technician name</td>
                <td> techinician city </td>
                <td> techinician mobile </td>
                <td> techinician email </td>
                <td>action </td>
            </tr>
            </thead>
            <tbody>
            <?php
            while($row = mysqli_fetch_array($result)){
            
            ?>
            <tr>
                <td><?php echo $row["empid"];?></td>
                <td><?php echo $row["emp_name"];?></td>
                <td><?php echo $row["emp_city"];?></td>
                <td><?php echo $row["emp_mobile"];?></td>
                <td><?php echo $row["emp_mail"];?></td>
                <td><form action="edittech.php" method="post">
                <input type="hidden" name="emp_id" value="<?php echo $row["empid"];?>">
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
   
}else{
    echo "no techinician";
}
    
    
    ?>
          
                
           
                
        </div>
        <!-- end request content  -->
    </div>
</div>
<div><a href="insertreq.php" class="btn btn-danger float-right"> <i class="fas fa-plus fa-2x    "></i></a></div>
<?php
include("includes/footer.php");
?>

















