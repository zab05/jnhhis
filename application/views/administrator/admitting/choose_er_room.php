<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-12">
        <header class="panel-heading" style="background-color: #000;"></header>
        <header class="panel-heading">
            <center><h4>EMERGENCY ROOM<h4></center>
        </header>
        <table class="table table-hovered" style="text-align: center;">
          <tr id="tblheader">
            <td>Bed #</td>
            <td>Patient Checked-In</td>
            <td>Status</td>
            <td>Action</td>
          </tr>
          <?php
            foreach($emergency_rooms as $emergency_room){
              echo "<tr>";
                echo "<td>".$emergency_room['bed_id']."</td>";
                if($emergency_room['patient_id'] == ""){
                  echo "<td>EMPTY</td>";
                  echo "<td>AVAILABLE</td>";
                  echo "<td>";
                    echo "<a href='".base_url()."Admin/ChoosePatient/".$emergency_room['bed_id']."' role='button' class='btn btn-default btn-xs'>ADD</a>'";
                  echo "</td>";
                }else{
                  echo "<td>".$emergency_room['first_name']." ".$emergency_room['middle_name']." ".$emergency_room['last_name']."</td>";
                  echo "<td>OCCUPIED</td>";
                  echo "<td>";
                    echo "<a href='".base_url()."Admin/DischargePatient/".$emergency_room['patient_id']."/".$emergency_room['bed_id']."' role='button' class='btn btn-default btn-xs'>DISCHARGE</a>'";
                    echo "<a href='".base_url()."Admin/PatientList/".$emergency_room['patient_id']."' role='button' class='btn btn-default btn-xs'>PATIENT INFO</a>'";
                    echo "<a href='#' role='button' class='btn btn-default btn-xs'>GO TO PHARMACY</a>'";
                    echo "<a href='#' role='button' class='btn btn-default btn-xs'>TRANSFER ROOM</a>'";
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
