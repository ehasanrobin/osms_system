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


<div class="container-fluid">
    <div class="row">
    <!-- start side bar  -->
        <?php include("sidebar.php");?>
        <!-- end side bar  -->
        <!-- start request content  -->
        <div class="col-sm-10 mt-5 text-center" >
        <p class="bg-dark text-white text-capitalize mt-5 p-2">product/parts details</p>
    <?php
    $sql = "SELECT * FROM assetes_tb";
    $result= mysqli_query($connect,$sql) or die("Query failed");
    if(mysqli_num_rows($result) > 0){
        
    ?>

        <table class="table ">
            <thead class="font-weight-bold text-capitalize table-primary">
            <tr>
                <td>product id</td>
                <td> name</td>
                <td> Dop </td>
                <td> available </td>
                <td> total </td>
                <td> orginal cost each </td>
                <td> selling price </td>
                <td>action </td>
            </tr>
            </thead>
            <tbody>
            <?php
            while($row = mysqli_fetch_array($result)){
            
            ?>
            <tr>
                <td><?php echo $row["p_id"];?></td>
                <td><?php echo $row["p_name"];?></td>
                <td><?php echo $row["p_dop"];?></td>
                <td><?php echo $row["p_available"];?></td>
                <td><?php echo $row["p_total"];?></td>
                <td><?php echo $row["p_or_price"];?></td>
                <td><?php echo $row["p_sel_price"];?></td>
                <td><form action="editasset.php" method="post" class="d-inline">
                <input type="hidden" name="p_id" value="<?php echo $row["p_id"];?>">
                <button type="submit" name="editbtn" class="btn btn-primary"> <i class="fas fa-pen  "></i></button>
                <button type="submit" name="dltbtn" class="btn btn-secondary" > <i class="fas fa-trash    "></i> </button>
                
                </form>
                <form action="sellproduct.php" method="post" class="d-inline">
                <input type="hidden" name="p_id" value="<?php echo $row["p_id"];?>">
                <button type="submit" name="sellbtn" class="btn btn-warning"> <i class="fas fa-handshake    "></i></button>
                
                </form>
                
                
                </td>
                
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
<div><a href="insertassets.php" class="btn btn-danger float-right"> <i class="fas fa-plus fa-2x    "></i></a></div>
<?php
include("includes/footer.php");
?>

















