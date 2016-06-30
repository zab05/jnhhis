<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-12">
        <center><h4><a href='MakeLaboratoryRequests' role='button' class='btn btn-default btn-xs'><</a>MAKE LABORATORY REQUEST</h4></center>
        <header class="panel-heading" align="center">FILL LABORATORY REQUEST FORM</header>
      </div>
      <div class="col-sm-12">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <header class="panel-heading">
   <center><h4>PATIENT DETAILS<h4></center>
              </header>
              <table class="table table-striped">
                  <thead>
                  <tr>
                      <td style="text-align: center;"><b>Name:</b> &ensp;<?php echo $patient->first_name." ".$patient->last_name; ?></td>
                  </tr>
                  <tr>
                      <td style="text-align: center;"><b>Address:</b> &ensp;<?php echo $patient->present_address; ?></td>
                  </tr>
                  <tr>
                      <td style="text-align: center;"><b>Number:</b> &ensp;<?php echo $patient->mobile_number." / ".$patient->telephone_number; ?></td>
                  </tr>
                  <tr>
                      <td style="text-align: center;"><b>Date of Birth:</b> &ensp;<?php echo $patient->birthdate; ?></td>
                  </tr>
                  <tr>
                      <td style="text-align: center;"><b>Gender:</b> &ensp;<?php echo $patient->gender ?></td>
                  </tr>
                  </thead>
                  <tbody align="center">

                  </tbody>
              </table>
          </section>
      </div>
      <div class="col-sm-12">
        <header class="panel-heading">
        </header>
        <div class="panel-body">

            <center>
              <?php
                $attributes = array('class'=>'form-horizontal', 'role'=>'form');
                echo form_open('admin/insert_laboratoryrequest/', $attributes);
              ?>
              <header class="panel-heading" align="center">CHOOSE LABORATORY EXAMINATION</header>
            <div class="form-group">
                <div class="col-lg-12">
                  <select name="laboratoryexam" size="5" style="height: 100%;">
                    <option value'1'>1: Hematology</option>
                    <?php
                      /*foreach($patientlist as $patient){
                        echo "<option value='".$patient['patient_id']."'>";
                          echo $patient['patient_id'].": ".$patient['first_name']." ".$patient['middle_name']." ".$patient['last_name'];
                        echo "</option>";
                      }*/

                    ?>
                  </select>
                  <div class="form-group">
                    <br>
                      <label  class="col-lg-5 col-sm-3 control-label">Urgency:</label>
                      <div class="col-lg-2">
                          <select class="form-control" name="urgency">
                                <option value='1'>Normal</option>";
                                <option value='2'>Urgent</option>";
                          </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <br>
                      <label  class="col-lg-5 col-sm-3 control-label">Fasting:</label>
                      <div class="col-lg-2">
                          <select class="form-control" name="urgency">
                                <option value='1'>Non-Fasting</option>";
                                <option value='2'>Fasting</option>";
                          </select>
                      </div>
                  </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                  <center>
                    <br>
                    <input type="submit" value="Request" class="btn btn-info">
                  </center>
                </div>
            </div>
          <?=form_close()?>
          </center>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
