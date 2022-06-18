<?php include ("bar.php"); ?>
<div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Create Student Class</h2>
                                </div>
                                
                            </div>
                            <!-- /.row --><!-- 
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                        <li><a href="#">Classes</a></li>
                                        <li class="active">Create Class</li>
                                    </ul>
                                </div>
                               
                            </div> -->
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Create Student Class</h5>
                                                </div>
                                            </div>
    
                                            <div class="panel-body">

                                                <form method="post" class="form-horizontal">
                                                    <div class="form-group">
                                                        <label for="success" class="control-label">Class Name</label>
                                                        <div class="">
                                                            <input type="text" name="classname" class="form-control" required="required" id="success">
                                                            <span class="help-block">Eg- Third, Fouth,Sixth etc</span>
                                                        </div>
                                                    </div>
                                                       <div class="form-group ">
                                                        <label for="success" class="control-label">Class Name in Numeric</label>
                                                        <div class="">
                                                            <input type="number" name="classnamenumeric" required="required" class="form-control" id="success">
                                                            <span class="help-block">Eg- 1,2,4,5 etc</span>
                                                        </div>
                                                    </div>
                                                     <div class="form-group ">
                                                        <label for="success" class="control-label">Section</label>
                                                        <div class="">
                                                            <input type="text" name="section" class="form-control" required="required" id="success">
                                                            <span class="help-block">Eg- A,B,C etc</span>
                                                        </div>
                                                    </div>
  <div class="form-group">

                                                        <div class="">
                                                           <button type="submit" name="submit" class="btn btn-primary btn-labeled">Submit<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    </div>


                                                    
                                                </form>

                                              
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-8 col-md-offset-2 -->
                                </div>
                                <!-- /.row -->

                               
                               

                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

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