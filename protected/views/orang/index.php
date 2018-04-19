<?php
/* @var $this OrangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Orang',
);

$this->menu=array(
	array('label'=>'Create Orang', 'url'=>array('create')),
	array('label'=>'Manage Orang', 'url'=>array('admin')),
);
?>

<h1>Tambah Pelanggan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
