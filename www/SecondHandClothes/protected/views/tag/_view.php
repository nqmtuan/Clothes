<?php
/* @var $this TagController */
/* @var $data Tag */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sortId')); ?>:</b>
	<?php echo CHtml::encode($data->sortId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shouldShowToUser')); ?>:</b>
	<?php echo CHtml::encode($data->shouldShowToUser); ?>
	<br />


</div>