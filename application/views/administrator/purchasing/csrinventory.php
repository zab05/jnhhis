<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-12">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <header class="panel-heading">
                  <center><h4>CSR PRODUCT LIST<h4></center>
              </header>
              <table class="table table-hovered" style="text-align: center;">
                <tr id="tblheader">
                    <td>#</td>
                    <td>Item Name</td>
                    <td>Item Description</td>
                    <td>Item Stocks</td>
                </tr>
                <?php
                foreach($csrinventory as $item)
                {
                    echo "<tr>";
                      echo "<td>".$item['csr_id']."</td>";
                      echo "<td>".$item['item_name']."</td>";
                      echo "<td>".$item['item_desc']."</td>";
                      if($item['item_stock']!=0){
                      echo "<td>".$item['item_stock']."</td>";
                    } else {
                      echo "<td>Out of Stock</td>";
                    }
                    echo "</tr>";
                }
                 ?>
              </table>
          </section>
      </div>
    </div>

  </section>
</section>
