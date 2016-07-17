<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-12">
          <section class="panel">
              
              <header class="panel-heading">
              CSR Inventory
              </header>
			  
			  <div class="panel-body">
               <div class="adv-table">
              <table class="table table-striped" id="dynamic-table">
			    <thead>
                <tr>
                    <th>#</td>
                    <th>Name</th>
                    <th>Descriptionthtd>
                    <th>Stocks</th>
                </tr>
				</thead>
				<tbody>
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
			  </tbody>
              </table>
			  </div>
				</div>
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



