<!--  PHP  -->
        <?php

            $query2 = "SELECT * FROM school_year ORDER BY sy_id DESC";
            $result2 = mysqli_query($connect, $query2);
            
        ?>
<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
        <header id="header" class="navbar navbar-fixed-top" style='background:#369;'>
            
                <!-- START navbar header -->
                <div class="navbar-header" style='background:#369; '>
                    <!-- Brand -->
                    <a class="navbar-brand" href="javascript:void(0);" style="width:100%;" >
                        <!--span class="logo-figure" style="margin-left:-4px;"></span-->
                        <img src="../images/logo2.png" alt="ischolar_logo"  style="width:135px;height:35px">
                    </a>
                    <!--/ Brand -->

                </div>
                <!--/ END navbar header -->


                  <ul class="nav navbar-right top-nav pull-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog" style="color: white;"></i><b class="caret" style="color: white;"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="admin_profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="change_pass.php"><i class="fa fa-fw fa-lock"></i> Password</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                             <a href="index.php?logout='1'"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Select School year and Semester for the system -->

             <div class="col-sm-2.5 input-column pull-right" style="padding-top: 9px;">
           <!-- <a href="index.php?id=<?php echo $row3[2]; ?> " class="btn btn-danger btn-sm" role="button" > Set </a> -->

            </div>
            <!-- GET THE SCHOOL YEAR AND SEMESTER SET BY THE ADMIN-->
            <?php   
               if(isset($_POST['set_year_sem'])){
    
                    $ys = $_POST['ySem'];
                    $year_sem = (explode(" ",$ys));

                    $_SESSION['SY'] = $year_sem[0];

                    if($year_sem[1] == 'Summer'){
                        $_SESSION['SEM'] = $year_sem[1];
                    }else{
                        $_SESSION['SEM'] = $year_sem[1]." ".$year_sem[2];
                    }
                    
                }

                ?>

                <form method="post">

                <div class="col-sm-2.5 input-column pull-right" style="padding-top: 8px;">

                    <select class="form-control" type="text" name="ySem">
                     <?php while($row3 = mysqli_fetch_array($result2)):;?>
                     <option value="<?php echo $row3[1]." ".$row3[2];?>"><?php echo $row3[1]." - ".$row3[2];?></option>
                     <?php endwhile;?> 
                    </select>
                </div>                              
                    <button class="btn btn-danger btn-sm pull-right" type="submit" name="set_year_sem" style="margin-top: 9px; margin-right: 5px;">Set</button>                  
                </form>

                  
                 

        </header>   
            <!-- Top Menu Items -->
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                  <!-- Ateneo De Naga University Logo -->
               
                    <div class="container-fluid"><p><img class="img-responsive" style="height:140px; width:140px;margin:auto; padding-top: 5px;" src="../images/adnu-seal.png"></p>
                    
                    <h4 style="color: white; font-family: sans-serif; padding-top: 12px; text-align: center;">
                    <strong> <?php echo $_SESSION['admin_full_name'];?></strong>   
                        <p style="color: white; font-family: sans-serif; font-size: 14px; padding-top: 4px; text-align: center;"> College Admissions and Aid Office</p>
                    </h4>
                    </div>
         

                   <br>
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>

                         <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#application"><i class="fa fa-fw fa-folder"></i> Applications <i class="fa fa-fw fa-caret-down pull-right" style="padding-right: 50px;"></i></a>
                            <ul id="application" class="collapse">
                                <li>
                                    <a href="admin_applicant_view.php"><i class="fa fa-fw fa-times"></i>Applicants</a>
                                </li>
                                <li>
                                    <a href="approved_scholars.php"><i class="fa fa-fw fa-child"></i> Granted </a>
                                </li>
                              
                                <li>
                                    <a href="denied_scholars.php"><i class="fa fa-fw fa-times"></i>Denied</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#sy_sem"><i class="fa fa-fw fa-money"></i> SY/Semester <i class="fa fa-fw fa-caret-down pull-right" style="padding-right: 50px;"></i></a>
                        <ul id="sy_sem" class="collapse">
                            <li>
                                <a href="sy_view.php"><i class="fa fa-fw fa-eye"></i> View </a>
                            </li>
                          
                            <li>
                                <a href="create_sy.php"><i class="fa fa-fw fa-plus"></i>Add</a>
                            </li>
                        </ul>
                    </li>


                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#renew"><i class="fa fa-fw fa-folder"></i> Renewal <i class="fa fa-fw fa-caret-down pull-right" style="padding-right: 50px;"></i></a>
                            <ul id="renew" class="collapse">
                                <li>
                                    <a href="renewal_grant.php"><i class="fa fa-fw fa-thumbs-up"></i> Renewed Applicant </a>
                                </li>
                              
                                <li>
                                    <a href="renewal_pending.php"><i class="fa fa-fw fa-spinner"></i>Pending</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                                <a href="javascript:;" data-toggle="collapse" data-target="#scholars"><i class="fa fa-fw fa-graduation-cap"></i>Scholars<i class="fa fa-fw fa-caret-down pull-right" style="padding-right: 50px;"></i></a>
                            <ul id="scholars" class="collapse">
                                                                                        
                                <li>
                                    <a href="sa_view.php"><i class="fa fa-fw fa-eye"></i> Student Assistant</a>
                                </li>

                                <li>
                                    <a href="scholar_view.php"><i class="fa fa-fw fa-eye"></i> Non-S.A Scholar</a>
                                </li>

                            </ul>
                        </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#rate"><i class="fa fa-fw fa-money"></i> Rate <i class="fa fa-fw fa-caret-down pull-right" style="padding-right: 50px;"></i></a>
                        <ul id="rate" class="collapse">
                            <li>
                                <a href="rate_view.php"><i class="fa fa-fw fa-eye"></i> View </a>
                            </li>
                          
                            <li>
                                <a href="create_rate.php"><i class="fa fa-fw fa-plus"></i>Add</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#office"><i class="fa fa-bank"></i> Office <i class="fa fa-fw fa-caret-down pull-right" style="padding-right: 50px;"></i></a>
                        <ul id="office" class="collapse">
                            <li>
                                <a href="office_view.php"><i class="fa fa-fw fa-eye"></i> View </a>
                            </li>
                          
                            <li>
                                <a href="office_add.php"><i class="fa fa-fw fa-plus"></i>Add</a>
                            </li>
                        </ul>
                        </li>   

                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#scholarship"><i class="fa fa-fw fa-graduation-cap"></i> Scholarship <i class="fa fa-fw fa-caret-down pull-right" style="padding-right: 50px;"></i></a>
                            <ul id="scholarship" class="collapse">
                                <li>
                                    <a href="scholarship_view.php"><i class="fa fa-fw fa-eye"></i> View </a>
                                </li>
                              
                                <li>
                                    <a href="scholarship_add.php"><i class="fa fa-fw fa-plus"></i>Add</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="sa_dtr.php"><i class="fa fa-fw fa-calendar"></i> SA-DTR </a>
                        </li>


                        <li>
                                    <a href="office_head_view.php"><i class="fa fa-users"></i> Office Head</a>
                                </li>
                              
                                <li>
                                    <a href="staff_view.php"><i class="glyphicon glyphicon-user"></i> Admission Staff</a>
                        </li>
                    
                    <li>
                         <div class="wthree-footer">
                            <p>&copy; Copyright 2017 <p>Ateneo de Naga University</p> <p> Developed by the iScholar Team. </p></p>
                        </div>
                    </li>
                </ul>
               
            </div>
            <!-- /.navbar-collapse -->
        </nav>