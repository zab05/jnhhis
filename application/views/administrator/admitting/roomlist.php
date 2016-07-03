<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-12">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <header class="panel-heading">
                  <center><h4>ROOM LIST<h4></center>
              </header>
              <table class="table table-hovered" style="text-align: center;">
                <tr id="tblheader">
                    <td>ID</td>
                    <td>ROOM TYPE</td>
                    <td>ACTION</td>
                </tr>
                <?php
                  foreach($rooms as $room){
                    echo "<tr>";
                      echo "<td>".$room['room_type_id']."</td>";
                      echo "<td>".$room['room_name']."</td>";
                      echo "<td>";
                        echo "<a href='".base_url()."Admin/ViewAdmittedPatients/".$room['room_id']."' role='button' class='btn btn-default btn-xs'>View Admitted Patients</a>";
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
