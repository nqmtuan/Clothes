<?php
/* @var $this ShoppingCartController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Shopping Carts',
);

$this->menu=array(
	array('label'=>'Create ShoppingCart', 'url'=>array('create')),
	array('label'=>'Manage ShoppingCart', 'url'=>array('admin')),
);
?>

<h1>Shopping Carts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
