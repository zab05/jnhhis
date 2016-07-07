<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-3">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <table class="table">
                <tr>
                  <td colspan="2" align="center"><h5><a class="btn btn-info" href="<?=base_url()?>Admin/LabAccRequest">View Accepted Requests</a></h5></td>
                </tr>
                <table class="table">
                  <tr>
                    <td colspan="2" align="center"><h5><a class="btn btn-info" style="background-color:red;" href="<?=base_url()?>Admin/LabRejRequest">View Rejected Requests</a></h5></td>
                  </tr>
              </table>
          </section>
      </div>
      <div class="col-sm-9">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <header class="panel-heading">
                  <center><h4>PENDING LABORATORY REQUEST<h4></center>
              </header>
              <table class="table table-hovered" style="text-align: center;">
                <tr id="tblheader">
                    <td>Request #</td>
                    <td>Date Added</td>
                    <td>Check-In #</td>
                    <td>Patient</td>
                    <td>Status</td>
                    <td>Action</td>
                </tr>
              <?php
              foreach($laboratoryreq as $labreq){
              if($labreq['lab_status']==1){
                echo "<tr>";
                echo"<td>".$labreq['lab_id']."</td>";
                echo"<td>".$labreq['lab_date_req']."</td>";
                echo"<td>".$labreq['lab_patient_checkin']."</td>";
                echo"<td>".$labreq['first_name']." ".$labreq['last_name']."</td>";
                echo "<td>For Approval</td>";
                echo "<td>";
                  echo "<a href='".base_url()."Admin/ShowLabReq/".$labreq['lab_id']."' role='button' class='btn btn-default btn-xs'>Show</a>";
                  echo " <a href='".base_url()."Admin/ApproveLabReq/".$labreq['lab_id']."' role='button' class='btn btn-default btn-xs'>Approve</a>";
                  echo " <a href='".base_url()."Admin/CancelLabReq/".$labreq['lab_id']."' role='button' class='btn btn-default btn-xs'>Reject</a>";
                echo "</td>";
                echo "</tr>";
              }
            }

              ?>
              </table>
          </section>
      </div>
    </div>
  </section>
</section>
