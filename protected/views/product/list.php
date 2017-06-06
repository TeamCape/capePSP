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
                        <h6 class="text-transform-none"><a href="index.php?r=product/view&id=<?php echo $value['Id']; ?>" class="text-dark"><?php echo $value['Name']; ?></a></h6>
                    </div>
                </div>
            </div>
            <?php } ?>
            
            
        </div>
<!--        <div class="offset-top-40 offset-md-top-70">
             Classic Pagination
            <nav>
                <ul class="pagination-classic">
                    <li class="disabled"><span>First</span></li>
                    <li class="disabled"><span>Previous</span></li>
                    <li class="pagination-nav active"><span>1</span></li>
                    <li class="pagination-nav"><a href="products-grid.html#">2</a></li>
                    <li class="pagination-nav"><a href="products-grid.html#">3</a></li>
                    <li class="pagination-nav"><a href="products-grid.html#">4</a></li>
                    <li><a href="products-grid.html#">Next</a></li>
                    <li><a href="products-grid.html#">Last</a></li>
                </ul>
            </nav>
        </div>-->
    </div>
</section>