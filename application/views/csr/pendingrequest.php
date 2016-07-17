<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-3">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <table class="table">
                <tr>
                  <td colspan="2" align="center"><h5><a class="btn btn-info" href="javascript: void(0);">View Accepted Requests</a></h5></td>
                </tr>
                <table class="table">
                  <tr>
                    <td colspan="2" align="center"><h5><a class="btn btn-info" style="background-color:red;" href="javascript: void(0);">View Rejected Requests</a></h5></td>
                  </tr>
              </table>
          </section>
      </div>
      <div class="col-sm-9">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <header class="panel-heading">
                  <center><h4>PENDING REQUESTS<h4></center>
              </header>
              <table class="table table-hovered" style="text-align: center;">
                <tr id="tblheader">
                    <td>#</td>
                    <td>Requester</td>
                    <td>Item Name</td>
                    <td>Quantity</td>
                    <td>Status</td>
                    <td>Action</td>
                </tr>
                <?php
                foreach($nursetocsr as $request)
                {
                  echo "<tr>";
                    echo "<td>".$request['csr_req_id']."</td>";
                    echo "<td>".$request['first_name']." ".$request['middle_name']." ".$request['last_name']."</td>";
                    echo "<td>".$request['item_name']."</td>";
                    echo "<td>".$request['item_quant']."</td>";
                    if($request['csr_status']==0){
                    echo "<td>For Approval</td>";
                  } elseif($request['csr_status']==2){
                    echo "<td>On Hold</td>";
                  }
                    echo "<td>";
                      echo " <a href='".base_url()."csr/csr_accept_request/".$request['csr_req_id']."' role='button' class='btn btn-default btn-xs'>Accept Request</a>";
                      echo " <a href='".base_url()."csr/csr_reject_request/".$request['csr_req_id']."' role='button' class='btn btn-default btn-xs'>Reject Request</a>";
                      echo " <a href='".base_url()."csr/csr_hold_request/".$request['csr_req_id']."' role='button' class='btn btn-default btn-xs'>Hold Request</a>";
                    echo "</td>";
                  echo "</tr>";
                }
                ?>
              </table>
          </section>
      </div>
    </div>

    <div class="modal fade modal-dialog-center" id="requestproduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content-wrap">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" align="center">Request a Product</h4>
                    </div>
                    <div class="modal-body">
                      <?php
                        $attributes = array('class'=>'form-horizontal', 'role'=>'form');
                        echo form_open('admin/insert_room', $attributes);
                      ?>

                      <div class="form-group">
                          <label  class="col-lg-3 col-sm-3 control-label">Item: </label>
                          <div class="col-lg-9">
                              <select class="form-control" name="itemreq">
                                <option value="1">Cotton</option>
                              </select>
                          </div>
                      </div>

                      <div class="form-group">
                          <label  class="col-lg-3 col-sm-3 control-label">Quantity: </label>
                          <div class="col-lg-9">
                              <select class="form-control" name="itemquant">
                                <?php
                                  for($i = 1; $i<=300; $i++){
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
