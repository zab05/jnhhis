<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-3">
        <section class="panel">
        <table class="table borderless">
          <tr>
            <td colspan="2" align="center"><h2><?=$patient->first_name?></h2><h4><?=$patient->last_name?></h4></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><?=$patient->patient_id?></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><?=$patient->age." years old"?></td>
          </tr>
        </table>
      </div>
      <div class="col-sm-9">
        <section class="panel">
            <header class="panel-heading">
                <center><h4>EDIT PATIENT<h4></center>
            </header>
            <div class="panel-body">
              <?php
                $attributes = array('class'=>'form-horizontal', 'role'=>'form');
                echo form_open('admin/edit_patient/'.$patient->patient_id, $attributes);
              ?>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">Last Name: </label>
                      <div class="col-lg-8">
                          <input type="text" name="lastname" class="form-control" placeholder="Last Name" value="<?=$patient->last_name?>">
                      </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">Birthday: </label>
                      <div class="col-lg-8">
                          <input type="date" name="birthday" class="form-control" placeholder="Birthday" value="<?=$patient->birthdate?>">
                      </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">First Name: </label>
                      <div class="col-lg-8">
                          <input type="text" name="firstname" class="form-control" placeholder="First Name" value="<?=$patient->first_name?>">
                      </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">Birthplace: </label>
                      <div class="col-lg-8">
                          <input type="text" name="birthplace" class="form-control" placeholder="Birthplace" value="<?=$patient->birthplace?>">
                      </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">Middle Name: </label>
                      <div class="col-lg-8">
                          <input type="text" name="middlename" class="form-control" placeholder="Middle Name" value="<?=$patient->middle_name?>">
                      </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">Occupation: </label>
                      <div class="col-lg-8">
                          <input type="text" name="occupation" class="form-control" placeholder="Occupation" value="<?=$patient->occupation?>">
                      </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">Age: </label>
                      <div class="col-lg-8">
                          <input type="number" name="age" class="form-control" placeholder="Age" value="<?=$patient->age?>">
                      </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">Religion: </label>
                      <div class="col-lg-8">
                          <input type="text" name="religion" class="form-control" placeholder="Religion" value="<?=$patient->religion?>">
                      </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">Nationality: </label>
                      <div class="col-lg-8">
                          <input type="text" name="nationality" class="form-control" placeholder="Nationality" value="<?=$patient->nationality?>">
                      </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">Address: </label>
                      <div class="col-lg-8">
                          <input type="text" name="address" class="form-control" placeholder="Address" value="<?=$patient->present_address?>">
                      </div>
                  </div>
                </div>
              </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label  class="col-lg-4 col-sm-4 control-label">Mobile: </label>
                        <div class="col-lg-8">
                            <input type="text" name="mobile_number" class="form-control" placeholder="Mobile Number" value="<?=$patient->mobile_number?>">
                        </div>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                        <label  class="col-lg-4 col-sm-4 control-label">Telephone: </label>
                        <div class="col-lg-8">
                            <input type="text" name="telephone_number" class="form-control" placeholder="Telephone Number" value="<?=$patient->telephone_number?>">
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
