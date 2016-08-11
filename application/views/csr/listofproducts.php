<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-3">
          <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <table class="table">
                <tr>
                  <td colspan="2" align="center"><h5><a class="btn btn-info" data-toggle="modal" href="#requestproduct">+Request New Product</a></h5></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><h5><a class="btn btn-info" href="RequestHistory">Request History</a></h5></td>
                </tr>
              </table>
          </section>
      </div>
      <div class="col-sm-9">
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
                    <td>Action</td>
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
                      echo "<td>";
                        echo "<a href='".base_url()."Csr/RequestRestock/".$item['csr_id']."' role='button' class='btn btn-default btn-xs'>Request for a stock</a>";
                      echo"</td>";
                    echo "</tr>";
                }
                 ?>
              </table>
          </section>
      </div>
    </div>

    <div class="modal fade modal-dialog-center" id="requestproduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content-wrap">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" align="center">New Product Request Form</h4>
                    </div>
                    <div class="modal-body">
                      <?php
                        $attributes = array('class'=>'form-horizontal', 'role'=>'form');
                        echo form_open('csr/add_newproduct', $attributes);
                      ?>

                      <div class="form-group">
                          <label  class="col-lg-3 col-sm-3 control-label">Item: </label>
                          <div class="col-lg-9">
                            <input type="text" name="itemreq" class="form-control" placeholder="Item Name">
                          </div>
                      </div>

                      <div class="form-group">
                        <label  class="col-lg-3 col-sm-3 control-label">Quantity: </label>
                        <div class="col-lg-9">
                            <select class="form-control" name="itemquant">
                              <?php
                                for($i = 1; $i<=300; $i++){
                                  echo "<option value=".$i.">".$i."</option>";
                                }
                              ?>
                            </select>
                        </div>
                    </div>

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <input type="submit" value="Submit" class="btn btn-warning">
                    </div>
                    <?=form_close()?>
                </div>
            </div>
        </div>
    </div>
  </section>
</section>
