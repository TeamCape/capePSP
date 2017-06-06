<?php
/* @var $this ProductOrderController */
/* @var $model ProductOrder */

$this->breadcrumbs=array(
	'Product Orders'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List ProductOrder', 'url'=>array('index')),
	array('label'=>'Create ProductOrder', 'url'=>array('create')),
	array('label'=>'Update ProductOrder', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete ProductOrder', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductOrder', 'url'=>array('admin')),
);
?>

<h1>View ProductOrder #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'ProductId',
		'CustomerId',
		'OrderNote',
		'DeliveryAddress',
		'Status',
		'Date',
	),
)); ?>
