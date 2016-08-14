<title><?php echo $title; ?></title>
  <!--sidebar end-->
  <!--main content start-->
  <section id="main-content">
      <section class="wrapper">

        <?php
            // echo "<pre>";
            // print_r($permittedViews);
            // echo "</pre>";
         ?>

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
                                   <?php foreach ($task_names as $task_name) { ?>


                                   <th><?php echo $task_name['task_name']; ?></th>
                                  <? } ?>
                               </tr>
                               </thead>
                               <tbody>

                                 <?php foreach ($user_types as $user_type) {
                                ?>
                               <tr>

                                    <td><i class='fa fa-trash-o'> | <a href="#"
                                      data-rolename="<?php echo $user_type['name'];?>"
                                      data-userTypeId="<?php echo $user_type['type_id']?>"
                                      onclick="editrole(this)"> <i class='fa fa-edit pull-right' data-toggle="modal"></i></a>

                                      </td>

                                   <td data-title="Code"><?= $user_type['type_id']; ?></td>
                                   <td data-title="Company"><?= $user_type['name']; ?></td>

                                   <?php
                                       foreach ($task_names as $task_name) { ?>
                                          <td>
                                              <?php

                                                  foreach ($permissions as $permission) {
                                                      echo "<table><tr>";
                                                      if($permission['task_id'] == $task_name['task_id']){ ?>



                                                          <td><?php  echo $permission['permission_name'].":<br>"; ?></td>

                                                          <?php
                                                          //not final huhu
                                                              foreach ($permittedViews as $permittedView) {
                                                                  if($permittedView['permission_id'] == $permission['permission_id'] && $permittedView['user_type_id'] == $this->session->userdata('type_id')){

                                                                    if($permittedView['access'] == 1){
                                                                        //echo "<td>Yes</td>";
                                                                        $var = "Yes";

                                                                    }else{
                                                                        //  echo "<td>No</td>";
                                                                            $var = "No";
                                                                    }

                                                                  }
                                                              }

                                                           ?>


                                                          <td><?php echo $var; ?></td>

                                                <?      }
                                                      echo "</tr></table>";

                                                  }

                                               ?>
                                          </td>
                                      <? }
                                    ?>
                               </tr>
                                <?php }
                               ?>

                             </tbody>
                  </table>
              </section>
          </div>
      </section>
  </div>


  <!-- Modal -->
<div class="modal fade " id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
       <div class="modal-content">
                <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Edit</h4>
             </div>

             <?php echo form_open('Admin/updatePermission'); ?>
   <div class="modal-body">
        Name:
        <input type="text" id="updatedrolename" name="name" class="form-control" value="<?php echo $user_type['name'];?>"><br>
        <input type="hidden" id="updatedoldname" name="oldName">
        <input type="hidden" id="hiddenusertypeid" name="hiddenUserTypeId">
                <strong>Permission</strong>
              <table>

                    <?php foreach ($task_names as $task_name) { ?>

                        <tr>

                          <td><?php echo $task_name['task_name'].":"; ?></td>
                           <td>
                              <?php foreach ($permissions as $permission) {
                                      if($task_name['task_id'] == $permission['task_id']){
                                ?>

                                    <?php echo form_checkbox('permissions[]', $permission['permission_id'])." ".$permission['permission_name'];

                                    ?>

                                <?php } } ?>



                          </td>

                        </tr>


                    <?php
                      }

                    ?>




              </table>

      </div>
    <div class="modal-footer">
    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
       <button class="btn btn-success" type="submit">Save changes</button>
         </div>
     </div>

     </form>
 </div>
</div>
                             <!-- modal -->








      </section>
  </section>

<script type="text/javascript">
function editrole(d){
    //console.log(d.getAttribute("data-userid"))
    document.getElementById("updatedrolename").value = d.getAttribute("data-rolename")
    document.getElementById("updatedoldname").value = d.getAttribute("data-rolename")
    document.getElementById("hiddenusertypeid").value = d.getAttribute("data-userTypeId")
    // document.getElementById("updatelastname").value = d.getAttribute("data-lastname")
    // document.getElementById("updatemiddlename").value = d.getAttribute("data-middlename")
    // document.getElementById("updateusername").value = d.getAttribute("data-username")
    // document.getElementById("updateemail").value = d.getAttribute("data-email")
    // document.getElementById("updatemobilenumber").value = d.getAttribute("data-mobilenumber")
    // document.getElementById("updatebirthdate").value = d.getAttribute("data-birthdate")
    $("#edit").modal()

}
</script>
