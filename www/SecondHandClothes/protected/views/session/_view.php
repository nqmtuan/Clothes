<?php
/* @var $this SessionController */
/* @var $data Session */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->userId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timeStart')); ?>:</b>
	<?php echo CHtml::encode($data->timeStart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timeEnd')); ?>:</b>
	<?php echo CHtml::encode($data->timeEnd); ?>
	<br />


</div>