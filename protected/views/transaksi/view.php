<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */

$this->breadcrumbs=array(
	'Transaksis'=>array('index'),
	$model->id_transaksi,
);

$this->menu=array(
	array('label'=>'List Transaksi', 'url'=>array('index')),
	array('label'=>'Create Transaksi', 'url'=>array('create')),
	array('label'=>'Update Transaksi', 'url'=>array('update', 'id'=>$model->id_transaksi)),
	array('label'=>'Delete Transaksi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_transaksi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Transaksi', 'url'=>array('admin')),
);
?>

<h1>View Transaksi #<?php echo $model->id_transaksi; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_transaksi',
		'id_orang',
		'kode_kamar',
		'lama_inap',
		'biaya_tambahan',
	),
)); ?>
