<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-12">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <header class="panel-heading">
                  <center><h4><a href="<?=base_url()?>Admin/PurchasingCSRRequests" role='button' class='btn btn-default btn-xs'><</a> REJECTED CSR REQUESTS<h4></center>
              </header>
              <table class="table table-hovered" style="text-align: center;">
                <tr id="tblheader">
                  <td>#</td>
                  <td>Requester</td>
                  <td>Item Name</td>
                  <td>Quantity</td>
                  <td>Request Type</td>
                </tr>
                <?php
                foreach($rejected as $item)
                {
                    echo "<tr>";
                      echo "<td>".$item['purchase_id']."</td>";
                      echo "<td>".$item['first_name']." ".$item['middle_name']." ".$item['last_name']."</td>";
                      echo "<td>".$item['item_name']."</td>";
                      echo "<td>".$item['quantity']."</td>";
                      echo "<td>".$item['pur_name']."</td>";
                }
                 ?>
              </table>
          </section>
      </div>
    </div>
  </section>
</section>
