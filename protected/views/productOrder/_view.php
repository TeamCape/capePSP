<?php
/* @var $this ProductOrderController */
/* @var $data ProductOrder */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductId')); ?>:</b>
	<?php echo CHtml::encode($data->ProductId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CustomerId')); ?>:</b>
	<?php echo CHtml::encode($data->CustomerId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderNote')); ?>:</b>
	<?php echo CHtml::encode($data->OrderNote); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DeliveryAddress')); ?>:</b>
	<?php echo CHtml::encode($data->DeliveryAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Date')); ?>:</b>
	<?php echo CHtml::encode($data->Date); ?>
	<br />


</div>