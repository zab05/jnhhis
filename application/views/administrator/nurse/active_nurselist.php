<section id="main-content">
  <section class="wrapper">
    <div class="row">
        <div class="col-sm-3">
            <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <table class="table">
                  <tr>
                    <td colspan="2" align="center"><h5><a href="<?=base_url()?>Admin/AddNurse" role="button" class="btn btn-info"><span class="fa fa-plus"/>ADD NEW NURSE</a></h5></td>
                  </tr>
                  <tr>
                  </tr>
                  <tr>
                    <td>Number of Active Nurse Manager: </td>
                    <td><?=$total_active_nurse_manager?></td>
                  </tr>
                  <tr>
                    <td>Number of Inactive Nurse Manager: </td>
                    <td><?=$total_inactive_nurse_manager?></td>
                  </tr>
                  <tr>
                    <td>Number of Active Bedside Nurse: </td>
                    <td><?=$total_active_bedside_nurse?></td>
                  </tr>
                  <tr>
                    <td>Number of Inactive Bedside Nurse: </td>
                    <td><?=$total_inactive_bedside_nurse?></td>
                  </tr>
                  <tr>
                    <td>Number of Nurse: </td>
                    <td><?=$total_nurse?></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center"><h5><a href="<?=base_url()?>Admin/InactiveNurse" role="button" class="btn btn-info">SHOW INACTIVE NURSE</a></h5></td>
                  </tr>
              </table>
            </section>
        </div>
        <div class="col-sm-9">
            <section class="panel">
                <header class="panel-heading">
                    <center><h4>NURSE LIST<h4></center>
                </header>
                <table class="table table-hovered" style="text-align: center;">
                  <tr id="tblheader">
                      <td>#</td>
                      <td>Name</td>
                      <td>Contact No.</td>
                      <td>Position</td>
                      <td>Action</td>
                  </tr>
                  <?php
                    foreach($nurses as $nurse){
                      echo "<tr>";
                        echo "<td>DCTR-".$nurse['user_id']."</td>";
                        echo "<td>";
                          if($nurse['gender'] == 'M'){
                            echo "Mr. ";
                          }else{
                            echo "Ms. ";
                          }
                          echo $nurse['first_name']." ".$nurse['middle_name']." ".$nurse['last_name'];
                        echo "</td>";
                        echo "<td>".$nurse['contact_number']."</td>";
                        echo "<td>".$nurse['name']."</td>";
                        echo "<td>";
                          echo "<div class='btn-group' role='group' aria-label='...'>";
                            echo "<a href='".base_url()."Admin/EditNurse/".$nurse['user_id']."' role='button' class='btn btn-default btn-sm'>Edit</a>";
                            echo "<a href='".base_url()."Admin/DeactivateNurse/".$nurse  ['user_id']."' role='button' class='btn btn-default btn-sm'>Deactivate</a>";
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
