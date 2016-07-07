<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-3">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <table class="table">
                <tr>
                  <td colspan="2" align="center"><h5><a class="btn btn-info" href="#.html">View Accepted Requests</a></h5></td>
                </tr>
                <table class="table">
                  <tr>
                    <td colspan="2" align="center"><h5><a class="btn btn-info" style="background-color:red;" href="#.html">View Rejected Requests</a></h5></td>
                  </tr>
              </table>
          </section>
      </div>
      <div class="col-sm-9">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <header class="panel-heading">
                  <center><h4>CSR PRODUCT REQUEST LIST<h4></center>
              </header>
              <table class="table table-hovered" style="text-align: center;">
                <tr id="tblheader">
                    <td>#</td>
                    <td>Requester</td>
                    <td>Item Name</td>
                    <td>Quantity</td>
                    <td>Request Type</td>
                    <td>Request Status</td>
                    <td>Action</td>
                </tr>
                <?php
                foreach($csrrequests as $item)
                {
                    echo "<tr>";
                      echo "<td>".$item['purchase_id']."</td>";
                      echo "<td>".$item['first_name']." ".$item['middle_name']." ".$item['last_name']."</td>";
                      echo "<td>".$item['item_name']."</td>";
                      echo "<td>".$item['quantity']."</td>";
                      echo "<td>".$item['pur_name']."</td>";
                      if($item['pur_stat']==0)
                      {
                        echo "<td>For Approval</td>";
                      }
                      elseif ($item['pur_stat']==3) {
                        echo "<td>Hold</td>";
                      }
                    echo "<td>";
                      echo "<a href='#.html' role='button' class='btn btn-default btn-xs'>Hold</a>";
                      echo " <a href='#.html' role='button' class='btn btn-default btn-xs'>Accept</a>";
                      echo " <a href='#.html' role='button' class='btn btn-default btn-xs'>Reject</a>";
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
