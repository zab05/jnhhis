<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="addModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Add item</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open('Admin/add_item_inventory'); ?>
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="Description">Description</label>
                        <input type="text" class="form-control" placeholder="Description" name="description">
                    </div>
                    <div class="form-group">
                        <label for="Quantity">Quantity</label>
                        <input type="text" class="form-control" placeholder="Quantity" name="quantity">
                    </div>
                    <div class="form-group">
                        <label for="Price">Price</label>
                        <input type="text" class="form-control" placeholder="Price" name="price">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <hr>
                  <h4 class="modal-title">CSV File</h4>
                  <?php echo form_open_multipart('Admin/add_item_inventory_import');?>
                  <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input type="file" name="userfile" onchange="ValidateSingleInput(this);">
                  </div>

                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
