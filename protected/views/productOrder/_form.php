<?php
/* @var $this ProductOrderController */
/* @var $model ProductOrder */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-order-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ProductId'); ?>
		<?php echo $form->textField($model,'ProductId'); ?>
		<?php echo $form->error($model,'ProductId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CustomerId'); ?>
		<?php echo $form->textField($model,'CustomerId'); ?>
		<?php echo $form->error($model,'CustomerId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrderNote'); ?>
		<?php echo $form->textArea($model,'OrderNote',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'OrderNote'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DeliveryAddress'); ?>
		<?php echo $form->textArea($model,'DeliveryAddress',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'DeliveryAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->textField($model,'Status',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Date'); ?>
		<?php echo $form->textField($model,'Date'); ?>
		<?php echo $form->error($model,'Date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->