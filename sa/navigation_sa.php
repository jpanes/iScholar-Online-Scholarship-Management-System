  <!--  PHP  -->
        <?php
        // Remembers the student assistant state whether time-in/out  
         if(isset($_POST['home']))
            {
            $query = "SELECT TIME_OUT FROM dtr WHERE SA_ID = '{$_SESSION['saID']}' ORDER BY DTR_ID DESC LIMIT 1";
                        $result = mysqli_query($connect, $query);
                        $row = mysqli_fetch_assoc($result);
                        $outVal = $row['TIME_OUT'];
                        //Check the user DTR state is empty 
                        if($outVal === '0000-00-00 00:00:00' || $outVal === ""){
                            header('location: time_out.php');
                        }else{
                            header('location: time_in.php');
                        }
            }

            $query5 = "SELECT * FROM student_assistant WHERE ID_NUMBER = '{$_SESSION['username']}'";
            $result5 = mysqli_query($connect, $query5);
            
        ?>

<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <header id="header" class="navbar navbar-fixed-top" style='background:#369;'>
                <!-- START navbar header -->
                <div class="navbar-header" style='background:#369; '>
                    <!-- Brand -->
                    <a class="navbar-brand" href="../javascript:void(0);" style="width:100%;" >
                        <!--span class="logo-figure" style="margin-left:-4px;"></span-->
                        <img src="../images/logo2.png" alt="ischolar_logo"  style="width:135px;height:35px;">
                    </a>
                    <!--/ Brand -->

                </div>
                <!--/ END navbar header -->
            <ul class="nav navbar-right top-nav">
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog" style="color: white;"></i><b class="caret" style="color: white;"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../sa/sa_profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="change_pass.php"><i class="fa fa-fw fa-lock"></i> Password</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                             <a href="time_in.php?logout='1'"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>  
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
             <!-- Ateneo De Naga University Logo -->
                    <?php while($row5 = mysqli_fetch_array($result5)):; ?>
                    <div class="container-fluid"><p><img class="img-responsive" style="height:140px; width:140px;margin:auto; padding-top: 5px;" src="../images/adnu-seal.png"></p>
                    
                    <h4 style="color: white; font-family: sans-serif; padding-top: 12px; text-align: center;">
                    <strong> <?php echo $row5['FIRST_NAME']." ".$row5['MIDDLE_INITIAL'].". ".$row5['LAST_NAME'];?></strong>   
                        <p style="color: white; font-family: sans-serif; font-size: 14px; padding-top: 4px; text-align: center;"> <?php echo $row5['COURSE'];?></p>
                    </h4>
                    </div>
                   <?php endwhile ?>

                   <br>

                    <li class="active">
                        <form method="post">
                            <button class="btn btn-primary"  style="width:225px; text-align: left; background-color: #080808; border-color: #080808" type="submit" name="home"> <i class="fa fa-fw fa-home"></i> Home</button>
                        </form>
                    </li>
                   
                    <li class="active">
                        <a href="renew_sa.php"><i class="fa fa-fw fa-graduation-cap"></i> Renew Scholarship </a>
                    </li>
                                            
                    <li class="active">
                         <a href="DTR-report.php"><i class="fa fa-fw fa-list-alt"></i> DTR </a>
                    </li>

                    <li class="active">
                        <a href="contact_sa.php"><i class="fa fa-fw fa-phone"></i> Contact Us</a>
                    </li>

                    <li>
                        <div class="wthree-footer">
                            <p>&copy; Copyright 2017 <p>Ateneo de Naga University, Ateneo Avenue, Naga City, 4400 Philippines</p> <p> Developed by the iScholar Team. </p></p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

      











