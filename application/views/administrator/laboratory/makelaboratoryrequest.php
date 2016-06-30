<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <?php
        $attributes = array('class'=>'form-horizontal', 'role'=>'form');
        echo form_open('admin/make_laboratoryrequest/', $attributes);
      ?>
      <div class="col-sm-12">
        <center><h4>MAKE LABORATORY REQUEST</h4></center>
      </div>
      <div class="col-sm-3">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <table class="table">
                <tr>
                  <td colspan="2" align="center"><h5><a class="btn btn-info" data-toggle="modal" href="#addnewroom">+ADD NEW ROOM</a></h5></td>
                </tr>
              </table>
          </section>
      </div>
      <div class="col-sm-4">
        <header class="panel-heading" style="background-color: #000;"></header>
        <header class="panel-heading">
        </header>
        <div class="panel-body">

            <center>
              <header class="panel-heading" align="center">LIST OF PATIENTS</header>
            <div class="form-group">
                <div class="col-lg-12">
                  <select name="patient" size="20" style="height: 100%;">
                    <?php
                      foreach($patientlist as $patient){
                        echo "<option value='".$patient['patient_id']."'>";
                          echo $patient['patient_id'].": ".$patient['first_name']." ".$patient['middle_name']." ".$patient['last_name'];
                        echo "</option>";
                      }

                      /*echo "<option value='".$patient['patient_id']."'>";
                        echo $patient['patient_id'].": ".$patient['first_name']." ".$patient['middle_name']." ".$patient['last_name'];
                      echo "</option>";*/
                    ?>
                  </select>
                </div>
            </div>
          </center>
          </div>
        </div>
        <div class="col-sm-4">
          <header class="panel-heading" style="background-color: #000;"></header>
          <header class="panel-heading">
          </header>
          <div class="panel-body">

              <center>
                <header class="panel-heading" align="center">LIST OF LABORATORY EXAMINATION</header>
              <div class="form-group">
                  <div class="col-lg-12">
                    <select name="laboratoryexamination" size="20" style="height: 100%;">
                      <?php
                        foreach($patientlist as $patient){
                          echo "<option value='".$patient['patient_id']."'>";
                            echo $patient['patient_id'].": ".$patient['first_name']." ".$patient['middle_name']." ".$patient['last_name'];
                          echo "</option>";
                        }

                        /*echo "<option value='".$patient['patient_id']."'>";
                          echo $patient['patient_id'].": ".$patient['first_name']." ".$patient['middle_name']." ".$patient['last_name'];
                        echo "</option>";*/
                      ?>
                    </select>
                  </div>
              </div>
            </center>


            </div>
          </div>
          <div class="form-group">
              <div class="col-lg-12">
                <center>
                  <input type="submit" value="Save" class="btn btn-info">
                </center>
              </div>
          </div>
        <?=form_close()?>
      </div>
    </div>
  </section>
</section>
