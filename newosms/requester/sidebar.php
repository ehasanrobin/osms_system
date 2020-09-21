  <!-- side bar menu start -->
  <nav class="col-sm-2 bg-light side-bar text-dark d-print-none py-5 mt-5">
            <div class="sidebar-sticky">
            <ul class="nav flex-column   ">
                <li class="nav-item"><a href="requester_profile.php" class="nav-link <?php if(PAGE == profile){echo "active";}?>"><span><i class="fas fa-user    "></i></span> profile</a></li>
                <li class="nav-item"><a href="submit_request.php" class="nav-link  <?php if(PAGE == submit){echo "active";}?>"><span><i class="fab fa-accessible-icon    "></i></span> submit request</a></li>
                <li class="nav-item"><a href="service_requester.php" class="nav-link  <?php if(PAGE == service){echo "active";}?> "><span><i class="fas fa-align-center    "></i> service status</a></li>
                <li class="nav-item"><a href="changepwd_requester.php" class="nav-link  <?php if(PAGE == changepwd){echo "active";}?>"><i class="fas fa-key    "></i></span> change password</a></li>
                <li class="nav-item"><a href="../logout.php" class="nav-link  "><span><i class="fas fa-sign-out-alt    "></i></span> logout</a></li>
            </ul>
            </div>

        </nav>
            <!-- col end  -->
        <!-- side bar menu end -->