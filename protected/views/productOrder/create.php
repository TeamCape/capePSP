<?php
/* @var $this ProductOrderController */
/* @var $model ProductOrder */

$this->breadcrumbs=array(
	'Product Orders'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductOrder', 'url'=>array('index')),
	array('label'=>'Manage ProductOrder', 'url'=>array('admin')),
);
?>

<h1>Create ProductOrder</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>