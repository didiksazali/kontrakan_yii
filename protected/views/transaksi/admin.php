<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */

$this->breadcrumbs=array(
	'Transaksi'=>array('index'),
	'Report',
);

$this->menu=array(
	 array('label'=>'Cetak Transaksi', 'url'=>array('cetakTransaksi')),
	// array('label'=>'Create Transaksi', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#transaksi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Transaksi Report</h1>

<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php //echo $form->dropDownList($model, 'id_jenis_kelamin', CHtml::listData(JenisKelamin::model()->findAll(),'id_jenis_kelamin','jenis_kelamin'));?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'transaksi-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'columns'=>array(
		// 'id_transaksi',
		'id_orang',
		// 'nama_orang',
		array(
			'header' => 'Nama Pelanggan',
			'value' => function($model, $index, $dataColumn){
					return $model->idOrang->nama_orang;
				},
		),
		// 'jenis_kelamin',
		array(
			'header' => 'Jenis Kelamin',
			'value' => function($model, $index, $dataColumn){
					return $model->idOrang->jenis_kelamin;
				},
		),
		// 'kode_kamar',
		'lama_inap',
		array(
					 'header'=>'Biaya Kamar',
					 'value'=>'CHtml::encode($data->biayaKamar())',
			 ),
		'biaya_tambahan',
		array(
	 	 			 'header'=>'Biaya Total',
	 	 			 'value'=>'CHtml::encode($data->biayaTotal())',
	 	 	 ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
