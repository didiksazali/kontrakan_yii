<?php
/* @var $this KamarController */
/* @var $model Kamar */

$this->breadcrumbs=array(
	'Kamar'=>array('index'),
	$model->kode_kamar,
);

$this->menu=array(
	array('label'=>'List Kamar', 'url'=>array('index')),
	array('label'=>'Create Kamar', 'url'=>array('create')),
	array('label'=>'Update Kamar', 'url'=>array('update', 'id'=>$model->kode_kamar)),
	array('label'=>'Delete Kamar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_kamar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kamar', 'url'=>array('admin')),
);
?>

<h1>View Kamar #<?php echo $model->kode_kamar; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_kamar',
		'nama_kamar',
		'tarif_normal',
		'tarif_khusus',
	),
)); ?>
