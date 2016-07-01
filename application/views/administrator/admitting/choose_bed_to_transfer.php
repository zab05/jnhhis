<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-12">
        <header class="panel-heading" style="background-color: #000;"></header>
        <header class="panel-heading">
            <center><h4>CHOOSE BED<h4></center>
        </header>
        <table class="table table-hovered" style="text-align: center;">
          <tr id="tblheader">
            <td>Bed #</td>
            <td>Patient ID</td>
            <td>Patient Checked-In</td>
            <td>Status</td>
            <td>Action</td>
          </tr>
          <?php
            foreach($beds as $bed){
              echo "<tr>";
                echo "<td>".$bed['bed_id']."</td>";
                echo "<td>".$bed['patient_id']."</td>";
                  echo "<td>EMPTY</td>";
                  echo "<td>AVAILABLE</td>";
                  echo "<td>";
                    echo "<a href='".base_url()."Admin/TransferPatient/".$patientid."/".$bed['bed_id']."/".$roomid."' role='button' class='btn btn-default btn-xs'>TRANSFER</a>'";
                  echo "</td>";
              echo "</tr>";
            }
          ?>
        </table>
      </div>
    </div>
  </section>
</section>
