<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-3">
        <section class="panel">
        <table class="table borderless">
          <tr>
            <td colspan="2" align="center"><h2><?=$doctor->first_name?></h2><h4><?=$doctor->last_name?></h4></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><?=$doctor->user_id?></td>
          </tr>
        </table>
      </div>
      <div class="col-sm-9">
        <section class="panel">
            <header class="panel-heading">
                <center><h4>EDIT DOCTOR<h4></center>
            </header>
            <div class="panel-body">
              <?php
                $attributes = array('class'=>'form-horizontal', 'role'=>'form');
                echo form_open('admin/update_doctor/'.$doctor->user_id, $attributes);
              ?>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">Last Name: </label>
                      <div class="col-lg-8">
                          <input type="text" name="lastname" class="form-control" placeholder="Last Name" value="<?=$doctor->last_name?>">
                      </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">Birthday: </label>
                      <div class="col-lg-8">
                          <input type="date" name="birthday" class="form-control" placeholder="Birthday" value="<?=$doctor->birthdate?>">
                      </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">First Name: </label>
                      <div class="col-lg-8">
                          <input type="text" name="firstname" class="form-control" placeholder="First Name" value="<?=$doctor->first_name?>">
                      </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">Mobile: </label>
                      <div class="col-lg-8">
                          <input type="text" name="contact_number" class="form-control" placeholder="Mobile Number" value="<?=$doctor->contact_number?>">
                      </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">Middle Name: </label>
                      <div class="col-lg-8">
                          <input type="text" name="middlename" class="form-control" placeholder="Middle Name" value="<?=$doctor->middle_name?>">
                      </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">Email: </label>
                      <div class="col-lg-8">
                          <input type="text" name="email" class="form-control" placeholder="Middle Name" value="<?=$doctor->email?>">
                      </div>
                  </div>
                </div>
              </div>


                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label  class="col-lg-4 col-sm-4 control-label">Specialty: </label>
                        <div class="col-lg-8">
                          <select class="form-control" name="specialty">
                            <?php
                              foreach($specialties as $specialty){
                                $selected = "";
                                if($specialty['spec_id'] == $doctor->spec_id){
                                  $selected = "selected='selected'";
                                }else{
                                  $selected = "";
                                }

                                echo "<option value='".$specialty['spec_id']."' ".$selected.">";
                                echo $specialty['spec_name'];
                                echo "</option>";
                              }
                            ?>
                          </select>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group">
                    <div class="col-lg-12">
                      <center><input type="submit" name="submit" id="submit" value="Save" class="btn btn-info"></center>
                    </div>
                  </div>
                  </div>
                </div>
              <?=form_close()?>
            </div>
        </section>
      </div>
    </div>
  </section>
</section>
