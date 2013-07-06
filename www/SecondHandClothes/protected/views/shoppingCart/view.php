<?php
/* @var $this ShoppingCartController */
/* @var $model ShoppingCart */

$this->breadcrumbs=array(
	'Shopping Carts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ShoppingCart', 'url'=>array('index')),
	array('label'=>'Create ShoppingCart', 'url'=>array('create')),
	array('label'=>'Update ShoppingCart', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ShoppingCart', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ShoppingCart', 'url'=>array('admin')),
);
?>

<h1>View ShoppingCart #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'userId',
		'products',
	),
)); ?>
