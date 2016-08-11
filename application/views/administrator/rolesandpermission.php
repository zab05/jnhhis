<title><?php echo $title; ?></title>
  <!--sidebar end-->
  <!--main content start-->
  <section id="main-content">
      <section class="wrapper">

        <div class="col-lg-12">
               <section class="panel">
                   <header class="panel-heading">
                      Roles and Permission

                       <button type="button" name="button" class="btn btn-primary pull-right" data-toggle="modal" href="#myModal3">
                         Add new role</button>
                   </header>

                   <!-- Modal -->
                              <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title">New Role</h4>
                                          </div>
                                          <div class="modal-body">
                                          <?php echo form_open('Admin/addrole'); ?>
                                            <div class="form-group">

                                              <input type="text" name="rolename" class="form-control"  placeholder="role name"><br>
                                              <textarea name="desc" class="form-control" rows="8" cols="40" placeholder="description"></textarea>
                                            </div>


                                          </div>
                                          <div class="modal-footer">
                                              <button class="btn btn-danger" type="submit"> Add</button>
                                          </div>
                                          <?php echo form_close(); ?>
                                      </div>
                                  </div>
                              </div>
                              <!-- modal -->



                   <div class="panel-body">
                       <section id="no-more-tables">
                           <table class="table table-bordered table-striped table-condensed cf">
                               <thead class="cf">
                               <tr>
                                  <th>Action</th>
                                   <th>id</th>
                                   <th>Role name</th>
                                   <th>maintenance</th>
                                   <th>Patient list</th>
                                   <th>Admit patient</th>
                                   <th>Pharmacy</th>
                                   <th>CSR</th>
                                   <th>purchasing</th>
                                   <th>Laboratory</th>
                                   <th>Radiology</th>
                                   <th>User Management</th>
                                   <th>Rooms</th>
                                   <th>Billing</th>
                                   <th>Cashier</th>
                               </tr>
                               </thead>
                               <tbody>

                                 <?php foreach ($user_types as $user_type) {
                                ?>
                               <tr>

                                    <td><i class='fa fa-trash-o'> | <i class='fa fa-edit pull-right'></td>

                                   <td data-title="Code"><?= $user_type['type_id']; ?></td>
                                   <td data-title="Company"><?= $user_type['name']; ?></td>

                                   <td><input type="checkbox" name="businessType[]" value="1"></td>
                                    <td><input type="checkbox" name="businessType[]" value="2"></td>
                                  <td>  <input type="checkbox" name="businessType[]" value="3"></td>
                                    <td><input type="checkbox" name="businessType[]" value="1"></td>
                                    <td><input type="checkbox" name="businessType[]" value="2"></td>
                                    <td><input type="checkbox" name="businessType[]" value="3"></td>
                                    <td><input type="checkbox" name="businessType[]" value="1"></td>
                                    <td><input type="checkbox" name="businessType[]" value="2"></td>
                                    <td><input type="checkbox" name="businessType[]" value="3"></td>
                                    <td><input type="checkbox" name="businessType[]" value="1"></td>
                                    <td><input type="checkbox" name="businessType[]" value="1"></td>
                                    <td><input type="checkbox" name="businessType[]" value="1"></td>
                               </tr>
                                <?php }
                               ?>

                             </tbody>
                  </table>
              </section>
          </div>
      </section>
  </div>




      </section>
  </section>
