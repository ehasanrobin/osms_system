<nav class="col-sm-2 d-print-none bg-light side-bar mt-5 py-5">
            <div class="sidebar-sticky ">
                <ul class=" nav flex-column mb-5">
                    <li class="nav-item"><a class="nav-link <?php if(PAGE == 'dashboard'){echo 'active';} ?> font-weight-light text-dark" href="dashboard.php"><span><i class="fas fa-tachometer-alt"></i></span> dashboard</a></li>
                    <li class="nav-item"><a class="nav-link <?php if(PAGE == 'work order'){echo 'active';} ?> font-weight-light text-dark" href="work.php"><span><i class="fab fa-accessible-icon"></i></span> work order</a></li>
                    <li class="nav-item"><a class="nav-link <?php if(PAGE == 'request'){echo 'active';} ?> font-weight-light text-dark" href="request.php"><span><i class="fas fa-align-center"></i></span> request</a></li>
                    <li class="nav-item"><a class="nav-link <?php if(PAGE == 'assets'){echo 'active';} ?> font-weight-light text-dark" href="assets.php"><span><i class="fas fa-database"></i></span> assets</a></li>
                    <li class="nav-item"><a class="nav-link <?php if(PAGE == 'technician'){echo 'active';} ?> font-weight-light text-dark" href="technician.php"><span><i class="fas fa-hands-helping    "></i></span> technician</a></li>
                    <li class="nav-item"><a class="nav-link  <?php if(PAGE == 'requester'){echo 'active';} ?> font-weight-light text-dark" href="requester.php"><span> <i class="fas fa-users    "></i> </span> requester</a></li>
                    <li class="nav-item"><a class="nav-link  <?php if(PAGE == 'sellreport'){echo 'active';} ?> font-weight-light text-dark" href="sellreport.php"><span> <i class="fas fa-calendar-minus"></i> </span> sell report</a></li>
                    <li class="nav-item"><a class="nav-link  <?php if(PAGE == 'workreport'){echo 'active';} ?> font-weight-light text-dark" href="workreport.php"><span><i class="fas fa-calendar-week"></i></span> work report</a></li>
                    <li class="nav-item"><a class="nav-link  <?php if(PAGE == 'changepassword'){echo 'active';} ?> font-weight-light text-dark" href="changepwd.php"><span> <i class="fas fa-key    "></i></span> change password</a></li>
                    <li class="nav-item"><a class="nav-link font-weight-light text-dark" href="logout.php"><span> <i class="fas fa-sign-out-alt    "></i></span> log out</a></li>
           
                    
                    
                </ul>
            </div>
        
        </nav>