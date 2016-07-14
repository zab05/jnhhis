<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-3">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <table class="table">
                <tr>
                  <td colspan="2" align="center"><h5><a class="btn btn-info" data-toggle="modal" href="#addnewetpye">+ADD NEW EXAM TYPE</a></h5></td>
                </tr>
              </table>
          </section>
      </div>
      <div class="col-sm-9">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <header class="panel-heading">
                  <center><h4>LABORATORY EXAMINATION TYPE<h4></center>
              </header>
              <table class="table table-hovered" style="text-align: center;">
                <tr id="tblheader">
                    <td>#</td>
                    <td>NAME</td>
                    <td>CATEGORY</td>
                    <td>DESCRIPTION</td>
                    <td>ACTION</td>
                </tr>
                <?php
                  foreach($examtype as $etype){
                    echo "<tr>";
                      echo "<td>".$etype['lab_exam_type_id']."</td>";
                      echo "<td>".$etype['lab_exam_type_name']."</td>";
                      echo "<td>".$etype['exam_cat_name'];
                      echo "<td>".$etype['lab_exam_type_description']."</td>";
                      echo "<td>";
                        echo "<a href='".base_url()."Admin/EditExamType/".$etype['lab_exam_type_id']."' role='button' class='btn btn-default btn-xs'>Update Lab Exam Type</a>";
                      echo "</td>";
                    echo "</tr>";
                  }
                ?>
              </table>
          </section>
      </div>
    </div>

    <div class="modal fade modal-dialog-center" id="addnewetpye" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content-wrap">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" align="center">Add Exam Type</h4>
                    </div>
                    <div class="modal-body">
                      <?php
                        $attributes = array('class'=>'form-horizontal', 'role'=>'form');
                        echo form_open('admin/insert_examtype', $attributes);
                      ?>

                      <div class="form-group">
                          <label  class="col-lg-3 col-sm-3 control-label">Name: </label>
                          <div class="col-lg-9">
                                <input type="text" name="typename" class="form-control" placeholder="Name">
                          </div>
                      </div>
                      <div class="form-group">
                          <label  class="col-lg-3 col-sm-3 control-label">Category: </label>
                          <div class="col-lg-9">
                            <?php
                              if($examcateg != NULL){
                            ?>
                            <select class="form-control" name="examcateg">
                              <?php
                              foreach($examcateg as $categ){
                              echo "<option value=".$categ['exam_cat_id'].">".$categ['exam_cat_name']."</option>";
                              }
                              ?>
                            </select>
                            <?php
                          } else {
                            echo "No Examination Category";
                          }
                            ?>
                          </div>
                      </div>

                      <div class="form-group">
                          <label  class="col-lg-3 col-sm-3 control-label">Description: </label>
                          <div class="col-lg-9">
                              <input type="text" name="typedesc" class="form-control" placeholder="Description">
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <input type="submit" value="Submit" class="btn btn-warning">
                    </div>
                    <?=form_close()?>
                </div>
            </div>
        </div>
    </div>
  </section>
</section>
