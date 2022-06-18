 <?php include ("bar.php") ?>
<div class="content-wrapper mark-page">
    <section class="content-header"><h1><i class="fa fa-trophy"></i> Tabulation Sheet <small>  </small></h1></section>
    <section class="content-header">
        <div class="row">
            <div class="col-md-12">
                <div class="row"><div class="col-md-12"></div></div>            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <form role="form" class="form-horizontal"  action="http://rms.codervex.com/tabulation/details" method="post">
                <div class="box" id="form-box">
                    <div class="box-body form-horizontal" >
                        <div class="row"><div class="col-md-6"> <div class="form-group"><label for="field_id_department" class="col-sm-4 control-label">Select Department</label><div class="col-sm-8"><select name="department" id="department" class="form-control required" ><option value="0" > Select Department </option><option value="1">A</option><option value="2">B</option></select></div></div> </div></div>
                        <div class="row"><div class="col-md-6"> <div class="form-group"><label for="field_id_class" class="col-sm-4 control-label">Seelct class</label><div class="col-sm-8"><select name="class_name" id="class" class="form-control required" ><option value="0" > Select Class </option><option value="1">One</option><option value="2">Two</option></select></div></div> </div></div>
                        <div class="row"><div class="col-md-6"> <div class="form-group"><label for="field_id_exam" class="col-sm-4 control-label">Seelct exam</label><div class="col-sm-8"><select  id="exam" name="exam_name"   class="form-control required " ><option value="0"> Select Exam </option><option value="1">1st Tearminal</option></select></div></div> </div></div>
                        <div class="row"><div class="col-md-6"> <div class="form-group"><label for="field_id_year" class="col-sm-4 control-label">Select year</label><div class="col-sm-8"><select id="id_year" class="form-control" name="year" required="required"><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option></select></div></div> </div></div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                               <div class="col-sm-4 control-label"></div>
                               <div class="col-sm-8">
                               <input type="submit" class="btn btn-primary" value="View Sheet" name="">
                               </div>
                            </div>
                          </div>
                       </div>
                    </div>
                </div>

                <input type="hidden" name="csrf_rms" value="341779e520dc98a6ad7a453ddadeb9fd" />
              </form>

                <div class="box" id="result-area" style="display: none;">
                  <div class="box-body">
                      <!-- Result -->
                        <div class="row">
                            <div class="col-md-12">
                                <div id="result"></div>
                            </div>
                        </div>
                  </div>
                </div>


            </div>
        </div>
    </section>
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