<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>5000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'color'); ?>
		<?php echo $form->textField($model,'color',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'size'); ?>
		<?php echo $form->textField($model,'size',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'condition'); ?>
		<?php echo $form->textField($model,'condition',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'material'); ?>
		<?php echo $form->textField($model,'material',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brand'); ?>
		<?php echo $form->textField($model,'brand',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'priceBuy'); ?>
		<?php echo $form->textField($model,'priceBuy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'priceSell'); ?>
		<?php echo $form->textField($model,'priceSell'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timeBuy'); ?>
		<?php echo $form->textField($model,'timeBuy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timeSell'); ?>
		<?php echo $form->textField($model,'timeSell'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timeCreate'); ?>
		<?php echo $form->textField($model,'timeCreate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timeUpdate'); ?>
		<?php echo $form->textField($model,'timeUpdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timeAvailable'); ?>
		<?php echo $form->textField($model,'timeAvailable'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categoryId'); ?>
		<?php echo $form->textField($model,'categoryId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusEbay'); ?>
		<?php echo $form->textField($model,'statusEbay',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transactionIdEbay'); ?>
		<?php echo $form->textField($model,'transactionIdEbay',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusFacebook'); ?>
		<?php echo $form->textField($model,'statusFacebook',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supplierId'); ?>
		<?php echo $form->textField($model,'supplierId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isCommentable'); ?>
		<?php echo $form->textField($model,'isCommentable'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'viewCount'); ?>
		<?php echo $form->textField($model,'viewCount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->