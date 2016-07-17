<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-3">
	  
          <section class="panel">
              <header class="panel-heading">
				Request History
			  <span class="tools pull-right">
	
              </span>
			  </header>
			  <div class="panel-body">
              <div class="adv-table">
              <table class="table">
                
				</table>
				<center>
				<a href="<?=base_url()?>Admin/PurCsrAccRequest" data-toggle="modal" role="button" class="btn btn-sm btn-round btn-success"><i class="fa fa-eye"></i> Accepted Requests</a><br><br>
				<a href="<?=base_url()?>Admin/PurCsrRejRequest" data-toggle="modal" role="button" class="btn btn-sm btn-round btn-danger"><i class="fa fa-eye"></i> Rejected Requests</a>
				</center>
				</div>
				</div>
          </section>
      </div>
      <div class="col-sm-9">
          <section class="panel">
              
              <header class="panel-heading">
				CSR Product Requests
              </header>
			  <div class="panel-body">
              <div class="adv-table">
              <table class="table table-striped" id="dynamic-table">
			    <thead>
                <tr id="tblheader">
                    <th>#</th>
                    <th>Requested By</th>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
				</thead>
				<tbody>
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
					 echo "<div class='btn-group' role='group' aria-label='...'>";
                      echo " <a href='".base_url()."Admin/hold_csr/".$item['purchase_id']."' role='button' class='btn btn-warning btn-sm'>Hold</a>";
                      echo " <a href='".base_url()."Admin/accept_csr/".$item['purchase_id']."' role='button' class='btn btn-success btn-sm'>Accept</a>";
                      echo " <a href='".base_url()."Admin/reject_csr/".$item['purchase_id']."' role='button' class='btn btn-danger btn-sm'>Reject</a>";
					 echo "</div>";
				   echo "</td>";
                    echo "</tr>";
                  }
                }
                 ?>
				 </tbody>
              </table>
          </section>
      </div>
    </div>

  </section>
</section>


<!-- js placed at the end of the document so the pages load faster -->

<script src="<?=base_url()?>js/jquery.js"></script>
<script src="<?=base_url()?>js/bootstrap.min.js"></script>

<script class="include" type="text/javascript" src="<?=base_url()?>js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?=base_url()?>js/jquery.scrollTo.min.js"></script>
<script src="<?=base_url()?>js/jquery.nicescroll.js" type="text/javascript"></script>

<!--right slidebar-->
<script src="<?=base_url()?>js/slidebars.min.js"></script>
<!--common script for all pages-->
<script src="<?=base_url()?>js/common-scripts.js"></script>


<!--dynamic table initialization -->
<script type="text/javascript" language="javascript" src="<?php echo base_url()?>assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/data-tables/DT_bootstrap.js"></script>
<script src="<?php echo base_url()?>js/dynamic_table_init.js"></script>
