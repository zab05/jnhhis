<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-12">
        <header class="panel-heading" style="background-color: #000;"></header>
        <header class="panel-heading">
            <center><h4>ADMITTED PATIENTS<h4></center>
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
                if($bed['patient_id'] == ""){
                  echo "<td>EMPTY</td>";
                  echo "<td>AVAILABLE</td>";
                  echo "<td>";
                    echo "<a href='".base_url()."Admin/ChoosePatientToDR/".$bed['bed_id']."/".$bed['bed_roomid']."' role='button' class='btn btn-default btn-xs'>ADD</a>'";
                  echo "</td>";
                }else{
                  echo "<td>".$bed['first_name']." ".$bed['middle_name']." ".$bed['last_name']."</td>";
                  echo "<td>OCCUPIED</td>";
                  echo "<td>";
                    echo "<a href='".base_url()."Admin/DischargePatient/".$bed['patient_id']."/".$bed['bed_id']."' role='button' class='btn btn-default btn-xs'>DISCHARGE</a>'";
                    echo "<a href='".base_url()."Admin/PatientList/".$bed['patient_id']."' role='button' class='btn btn-default btn-xs'>PATIENT INFO</a>'";
                    echo "<a href='#' role='button' class='btn btn-default btn-xs'>GO TO PHARMACY</a>'";
                    echo "<a href='".base_url()."Admin/TransferRoom/".$bed['patient_id']."/' role='button' class='btn btn-default btn-xs'>TRANSFER ROOM</a>'";
                  echo "</td>";
                }
              echo "</tr>";
            }
          ?>
        </table>
      </div>
    </div>
  </section>
</section>
