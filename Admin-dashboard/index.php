<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="../assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="../assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="../assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="../assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="../assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="../assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/lib/helper.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo">
                        <a href="index.html">
                            <img src="../upload/logo/logo3.jpg" style="width: 95%; border-radius: 10px;"/>
                        </a>
                    </div>
                    <li class="treeview">
                    <a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                </li>
                <li class="label">Accademics</li>
                <li>
                    <a class="sidebar-sub-toggle"><i class="fa fa-bank"></i>student class<span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li><a  href="create-class.php"><i class="fa fa-book"></i><span>create class</span></a></li>
                        <li><a  href="manage-classes.php"><i class="fa fa-building-o"></i><span>manage class</span></a></li>
                    </ul>
                </li>
                <li>
                    <a class="sidebar-sub-toggle"><i class="fa fa-user"></i>students<span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li><a  href="add_student.php"><i class="fa fa-book"></i><span>add student</span></a></li>
                        <li><a  href="manage-students.php"><i class="fa fa-building-o"></i><span>manage students</span></a></li>
                    </ul>
                </li>
                <li>
                    <a class="sidebar-sub-toggle"><i class="fa fa-building-o"></i>subjects<span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li><a  href="subjects"><i class="fa fa-book"></i><span>create subject</span></a></li>
                        <li><a  href="departments/departmentslist"><i class="fa fa-building-o"></i><span>manage subject</span></a></li>
                        <li><a  href="departments/departmentslist"><i class="fa fa-building-o"></i><span>add subject combination</span></a></li>
                        <li><a  href="departments/departmentslist"><i class="fa fa-building-o"></i><span>manage subject combination</span></a></li>
                    </ul>
                </li>
                <li><a href="user/userlist"><i class="fa fa-users"></i><span>Teachers</span></a></li>
                <li><a class="sidebar-sub-toggle"><i class="fa fa-graduation-cap"></i><span>Results</span><i class="sidebar-collapse-icon ti-angle-down"></i></a>
                    <ul>
                        <li><a  href="result"><i class="fa fa-graduation-cap"></i><span>add Results</span></a></li>
                        <li><a  href="result_template"><i class="fa fa-graduation-cap"></i><span>manage Result</span></a></li>
                    </ul>
                </li>
                <li class=" bg-green"><a href="results"  target="_blank" ><i class="fa fa-trophy"></i><span>Front end result</span></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1></h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                   <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="dropdown user user-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img style="width: 20px; height: 20px;" src="av010.png" class="img-circle"/>
                                        <span class="hidden-xs">vicent</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- User image -->
                                        <li class="user-header">
                                            <img style="width: 150px; height: 150px;" src="av010.png" class="img-circle"/>
                                            <p><small>System Administrator</small>
                                            </p>
                                        </li>
                                        <!-- Menu Footer-->
                                        <li class="user-footer">
                                            <div class="">
                                                <a style="width: 100%;margin-bottom: 10px;" href="changeavatar" class="btn btn-default btn-flat"><i class="fa fa-user"></i> Change avatar
                                                </a>
                                                <a style="width: 100%;margin-bottom: 10px;" href="changepass" class="btn btn-default btn-flat"><i class="fa fa-key"></i> Change password
                                                </a>
                                            </div>
                                            <div class="">
                                                <a style="width: 100%;margin-bottom: 10px;" href="logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Log out
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /# column -->
        </div>
        <!-- /# row -->
        <section id="main-content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib">
                                <i class="fa fa-ticket color-success border-success"></i>
                            </div>
                            <div class="stat-content dib">
                                <div class="stat-text">Subjects</div>
                                <div class="stat-digit"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib">
                                <i class="fa fa-bank color-primary border-primary"></i>
                            </div>
                            <div class="stat-content dib">
                                <div class="stat-text">Classes</div>
                                <div class="stat-digit"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-users color-pink border-pink"></i>
                            </div>
                            <div class="stat-content dib">
                                <div class="stat-text">Reg Student</div>
                                <div class="stat-digit"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="stat-widget-one ">
                                <div class="stat-icon dib"><i class="fa fa-file-text color-danger border-danger"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Results</div>
                                    <div class="stat-digit"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    

     <!-- jquery vendor -->
    <script src="../assets/js/lib/jquery.min.js"></script>
    <script src="../assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="../assets/js/lib/menubar/sidebar.js"></script>
    <script src="../assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="../assets/js/lib/bootstrap.min.js"></script>
    <script src="../assets/js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="../assets/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="../assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="../assets/js/lib/calendar-2/pignose.init.js"></script>
    <script src="../assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="../assets/js/lib/weather/weather-init.js"></script>
    <script src="../assets/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="../assets/js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="../assets/js/lib/chartist/chartist.min.js"></script>
    <script src="../assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="../assets/js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="../assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="../assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->
    <script src="../assets/js/dashboard2.js"></script>
</body>

</html>