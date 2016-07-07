<section id="main-content">
  <section class="wrapper">
    <?php
      $attributes = array('class'=>'form-horizontal', 'role'=>'form');
      echo form_open(base_url().'Radiology/insert_request/');
    ?>
    <div class="row">
      <div class="col-sm-4">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <header class="panel-heading" align="center">CHOOSE PATIENT </header>
              <table class="table">
                <center>
                <div class="form-group">
                    <div class="col-lg-12">
                      <select name="patient" size="20" style="height: 100%;">
                        <?php
                          foreach($patients as $patient){
                            echo "<option value='".$patient['patient_id']."'>";
                              echo $patient['patient_id'].": ".$patient['first_name']." ".$patient['middle_name']." ".$patient['last_name'];
                            echo "</option>";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <br>
              </center>
              </table>
          </section>
      </div>
      <div class="col-sm-8">
        <section class="panel">
            <header class="panel-heading" style="background-color: #000;"></header>
            <header class="panel-heading" align="center">SELECT RADIOLOGY EXAM</header>
            <table class="table">
              <center>
              <div class="form-group">
                  <div class="col-lg-12">
                    <div class="form-group">
                        <div class="col-lg-12">
                          <?php
                            foreach($radiology_exams as $radiology_exam){
                              echo "<div class='col-lg-3'>";
                              echo "<label class='checkbox-inline'>";
                                echo "<input type='checkbox' name='exams[]' value='".$radiology_exam['exam_id']."'>".$radiology_exam['exam_name'];
                              echo "</label>";
                              echo "</div>";
                            }
                          ?>
                          <!--<div class="col-lg-3">
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox1" value=""> 1
                            </label>
                          </div>

                          <div class="col-lg-3">
                          <label class="checkbox-inline">
                              <input type="checkbox" id="inlineCheckbox2" value=""> 2
                          </label>
                          </div>

                          <div class="col-lg-3">
                          <label class="checkbox-inline">
                              <input type="checkbox" id="inlineCheckbox3" value=""> 3
                          </label>
                          </div>

                          <div class="col-lg-3">
                          <label class="checkbox-inline">
                              <input type="checkbox" id="inlineCheckbox4" value=""> 4
                          </label>
                          </div>
                        </div>-->
                    </div>
                  </div>
              </div>
              <br>
            </center>
            </table>
        </section>
      </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    Request Note (Optional)
                    <span class="tools pull-right">
                      <a href="javascript:;" class="fa fa-chevron-down"></a>
                    </span>
                </header>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="control-label col-md-3">Note</label>
                    <div class="col-md-9">
                        <textarea class="wysihtml5 form-control" rows="10"></textarea>
                    </div>
                  </div>
                </div>
            </section>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-12">
          <center><input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info"></center>
        </div>
    </div>
      <?=form_close()?>
  </section>
</section>
