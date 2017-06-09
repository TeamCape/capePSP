<?php
/*
 * This page for product list by perticular category.
 */
?>
<section class="section-75 section-md-bottom-122">
    <div class="shell">
        
        <div class="range range-xs-center text-sm-left">
            <?php foreach ($data as $key => $value) { ?>
                <div class="cell-sm-6 cell-md-4 offset-top-30">
                <div class="thumbnail-img"><img src="<?php echo $value['Image']; ?>" alt="" width="370" height="300" class="img-responsive img-fullwidth"/>
                    <div class="caption">
                        <h6 class="text-transform-none"><a href="index.php?r=product/view&id=<?php echo $value['Id']; ?>" class="text-dark"><?php echo 'Name: '.$value['Name']; ?></a>&cedil;&nbsp;<span>Price: <?php echo $value['Price']; ?></span> <button class="btn btn-primary btn-xs" title="Add To Cart" onclick="AddToCart('<?php echo $value['Id']; ?>','<?php echo $value['Name']; ?>','<?php echo $value['Price']; ?>')"><i class="fa fa-cart-plus" aria-hidden="true"></i></button></h6>
                    </div>
                </div>
            </div>
            <?php } ?>  
        </div>
    </div>
</section>
<div class="modal fade" id="myCart" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Cart Item List</h4>
      </div>
      <div class="modal-body">
            <table data-responsive="true" id="cartListTable" class="table table-custom-variant-2 table-primary table-fixed bordered-table">
            <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th></th>
            </tr>
            <tbody>
                
            </tbody>
            </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Order Complete</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->