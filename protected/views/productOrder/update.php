<?php
/* @var $this ProductOrderController */
/* @var $model ProductOrder */

$this->breadcrumbs=array(
	'Product Orders'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductOrder', 'url'=>array('index')),
	array('label'=>'Create ProductOrder', 'url'=>array('create')),
	array('label'=>'View ProductOrder', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage ProductOrder', 'url'=>array('admin')),
);
?>

<h1>Update ProductOrder <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>