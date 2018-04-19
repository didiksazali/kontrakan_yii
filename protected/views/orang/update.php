<?php
/* @var $this OrangController */
/* @var $model Orang */

$this->breadcrumbs=array(
	'Pelanggan'=>array('index'),
	$model->id_orang=>array('view','id'=>$model->id_orang),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pelanggan', 'url'=>array('index')),
	array('label'=>'Create Pelanggan', 'url'=>array('create')),
	array('label'=>'View Pelanggan', 'url'=>array('view', 'id'=>$model->id_orang)),
	array('label'=>'Manage Pelanggan', 'url'=>array('admin')),
);
?>

<h1>Update Pelanggan <?php echo $model->id_orang; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
