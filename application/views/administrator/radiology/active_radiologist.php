<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-3">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <table class="table">
                  <tr>
                    <td colspan="2" align="center"><h5><a href="<?=base_url()?>Admin/AddRadiologist" role="button" class="btn btn-info">+ADD NEW RADIOLOGIST</a></h5></td>
                  </tr>
                  <tr>
                  </tr>
                  <tr>
                    <td>Number of Radiologist: </td>
                    <td><?=$total_radiologist?></td>
                  </tr>
                  <tr>
                    <td>Number of Active Radiologist: </td>
                    <td><?=$total_active_radiologist?></td>
                  </tr>
                  <tr>
                    <td>Number of Inactive Radiologist: </td>
                    <td><?=$total_inactive_radiologist?></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center"><h5><a href="<?=base_url()?>Admin/InactiveRadiologist" role="button" class="btn btn-info">SHOW INACTIVE RADIOLOGIST</a></h5></td>
                  </tr>
              </table>
          </section>
      </div>
      <div class="col-sm-9">
        <section class="panel">
          <header class="panel-heading">
              <center><h4>ACTIVE RADIOLOGIST LIST<h4></center>
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
              foreach($radiologists as $radiologist){
                echo "<tr>";
                  echo "<td>DCTR-".$radiologist['user_id']."</td>";
                  echo "<td>";
                    if($radiologist['gender'] == 'M'){
                      echo "Mr. ";
                    }else{
                      echo "Ms. ";
                    }
                    echo $radiologist['first_name']." ".$radiologist['middle_name']." ".$radiologist['last_name'];
                  echo "</td>";
                  echo "<td>".$radiologist['contact_number']."</td>";
                  echo "<td>".date('F d, Y', strtotime($radiologist['birthdate']))."</td>";
                  echo "<td>";
                    echo "<div class='btn-group' role='group' aria-label='...'>";
                      echo "<a href='".base_url()."Admin/EditRadioligst/".$radiologist['user_id']."' role='button' class='btn btn-default btn-sm'>Edit</a>";
                      echo "<a href='".base_url()."Admin/DeactivateRadiologist/".$radiologist['user_id']."' role='button' class='btn btn-default btn-sm'>Deactivate</a>";
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
