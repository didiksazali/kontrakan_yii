<?php
/* @var $this OrangController */
/* @var $model Orang */

$this->breadcrumbs=array(
	'Pelanggan'=>array('index'),
	$model->id_orang,
);

$this->menu=array(
	array('label'=>'List Pelanggan', 'url'=>array('index')),
	array('label'=>'Create Pelanggan', 'url'=>array('create')),
	array('label'=>'Update Pelanggan', 'url'=>array('update', 'id'=>$model->id_orang)),
	array('label'=>'Delete Pelanggan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_orang),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pelanggan', 'url'=>array('admin')),
);
?>

<h1>View Orang #<?php echo $model->id_orang; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_orang',
		'nama_orang',
		'jenis_kelamin',
	),
)); ?>
