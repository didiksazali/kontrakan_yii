<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_transaksi'); ?>
		<?php echo $form->textField($model,'id_transaksi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_orang'); ?>
		<?php echo $form->textField($model,'id_orang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kode_kamar'); ?>
		<?php echo $form->textField($model,'kode_kamar',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lama_inap'); ?>
		<?php echo $form->textField($model,'lama_inap'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biaya_tambahan'); ?>
		<?php echo $form->textField($model,'biaya_tambahan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->