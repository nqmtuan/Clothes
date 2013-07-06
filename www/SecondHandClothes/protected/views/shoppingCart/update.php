<?php
/* @var $this ShoppingCartController */
/* @var $model ShoppingCart */

$this->breadcrumbs=array(
	'Shopping Carts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ShoppingCart', 'url'=>array('index')),
	array('label'=>'Create ShoppingCart', 'url'=>array('create')),
	array('label'=>'View ShoppingCart', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ShoppingCart', 'url'=>array('admin')),
);
?>

<h1>Update ShoppingCart <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>