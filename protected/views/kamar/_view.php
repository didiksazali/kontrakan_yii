<?php
/* @var $this KamarController */
/* @var $data Kamar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_kamar')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_kamar), array('view', 'id'=>$data->kode_kamar)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kamar')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kamar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarif_normal')); ?>:</b>
	<?php echo CHtml::encode($data->tarif_normal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarif_khusus')); ?>:</b>
	<?php echo CHtml::encode($data->tarif_khusus); ?>
	<br />


</div>