<?php
/* @var $this TransaksiController */
/* @var $data Transaksi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_transaksi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_transaksi), array('view', 'id'=>$data->id_transaksi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_orang')); ?>:</b>
	<?php echo CHtml::encode($data->id_orang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_kamar')); ?>:</b>
	<?php echo CHtml::encode($data->kode_kamar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lama_inap')); ?>:</b>
	<?php echo CHtml::encode($data->lama_inap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('biaya_tambahan')); ?>:</b>
	<?php echo CHtml::encode($data->biaya_tambahan); ?>
	<br />


</div>