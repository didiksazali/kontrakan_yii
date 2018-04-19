<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaksi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nama Pelanggan'); ?>
		<?php //echo $form->textField($model,'id_orang'); ?>
		<?php echo $form->dropDownList($model, 'id_orang', CHtml::listData(Orang::model()->findAll(),'id_orang','nama_orang'));?>
		<?php echo $form->error($model,'id_orang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Kamar'); ?>
		<?php //echo $form->textField($model,'kode_kamar',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->dropDownList($model, 'kode_kamar', CHtml::listData(Kamar::model()->findAll(),'kode_kamar','nama_kamar'));?>
		<?php echo $form->error($model,'kode_kamar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lama_inap'); ?>
		<?php echo $form->textField($model,'lama_inap'); ?>
		<?php echo $form->error($model,'lama_inap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'biaya_tambahan'); ?>
		<?php echo $form->textField($model,'biaya_tambahan'); ?>
		<?php echo $form->error($model,'biaya_tambahan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
