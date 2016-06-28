<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-3">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <table class="table">
                  <tr>
                    <td colspan="2" align="center"><h5><a href="<?=base_url()?>Admin/AddDoctor" role="button" class="btn btn-info">+ADD NEW DOCTOR</a></h5></td>
                  </tr>
                  <tr>
                  </tr>
                  <tr>
                    <td>Number of Doctors: </td>
                    <td><?=$total_doctors_count?></td>
                  </tr>
                  <tr>
                    <td>Number of Active Doctors: </td>
                    <td><?=$total_active_doctors_count?></td>
                  </tr>
                  <tr>
                    <td>Number of Inactive Doctors: </td>
                    <td><?=$total_inactive_doctors_count?></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center"><h5><a href="<?=base_url()?>Admin/DoctorList" role="button" class="btn btn-info">SHOW ACTIVE DOCTORS</a></h5></td>
                  </tr>
              </table>
          </section>
      </div>
      <div class="col-sm-9">
        <section class="panel">
          <header class="panel-heading">
              <center><h4>INACTIVE DOCTOR LIST<h4></center>
          </header>
          <table class="table table-hovered" style="text-align: center;">
            <tr id="tblheader">
                <td>#</td>
                <td>Name</td>
                <td>Contact No.</td>
                <td>Birthdate</td>
                <td>Specialty</td>
                <td>Action</td>
            </tr>
            <?php
              foreach($doctors as $doctor){
                echo "<tr>";
                  echo "<td>DCTR-".$doctor['user_id']."</td>";
                  echo "<td>";
                    if($doctor['gender'] == 'M'){
                      echo "Mr. ";
                    }else{
                      echo "Ms. ";
                    }
                    echo $doctor['first_name']." ".$doctor['middle_name']." ".$doctor['last_name'];
                  echo "</td>";
                  echo "<td>".$doctor['contact_number']."</td>";
                  echo "<td>".date('F d, Y', strtotime($doctor['birthdate']))."</td>";
                  echo "<td>".$doctor['spec_name']."</td>";
                  echo "<td>";
                    echo "<div class='btn-group' role='group' aria-label='...'>";
                      echo "<a href='".base_url()."Admin/ActivateDoctor/".$doctor['user_id']."' role='button' class='btn btn-default btn-sm'>Activate</a>";
                    echo "</div>";
                  echo "</td>";
                echo "</tr>";
              }
            ?>
          </table>
        </section>
      </div>
    </div>
  </section>
</section>
