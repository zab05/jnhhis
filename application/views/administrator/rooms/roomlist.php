<section id="main-content">
  <section class="wrapper">
    <div class="row">
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
      <div class="col-sm-9">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <header class="panel-heading">
                  <center><h4>ROOM LIST<h4></center>
              </header>
              <table class="table table-hovered" style="text-align: center;">
                <tr id="tblheader">
                    <td>ID</td>
                    <td>ROOM TYPE</td>
                    <td>ROOM LOCATION</td>
                    <td>OCCUPANCY STATUS</td>
                    <td>MAINTENANCE STATUS</td>
                    <td>ACTION</td>
                </tr>
                <?php
                  foreach($rooms as $room){
                    echo "<tr>";
                      echo "<td>".$room['room_type_id']."</td>";
                      echo "<td>".$room['room_name']."</td>";
                      echo "<td>".$room['room_location']."</td>";
                      echo "<td>".$room['occupancy_status_name']."</td>";
                      echo "<td>".$room['maintenance_status_name']."</td>";
                      echo "<td>";
                        echo "<a href='".base_url()."Admin/ViewRoom/".$room['room_id']."' role='button' class='btn btn-default btn-xs'>View Room</a>";
                        echo "<a href='".base_url()."Admin/UpdateRoom/".$room['room_id']."' role='button' class='btn btn-default btn-xs'>Update Room</a>";
                      echo "</td>";
                    echo "</tr>";
                  }
                ?>
              </table>
          </section>
      </div>
    </div>

    <div class="modal fade modal-dialog-center" id="addnewroom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content-wrap">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" align="center">Add Room</h4>
                    </div>
                    <div class="modal-body">
                      <?php
                        $attributes = array('class'=>'form-horizontal', 'role'=>'form');
                        echo form_open('admin/insert_room', $attributes);
                      ?>

                      <div class="form-group">
                          <label  class="col-lg-3 col-sm-3 control-label">Room Type: </label>
                          <div class="col-lg-9">
                              <select class="form-control" name="roomtype">
                                <?php
                                  foreach($roomtypes as $type){
                                    echo "<option value=".$type['room_type_id'].">".$type['room_name']."</option>";
                                  }
                                ?>
                              </select>
                          </div>
                      </div>

                      <div class="form-group">
                          <label  class="col-lg-3 col-sm-3 control-label">Room Location: </label>
                          <div class="col-lg-9">
                              <input type="text" name="roomloc" class="form-control" placeholder="Room Location">
                          </div>
                      </div>

                      <div class="form-group">
                          <label  class="col-lg-3 col-sm-3 control-label">Number of Beds: </label>
                          <div class="col-lg-9">
                              <select class="form-control" name="bednum">
                                <?php
                                  for($i = 1; $i<=25; $i++){
                                    echo "<option value=".$i.">".$i."</option>";
                                  }
                                ?>
                              </select>
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
