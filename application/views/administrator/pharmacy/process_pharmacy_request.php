<section id="main-content">
  <section class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading" style="background-color: #000;"></header>
              <header class="panel-heading">
                              Pharmacy requests
                          </header>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th></i>#</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Item</th>
                                  <th><i class="fa fa-bookmark"></i> Price</th>
                                  <th><i class=" fa fa-edit"></i> Date</th>
                                  <th><i class=" fa fa-edit"></i> Requested by</th>
                                  <th><i class=" fa fa-edit"></i> For patient</th>
                                  <th><i class=" fa fa-edit"></i> Action</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>

                              <?php
                              $count = 1;
                              foreach($requests as $r)
                              {
                                echo '<tr>';
                                echo '<td>'.$count.'</td>';
                                echo '<td>'.$r->phar_item.'</td>';
                                echo '<td>'.$r->total_price.'</td>';
                                echo '<td>'.$r->date_req.'</td>';
                                echo '<td>'.$r->phar_user_id.'</td>';
                                echo '<td>'.$r->phar_patient.'</td>';
                                if($r->phar_stat == 0)
                                {
                                  echo '<td><span class="label label-info label-mini">Due</span></td>';
                                }
                                else if ($r->phar_stat == 1)
                                {
                                  echo '<td><span class="label label-success label-mini">OK</span></td>';
                                }
                                else
                                {
                                    echo '<td><span class="label label-danger label-mini">Rejected</span></td>';
                                }
                                echo '<td>';
                                ?>
                                <button class="btn btn-success btn-xs" data-href="<?php echo base_url();?>Admin/accept_pharmacy_request/<?php echo $r->phar_item?>" data-toggle="modal" data-target="#confirm-accept"><i class="fa fa-check"></i></button>
                                <button class="btn btn-danger btn-xs" data-href="<?php echo base_url();?>Admin/reject_pharmacy_request/<?php echo $r->phar_item?>/<?php echo $r->quant_requested?>" data-toggle="modal" data-target="#confirm-reject"><i class="fa fa-ban"></i></button>
                                <?php
                                echo '</td>';

                              }
                              ?>


                              </tbody>
                          </table>


    </div>
  </section>
</section>

<!--footer start-->
<footer class="site-footer">
    <div class="container">
      <div class="text-center">
          2013 &copy; FlatLab by VectorLab.
      </div>
    </div>
</footer>
<!--footer end-->
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

<script type="text/javascript">
$('#confirm-accept').on('show.bs.modal', function(e) {
$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});
</script>

<script type="text/javascript">
$('#confirm-reject').on('show.bs.modal', function(e) {
$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});
</script>


</body>

<!-- Mirrored from thevectorlab.net/flatlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 May 2016 02:05:28 GMT -->
</html>
