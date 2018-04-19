<?php
/* @var $this KamarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kamar',
);

$this->menu=array(
	array('label'=>'Create Kamar', 'url'=>array('create')),
	array('label'=>'Manage Kamar', 'url'=>array('admin')),
);
?>

<h1>Kamar</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
