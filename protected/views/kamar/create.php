<?php
/* @var $this KamarController */
/* @var $model Kamar */

$this->breadcrumbs=array(
	'Kamar'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kamar', 'url'=>array('index')),
	array('label'=>'Manage Kamar', 'url'=>array('admin')),
);
?>

<h1>Create Kamar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
