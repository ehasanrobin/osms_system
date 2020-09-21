  <!-- registration form start -->
  <?php
include("config.php");
  if(isset($_REQUEST["r_signup"])){
    //check empty input field
      if(($_REQUEST["name"] == "") || ($_REQUEST["email"] == "") || ($_REQUEST["password"] == "")){
          $reg_msg = '<div class="alert alert-warning" role="alert">all fields are required</div>';
      }else{
        //select email id num rows
        $sql1 = "SELECT r_email FROM requesterlogin_tb WHERE r_email = '".$_REQUEST["email"]."' ";
          $result1 = mysqli_query($connect,$sql1) or die("select query failed.");
          if(mysqli_num_rows($result1) > 0){
            $reg_msg = '<div class="alert alert-warning" role="alert">you are aleady registered</div>';
          }else{
            //get registration form value
            $name = mysqli_real_escape_string($connect,$_REQUEST["name"]);
            $email = mysqli_real_escape_string($connect,$_REQUEST["email"]);
            $password = mysqli_real_escape_string($connect,md5(sha1($_REQUEST["password"])));
            //insert in database 
            $sql ="INSERT INTO requesterlogin_tb (r_name,r_email,r_password) VALUES ('{$name}','{$email}','{$password}')";
            $result = mysqli_query($connect,$sql) or die("insert query failed.");
            if($result == true){
               
                $reg_msg = '<div class="alert alert-success" role="alert">account created successfully</div>';
            }
          }
      }
  }


?>
  <section id="registration">
    <div class="container pt-5">
        <h2 class="text-center">create an account</h2>
        <div class="row mt-4 mb-4">
            <div class="col-md-6 offset-md-3">
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" class="shadow-lg p-4 br-4">
                <div class="form-group">
                    <i class="fas fa-user    "></i> <label for="rname" class="font-weight-bold pl-2">name</label>
                    <input type="text" name="name" class="form-control " placeholder="name" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-user    "></i> <label for="remail" class="font-weight-bold pl-2">email</label>
                    <input type="email" name="email" class="form-control" placeholder="email" required>
                    <small>we will never share your email with anyone else</small>
                </div>
                <div class="form-group">
                    <i class="fas fa-key    "></i> <label for="rpass" class="font-weight-bold pl-2">new password</label>
                    <input type="password" name="password" class="form-control" placeholder="password" required>
                </div>
                <button name="r_signup" class="btn btn-lg btn-danger shadow-sm font-weight-bold mt-5 btn-block" type="submit"> sign-up</button>
                <em style="font-size:10px">Note - By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy.</em> 
                <?php if(isset($reg_msg)){ echo $reg_msg;}?>     
             </form>

            </div>
        </div>
    </div>
    </section>
    <!-- registration form end  -->