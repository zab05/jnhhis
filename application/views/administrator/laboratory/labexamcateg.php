<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-3">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <table class="table">
                <tr>
                  <td colspan="2" align="center"><h5><a class="btn btn-info" data-toggle="modal" href="#addnewcateg">+ADD NEW CATEGORY</a></h5></td>
                </tr>
              </table>
          </section>
      </div>
      <div class="col-sm-9">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <header class="panel-heading">
                  <center><h4>EXAM CATEGORY<h4></center>
              </header>
              <table class="table table-hovered" style="text-align: center;">
                <tr id="tblheader">
                    <td>#</td>
                    <td>NAME</td>
                    <td>DESCRIPTION</td>
                    <td>ACTION</td>
                </tr>
                <?php
                  foreach($examcateg as $categ){
                    echo "<tr>";
                      echo "<td>".$categ['exam_cat_id']."</td>";
                      echo "<td>".$categ['exam_cat_name']."</td>";
                      echo "<td>".$categ['exam_cat_desc']."</td>";
                      echo "<td>";
                        echo "<a href='".base_url()."Admin/EditExamCateg/".$categ['exam_cat_id']."' role='button' class='btn btn-default btn-xs'>Update Category</a>";
                      echo "</td>";
                    echo "</tr>";
                  }
                ?>
              </table>
          </section>
      </div>
    </div>

    <div class="modal fade modal-dialog-center" id="addnewcateg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content-wrap">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" align="center">Edit Category</h4>
                    </div>
                    <div class="modal-body">
                      <?php
                        $attributes = array('class'=>'form-horizontal', 'role'=>'form');
                        echo form_open('admin/insert_category', $attributes);
                      ?>

                      <div class="form-group">
                          <label  class="col-lg-3 col-sm-3 control-label">Name: </label>
                          <div class="col-lg-9">
                                <input type="text" name="categname" class="form-control" placeholder="Name">
                          </div>
                      </div>

                      <div class="form-group">
                          <label  class="col-lg-3 col-sm-3 control-label">Description: </label>
                          <div class="col-lg-9">
                              <input type="text" name="categdesc" class="form-control" placeholder="Description">
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
