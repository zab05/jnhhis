<section id="main-content">
  <section class="wrapper">
    <div class="row">
        <div class="col-sm-3">
            <section class="panel">
                <header class="panel-heading" style="background-color: #000;"></header>
                <table class="table">
                    <tr>
                      <td colspan="2" align="center"><h5><a href="#addModal" data-toggle="modal" role="button" class="btn btn-info">+ADD NEW MEDICINE</a></h5></td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                      <td>Overall items: </td>
                      <td><?php echo $inventorycount?></td>
                    </tr>
                    <tr>
                      <td>Overall Stock: </td>
                      <td>1</td>
                    </tr>

                </table>
            </section>
        </div>
        <div class="col-sm-9">
            <section class="panel">
                <header class="panel-heading" style="background-color: #000;"></header>
                <header class="panel-heading">
                    <center><h4>PATIENT LIST<h4></center>
                </header>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;">#</th>
                        <th style="text-align: center;">Name</th>
                        <th style="text-align: center;">Description</th>
                        <th style="text-align: center;">Stock</th>
                        <th style="text-align: center;">Price</th>
                        <th style="text-align: center;">Action</th>
                    </tr>
                    </thead>
                    <tbody align="center">
                      <?php
                      $count = 1;
                        foreach($items as $i)
                        {
                          echo '<tr>';
                          echo '<td>'.$count.'</td>';
                          echo '<td>'.$i->item_name.'</td>';
                          echo '<td>'.$i->item_description.'</td>';
                          echo '<td>'.$i->item_quantity.'</td>';
                          echo '<td>'.$i->item_price.'</td>';
                          echo '<td>';
                          echo "<div class='btn-group' role='group' aria-label='...'>";
                                ?>
                                <a href="#myModal" class="btn btn-default" data-toggle="modal" data-updatingid="<?php echo $i->item_id ?>"
                                                                                               data-updatingname="<?php echo $i->item_name?>"
                                                                                               data-updatingdescription="<?php echo $i->item_description?>"
                                                                                               data-updatingquantity="<?php echo $i->item_quantity?>"
                                                                                               data-updatingprice="<?php echo $i->item_price?>">Update</a>
                                <a href="#" class="btn btn-default" data-href="<?php echo base_url();?>Admin/delete_item_inventory/<?php echo $i->item_id?>" data-toggle="modal" data-target="#confirm-delete">Delete</a></td>
                                <?php
                          echo "</div>";
                          echo "</td>";
                          echo "</tr>";
                          $count++;
                        }
                      ?>
                    </tbody>
                </table>
            </section>
        </div>
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

<script>
$('#myModal').on('show.bs.modal', function(e)
{
  //get data-id attribute of the clicked element
  var updatingid = $(e.relatedTarget).data('updatingid');
  var updatingname = $(e.relatedTarget).data('updatingname');
  var updatingdescription = $(e.relatedTarget).data('updatingdescription');
  var updatingquantity = $(e.relatedTarget).data('updatingquantity');
  var updatingprice = $(e.relatedTarget).data('updatingprice');
  //populate the textbox
  $(e.currentTarget).find('input[name="itemid"]').val(updatingid);
  $(e.currentTarget).find('input[name="name"]').val(updatingname);
  $(e.currentTarget).find('input[name="description"]').val(updatingdescription);
  $(e.currentTarget).find('input[name="quantity"]').val(updatingquantity);
  $(e.currentTarget).find('input[name="price"]').val(updatingprice);
});
  </script>


    <script>
$('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});
  </script>


<script>
var _validFileExtensions = [".csv"];
function ValidateSingleInput(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }

            if (!blnValid) {
                alert("Sorry, CSV files only");
                oInput.value = "";
                return false;
            }
        }
    }
    return true;
}
</script>



</body>

<!-- Mirrored from thevectorlab.net/flatlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 May 2016 02:05:28 GMT -->
</html>
