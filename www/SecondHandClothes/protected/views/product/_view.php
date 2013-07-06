<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color')); ?>:</b>
	<?php echo CHtml::encode($data->color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('size')); ?>:</b>
	<?php echo CHtml::encode($data->size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('condition')); ?>:</b>
	<?php echo CHtml::encode($data->condition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('material')); ?>:</b>
	<?php echo CHtml::encode($data->material); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('brand')); ?>:</b>
	<?php echo CHtml::encode($data->brand); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('priceBuy')); ?>:</b>
	<?php echo CHtml::encode($data->priceBuy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('priceSell')); ?>:</b>
	<?php echo CHtml::encode($data->priceSell); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timeBuy')); ?>:</b>
	<?php echo CHtml::encode($data->timeBuy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timeSell')); ?>:</b>
	<?php echo CHtml::encode($data->timeSell); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timeCreate')); ?>:</b>
	<?php echo CHtml::encode($data->timeCreate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timeUpdate')); ?>:</b>
	<?php echo CHtml::encode($data->timeUpdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timeAvailable')); ?>:</b>
	<?php echo CHtml::encode($data->timeAvailable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoryId')); ?>:</b>
	<?php echo CHtml::encode($data->categoryId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusEbay')); ?>:</b>
	<?php echo CHtml::encode($data->statusEbay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transactionIdEbay')); ?>:</b>
	<?php echo CHtml::encode($data->transactionIdEbay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusFacebook')); ?>:</b>
	<?php echo CHtml::encode($data->statusFacebook); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplierId')); ?>:</b>
	<?php echo CHtml::encode($data->supplierId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isCommentable')); ?>:</b>
	<?php echo CHtml::encode($data->isCommentable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viewCount')); ?>:</b>
	<?php echo CHtml::encode($data->viewCount); ?>
	<br />

	*/ ?>

</div>