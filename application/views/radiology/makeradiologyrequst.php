<section id="main-content">
  <section class="wrapper">
    <?php
      $attributes = array('class'=>'form-horizontal', 'role'=>'form');
      //echo form_open(base_url().'Admin/InsertAdmitFromDR/'.$bed_id.'/'.$roomid, $attributes);
    ?>
    <div class="row">
      <div class="col-sm-3">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <header class="panel-heading" align="center">PATIENT LIST</header>
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
    </div>
      <?=form_close()?>
  </section>
</section>
