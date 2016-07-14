<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-3">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <table class="table">
                <tr>
                  <td colspan="2" align="center"><h5><a class="btn btn-info" href="<?=base_url()?>Admin/PurCsrAccRequest">View Accepted Requests</a></h5></td>
                </tr>
                <table class="table">
                  <tr>
                    <td colspan="2" align="center"><h5><a class="btn btn-info" style="background-color:red;" href="<?=base_url()?>Admin/PurCsrRejRequest">View Rejected Requests</a></h5></td>
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
                  if($item['pur_stat']==0)
                  {
                    echo "<tr>";
                      echo "<td>".$item['purchase_id']."</td>";
                      echo "<td>".$item['first_name']." ".$item['middle_name']." ".$item['last_name']."</td>";
                      echo "<td>".$item['item_name']."</td>";
                      echo "<td>".$item['quantity']."</td>";
                      echo "<td>".$item['pur_name']."</td>";
                      echo "<td>For Approval</td>";
                    echo "<td>";
                      echo " <a href='".base_url()."Admin/hold_csr/".$item['purchase_id']."' role='button' class='btn btn-info btn-sm'>Hold</a>";
                      echo " <a href='".base_url()."Admin/accept_csr/".$item['purchase_id']."' role='button' class='btn btn-info btn-sm'>Accept</a>";
                      echo " <a href='".base_url()."Admin/reject_csr/".$item['purchase_id']."' role='button' class='btn btn-info btn-sm'>Reject</a>";
                    echo "</td>";
                    echo "</tr>";
                  } elseif ($item['pur_stat']==3) {
                    echo "<tr>";
                      echo "<td>".$item['purchase_id']."</td>";
                      echo "<td>".$item['first_name']." ".$item['middle_name']." ".$item['last_name']."</td>";
                      echo "<td>".$item['item_name']."</td>";
                      echo "<td>".$item['quantity']."</td>";
                      echo "<td>".$item['pur_name']."</td>";
                      echo "<td>Hold</td>";
                    echo "<td>";
                      echo " <a href='".base_url()."Admin/hold_csr/".$item['purchase_id']."' role='button' class='btn btn-info btn-sm'>Hold</a>";
                      echo " <a href='".base_url()."Admin/accept_csr/".$item['purchase_id']."' role='button' class='btn btn-info btn-sm'>Accept</a>";
                      echo " <a href='".base_url()."Admin/reject_csr/".$item['purchase_id']."' role='button' class='btn btn-info btn-sm'>Reject</a>";
                    echo "</td>";
                    echo "</tr>";
                  }
                }
                 ?>
              </table>
          </section>
      </div>
    </div>

  </section>
</section>
