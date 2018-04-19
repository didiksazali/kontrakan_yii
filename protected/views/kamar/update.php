<?php
/* @var $this KamarController */
/* @var $model Kamar */

$this->breadcrumbs=array(
	'Kamar'=>array('index'),
	$model->kode_kamar=>array('view','id'=>$model->kode_kamar),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kamar', 'url'=>array('index')),
	array('label'=>'Create Kamar', 'url'=>array('create')),
	array('label'=>'View Kamar', 'url'=>array('view', 'id'=>$model->kode_kamar)),
	array('label'=>'Manage Kamar', 'url'=>array('admin')),
);
?>

<h1>Update Kamar <?php echo $model->kode_kamar; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
