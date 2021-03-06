<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/php; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CP Admin Panel </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <?php
    DEFINE('DB_USERNAME', 'root');
    DEFINE('DB_PASSWORD', 'root');
    DEFINE('DB_HOST', 'localhost');
    DEFINE('DB_DATABASE', 'CPstudent CARE');
    $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
   ?>

    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col menu_fixed">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><i class="glyphicon glyphicon-cog"></i> <span>CPstudent CARE</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="images/Prof-PP.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Prof.Proadpran Punyabukkana</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">

                                <li><a href="index.php"><i class="fa fa-bar-chart"></i>HOME</a>
                                    <ul class="nav child_menu">
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-user"></i>STUDENTS</a>
                                </li>
                                <li><a><i class="fa fa-pencil"></i>COURSES<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="subject.php">2301710 DATABASE</a></li>
                                        <li><a href="#">2110513 ASSISTIVE TECHNOLOGY</a></li>
                                    </ul>
                                </li>

                                <li><a href="alert.php"><i class="fa fa-frown-o"></i>ALERT</a>
                                    <ul class="nav child_menu">
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/Prof-PP.jpg" alt="">Prof.Proadpran Punyabukkana
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->
                <div class="row tile_count">
                    <div class="col-md-5  col-xs-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>All students</h2>
                                <div class="col-md-5 col-xs-12 " style="margin: 5px 0px 0px 110px">
                                    <label>
                                            <input type="checkbox" class="js-switch" name="adviser" /> Adviser
                                        </label>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form class="form-horizontal form-label-left" action="searchstudent.php" method="get">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">StudentID</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" placeholder="10 character" name="sid">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">First name</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" name="fname">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Last name</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" name="lname">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin: 0px 0px 15px 0px">
                                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" aria-expanded="false" name="gender"> ALL <span class="caret"></span>
                                        </button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li><a href="#">ALL</a>
                                                </li>
                                                <li><a href="#">MALE</a>
                                                </li>
                                                <li><a href="#">FEMALE</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Year</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control" name="year">
                                                <option>ALL</option>
                                                <option>CP43 (Year 1)</option>
                                                <option>CP42 (Year 2)</option>
                                                <option>CP41 (Year 3)</option>
                                                <option>CP40 (Year 4)</option>
                                                <option>Master's degree / Ph.D.</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">GPAX</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control" name="gpax">
                                                <option>ALL</option>
                                                <option>0.00 - 1.00</option>
                                                <option>1.00 - 2.00</option>
                                                <option>2.00 - 3.00</option>
                                                <option>3.00 - 4.00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-5">
                                            <button type="submit" class="btn btn-success">Search</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-7  col-xs-12 ">
                        <div class="x_content">
                            <div class="table-responsive">
                                <table class="table table-striped ">
                                    <thead>
                                        <tr class="headings">
                                            <th class="column-title">Profile image</th>
                                            <th class="column-title">Student ID</th>
                                            <th class="column-title">First name</th>
                                            <th class="column-title">Last name</th>
                                            <th class="column-title">GPAX</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                      <?php
                                      $q="SELECT * FROM student";
                                      $result = $mysqli->query($q);
                                      $total= mysqli_num_rows($result);
                                      $count =1;
                                      while($row = $result->fetch_assoc()) {
                                        if($count%2==0){
                                        echo "<tr class=\"even pointer\" onclick=\"window.document.location='student.php';\">";
                                        printf("<td ><img src=\"images/%s.jpg\" style=\"width:60px;height:60px;\"></td>",$row["image"]);
                                        printf("<td >%s</td>
                                              <td >%s</td>
                                              <td >%s</td>
                                              <td >%s</td>
                                              </td>",$row["studentID"],$row["firstName"],$row["lastName"],$row["phoneNO"]);
                                        echo"</tr>";
                                        $i++;
                                        }
                                        else{
                                          echo "<tr class=\"odd pointer\" onclick=\"window.document.location='student.php';\">";
                                          printf("<td ><img src=\"images/%s.jpg\" style=\"width:60px;height:60px;\"></td>",$row["image"]);
                                          printf("<td >%s</td>
                                                <td >%s</td>
                                                <td >%s</td>
                                                <td >%s</td>
                                                </td>",$row["studentID"],$row["firstName"],$row["lastName"],$row["phoneNO"]);
                                          echo"</tr>";
                                          $i++;
                                        }
                                      }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- jQuery -->
            <script src="vendors/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap -->
            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- FastClick -->
            <script src="vendors/fastclick/lib/fastclick.js"></script>
            <!-- NProgress -->
            <script src="vendors/nprogress/nprogress.js"></script>
            <!-- bootstrap-progressbar -->
            <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
            <!-- iCheck -->
            <script src="vendors/iCheck/icheck.min.js"></script>
            <!-- bootstrap-daterangepicker -->
            <script src="vendors/moment/min/moment.min.js"></script>
            <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
            <!-- bootstrap-wysiwyg -->
            <script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
            <script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
            <script src="vendors/google-code-prettify/src/prettify.js"></script>
            <!-- jQuery Tags Input -->
            <script src="vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
            <!-- Switchery -->
            <script src="vendors/switchery/dist/switchery.min.js"></script>
            <!-- Select2 -->
            <script src="vendors/select2/dist/js/select2.full.min.js"></script>
            <!-- Parsley -->
            <script src="vendors/parsleyjs/dist/parsley.min.js"></script>
            <!-- Autosize -->
            <script src="vendors/autosize/dist/autosize.min.js"></script>
            <!-- jQuery autocomplete -->
            <script src="vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
            <!-- starrr -->
            <script src="vendors/starrr/dist/starrr.js"></script>
            <!-- Custom Theme Scripts -->
            <script src="build/js/custom.js"></script>

</body>

</html>
