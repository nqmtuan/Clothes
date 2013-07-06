<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>



<?php echo CHtml::link('Manage Product',array('product/index')); ?>
<br />
<?php echo CHtml::link('Manage User',array('user/index')); ?>
<br />
<?php echo CHtml::link('Manage Tag',array('tag/index')); ?>
<br />
<?php echo CHtml::link('Manage Category',array('category/index')); ?>
<br />
<?php echo CHtml::link('Manage Resource',array('resource/index')); ?>
<br />

