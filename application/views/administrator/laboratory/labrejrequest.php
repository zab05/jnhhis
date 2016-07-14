<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-12">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <header class="panel-heading">
                  <center><h4><a href="<?=base_url()?>Admin/AppofReq" role='button' class='btn btn-default btn-xs'><</a> REJECTED LABORATORY REQUESTS<h4></center>
              </header>
              <table class="table table-hovered" style="text-align: center;">
                <tr id="tblheader">
                    <td>Request #</td>
                    <td>Date Added</td>
                    <td>Check-In #</td>
                    <td>Patient</td>
                    <td>Action</td>
                </tr>
                <?php
                foreach($rejectedreq as $req)
                {
                  echo "<tr>";
                  echo "<td>".$req['lab_id']."</td>";
                  echo "<td>".$req['lab_date_req']."</td>";
                  echo "<td>".$req['lab_patient_checkin']."</td>";
                  echo "<td>".$req['first_name']." ".$req['middle_name']." ".$req['last_name']."</td>";
                  echo "<td>";
                    echo "<a href='".base_url()."Admin/ShowLabReq/".$req['lab_id']."' role='button' class='btn btn-default btn-xs'>Show</a>";
                  echo"</td>";
                  echo "</tr>";
                }

                ?>
              </table>
          </section>
      </div>
    </div>
  </section>
</section>
