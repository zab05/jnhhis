<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-3">
        <section class="panel">
            <header class="panel-heading" style="background-color: #000;"></header>
            <table class="table">
                <tr>
                  <td colspan="2" align="center"><h5><a href="<?=base_url()?>Admin/AddPharmacist" role="button" class="btn btn-info">+ADD NEW PHARMACIST</a></h5></td>
                </tr>
                <tr>
                </tr>
                <tr>
                  <td>Number of Pharmacist: </td>
                  <td><?=$total_pharmacist?></td>
                </tr>
                <tr>
                  <td>Number of Active Pharmacist: </td>
                  <td><?=$total_active_pharmacist?></td>
                </tr>
                <tr>
                  <td>Number of Inactive Pharmacist: </td>
                  <td><?=$total_inactive_pharmacist?></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><h5><a href="<?=base_url()?>Admin/PharmacistList" role="button" class="btn btn-info">SHOW ACTIVE PHARMACIST</a></h5></td>
                </tr>
            </table>
        </section>
      </div>
      <div class="col-sm-9">
        <section class="panel">
          <header class="panel-heading">
              <center><h4>INACTIVE PHARMACIST LIST<h4></center>
          </header>
          <table class="table table-hovered" style="text-align: center;">
            <tr id="tblheader">
                <td>#</td>
                <td>Name</td>
                <td>Contact No.</td>
                <td>Birthdate</td>
                <td>Action</td>
            </tr>
            <?php
              foreach($pharmacists as $pharmacist){
                echo "<tr>";
                  echo "<td>DCTR-".$pharmacist['user_id']."</td>";
                  echo "<td>";
                    if($pharmacist['gender'] == 'M'){
                      echo "Mr. ";
                    }else{
                      echo "Ms. ";
                    }
                    echo $pharmacist['first_name']." ".$pharmacist['middle_name']." ".$pharmacist['last_name'];
                  echo "</td>";
                  echo "<td>".$pharmacist['contact_number']."</td>";
                  echo "<td>".date('F d, Y', strtotime($pharmacist['birthdate']))."</td>";
                  echo "<td>";
                    echo "<div class='btn-group' role='group' aria-label='...'>";
                      echo "<a href='".base_url()."Admin/ActivatePharmacist/".$pharmacist['user_id']."' role='button' class='btn btn-default btn-sm'>Activate</a>";
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
