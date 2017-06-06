<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<section class="section-top-30 text-left">
    <div class="shell"><a href="<?php echo Yii::app()->request->urlReferrer; ?>" class="btn btn-xxs btn-default btn-icon btn-icon-left"><span class="icon mdi mdi-chevron-left text-base"></span><span>Back</span></a></div>
</section>
<section class="section-75">
    <div class="shell">
        <h3><?php echo $model->Name; ?></h3>
<!--        <p class="font-size-12 text-regular">Powerful energy source for your family!</p>-->
        <hr class="hr bg-gray-light offset-top-25">
        <div class="range range-xs-center offset-top-70 text-sm-left">
            <div class="cell-xs-8 cell-lg-6"><img src="<?php echo $model->Image; ?>" alt="" width="570" height="570" class="img-responsive img-rounded"/>
            </div>
            <div class="cell-sm-12 cell-lg-6 text-sm-left offset-top-30 offset-lg-top-0">
                
                <div class="offset-top-30">
                    <p class="text-bold text-uppercase text-dark"> TECH SPECS:</p>
                    <div class="range offset-top-10">
                        <div class="cell-sm-6">
                            <p class="text-regular line-height-21"><?php echo $model->Description?></p>
                        </div>
                        <div class="cell-xs-12 offset-top-35"><a href="products-single.html#" class="btn btn-primary">Buy Now</a></div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr offset-top-50 offset-sm-top-75">
    </div>
</section>


