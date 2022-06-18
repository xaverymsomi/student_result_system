<?php session_start(); ?>
<?php include 'header.php'; ?>
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo">
                        <a href="index.html">
                            <a href="index.html">
                            <img src="../upload/logo/logo3.jpg" style="width: 95%; border-radius: 10px;"/>
                        </a>
                    </div>
                    <li class="treeview">
                    <a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                </li>
                <li><a href="#"><i class="fa fa-users"></i><span>Students</span></a></li>
                <li><a class="sidebar-sub-toggle"><i class="fa fa-graduation-cap"></i><span>Results</span><i class="sidebar-collapse-icon ti-angle-down"></i></a>
                    <ul>
                        <li><a  href="#"><i class="fa fa-graduation-cap"></i><span>Results</span></a></li>
                        <li><a  href="#"><i class="fa fa-graduation-cap"></i><span>Result Templates</span></a></li>
                    </ul>
                </li>
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
                            <h1>Welcome, <span><?php $_SESSION['role'];?></span></h1>
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
                        <div class="stat-widget-one ">
                                <div class="stat-icon dib"><i class="fa fa-file-text color-secondary border-primary"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text" style="color: #000fff;">1 Terminal</div>
                                    <div class="stat-digit"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="stat-widget-one ">
                                <div class="stat-icon dib"><i class="fa fa-file-text color-secondary border-primary"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text" style="color: #000fff;">2 Terminal</div>
                                    <div class="stat-digit"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php include 'script.php'; ?>                