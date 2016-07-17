<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-12">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <header class="panel-heading">
                  <center><h4><a href="<?=base_url()?>Csr/PendingRequests" role='button' class='btn btn-default btn-xs'><</a> REJECTED REQUESTS<h4></center>
              </header>
              <table class="table table-hovered" style="text-align: center;">
                <tr id="tblheader">
                    <td>#</td>
                    <td>Requester</td>
                    <td>Item Name</td>
                    <td>Quantity</td>
                </tr>
                <?php
                foreach($nursetocsr as $request)
                {
                  echo "<tr>";
                    echo "<td>".$request['csr_req_id']."</td>";
                    echo "<td>".$request['first_name']." ".$request['middle_name']." ".$request['last_name']."</td>";
                    echo "<td>".$request['item_name']."</td>";
                    echo "<td>".$request['item_quant']."</td>";
                  echo "</tr>";
                }
                ?>
              </table>
          </section>
      </div>
    </div>

  </section>
</section>
