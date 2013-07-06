<?php
/* @var $this ShoppingCartController */
/* @var $model ShoppingCart */

$this->breadcrumbs=array(
	'Shopping Carts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ShoppingCart', 'url'=>array('index')),
	array('label'=>'Manage ShoppingCart', 'url'=>array('admin')),
);
?>

<h1>Create ShoppingCart</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>