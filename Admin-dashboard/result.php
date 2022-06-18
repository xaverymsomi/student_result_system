<?php include "bar.php" ?>

  <section class="content-header">
    <center>
      <h3><i class="fa fa-trophy"></i>Result form</h3>
    </center>
  </section>
        <form action="" method="POST" class="form-horizontal" style="margin: 20px; width: 100%; height: 100px; position: relative; left: 100px;">
            <div class="row">
                <div class="col-sm-1">
                  <label class="form-label">ID number</label>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <label class="form-label">Select Department</label>
                </div>
                  <div class="col-sm-4">
                    <select name="department" id="department" class="form-control required" >
                      <option value="0" >Select Department</option>
                      <option value="1">A</option><option value="2">B</option></select>
                  </div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <label class="form-label">Seelct class</label>
                </div>
                  <div class="col-sm-4">
                    <select name="department" id="department" class="form-control required" >
                      <option value="0" >Select Class</option>
                      <option value="1">One</option><option value="2">Two</option></select>
                  </div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <label class="form-label">Seelct Terminal</label>
                </div>
                  <div class="col-sm-4">
                    <select name="department" id="department" class="form-control required" >
                      <option value="0" >Select Terminal</option>
                      <option value="1">1 Terminal</option><option value="2">2 Terminal</option></select>
                  </div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <label class="form-label"><strong>Seelct Year</strong></label>
                </div>
                  <div class="col-sm-4">
                    <select name="department" id="department" class="form-control required" >
                      <option value="#" >Select Year</option>
                      <option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option></select>
                  </div>
            </div>            
            <div class="row">
              <div class="col-sm-4">
                  <input type="submit" class="btn btn-primary" value="View result" name="">
                </div>
            </div>
        </form>