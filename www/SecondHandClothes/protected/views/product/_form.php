<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>5000)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'color'); ?>
		<?php echo $form->textField($model,'color',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'size'); ?>
		<?php echo $form->textField($model,'size',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'condition'); ?>
		<?php echo $form->textField($model,'condition',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'condition'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'material'); ?>
		<?php echo $form->textField($model,'material',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'material'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'brand'); ?>
		<?php echo $form->textField($model,'brand',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'brand'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priceBuy'); ?>
		<?php echo $form->textField($model,'priceBuy'); ?>
		<?php echo $form->error($model,'priceBuy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priceSell'); ?>
		<?php echo $form->textField($model,'priceSell'); ?>
		<?php echo $form->error($model,'priceSell'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timeBuy'); ?>
		<?php echo $form->textField($model,'timeBuy'); ?>
		<?php echo $form->error($model,'timeBuy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timeSell'); ?>
		<?php echo $form->textField($model,'timeSell'); ?>
		<?php echo $form->error($model,'timeSell'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timeCreate'); ?>
		<?php echo $form->textField($model,'timeCreate'); ?>
		<?php echo $form->error($model,'timeCreate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timeUpdate'); ?>
		<?php echo $form->textField($model,'timeUpdate'); ?>
		<?php echo $form->error($model,'timeUpdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timeAvailable'); ?>
		<?php echo $form->textField($model,'timeAvailable'); ?>
		<?php echo $form->error($model,'timeAvailable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categoryId'); ?>
		<?php echo $form->textField($model,'categoryId'); ?>
		<?php echo $form->error($model,'categoryId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusEbay'); ?>
		<?php echo $form->textField($model,'statusEbay',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'statusEbay'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transactionIdEbay'); ?>
		<?php echo $form->textField($model,'transactionIdEbay',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'transactionIdEbay'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusFacebook'); ?>
		<?php echo $form->textField($model,'statusFacebook',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'statusFacebook'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'supplierId'); ?>
		<?php echo $form->textField($model,'supplierId'); ?>
		<?php echo $form->error($model,'supplierId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isCommentable'); ?>
		<?php echo $form->textField($model,'isCommentable'); ?>
		<?php echo $form->error($model,'isCommentable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'viewCount'); ?>
		<?php echo $form->textField($model,'viewCount'); ?>
		<?php echo $form->error($model,'viewCount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->