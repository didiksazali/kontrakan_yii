<?php
/* @var $this OrangController */
/* @var $data Orang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_orang')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_orang), array('view', 'id'=>$data->id_orang)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_orang')); ?>:</b>
	<?php echo CHtml::encode($data->nama_orang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kelamin')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kelamin); ?>
	<br />


</div>