<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-3">
        <section class="panel">
        <table class="table borderless">
          <tr>
            <td colspan="2" align="center"><h2><?=$nurse->first_name?></h2><h4><?=$nurse->last_name?></h4></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><?=$nurse->user_id?></td>
          </tr>
        </table>
      </div>
      <div class="col-sm-9">
        <section class="panel">
            <header class="panel-heading">
                <center><h4>EDIT NURSE<h4></center>
            </header>
            <div class="panel-body">
              <?php
                $attributes = array('class'=>'form-horizontal', 'role'=>'form');
                echo form_open('admin/update_nurse/'.$nurse->user_id, $attributes);
              ?>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">Position: </label>
                      <div class="col-lg-8">
                        <select class="form-control" name="nursetype">
                          <?php
                            for($i = 3; $i <= 4; $i++){
                              $selected = "";
                              if($i == $nurse->type_id){
                                $selected = "selected='selected'";
                              }else{
                                $selected = "";
                              }

                              $position = "";
                              if($i == 3){
                                $position = "Nurse Manager";
                              }else{
                                $position = "Bedside Nurse";
                              }
                              echo "<option value='".$i."'".$selected.">".$position."</option>";
                            }
                          ?>
                        </select>
                      </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">Last Name: </label>
                      <div class="col-lg-8">
                          <input type="text" name="lastname" class="form-control" placeholder="Last Name" value="<?=$nurse->last_name?>">
                      </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">Birthday: </label>
                      <div class="col-lg-8">
                          <input type="date" name="birthday" class="form-control" placeholder="Birthday" value="<?=$nurse->birthdate?>">
                      </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">First Name: </label>
                      <div class="col-lg-8">
                          <input type="text" name="firstname" class="form-control" placeholder="First Name" value="<?=$nurse->first_name?>">
                      </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">Mobile: </label>
                      <div class="col-lg-8">
                          <input type="text" name="contact_number" class="form-control" placeholder="Mobile Number" value="<?=$nurse->contact_number?>">
                      </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">Middle Name: </label>
                      <div class="col-lg-8">
                          <input type="text" name="middlename" class="form-control" placeholder="Middle Name" value="<?=$nurse->middle_name?>">
                      </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                      <label  class="col-lg-4 col-sm-4 control-label">Email: </label>
                      <div class="col-lg-8">
                          <input type="text" name="email" class="form-control" placeholder="Middle Name" value="<?=$nurse->email?>">
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
