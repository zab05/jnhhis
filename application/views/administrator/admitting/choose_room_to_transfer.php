<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-12">
          <section class="panel">
            <header class="panel-heading" style="background-color: #000;"></header>
            <header class="panel-heading">
                <center><h4>SELECT ROOM<h4></center>
            </header>
            <table class="table table-hovered" style="text-align: center;">
              <tr id="tblheader">
                  <td>#</td>
                  <td>Name</td>
                  <td>Beds Available</td>
                  <td>Price</td>
                  <td>Action</td>
              </tr>
              <?php
                foreach($rooms as $room){
                  echo "<tr>";
                    echo "<td>".$room['room_id']."</td>";
                    echo "<td>".$room['room_name']."</td>";
                    echo "<td></td>";
                    echo "<td>".$room['room_price']."</td>";
                    echo "<td><a href='".base_url()."Admin/ChooseBedToTransfer/".$patientid."/".$room['room_id']."' role='button' class='btn btn-default btn-xs'>CONFIRM</a></td>";
                  echo "</tr>";
                }
              ?>
            </table>
        </section>
      </div>
    </div>
  </section>
</section>
