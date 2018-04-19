<?php
/* @var $this KamarController */
/* @var $model Kamar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kamar-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_kamar'); ?>
		<?php echo $form->textField($model,'kode_kamar',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'kode_kamar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_kamar'); ?>
		<?php echo $form->textField($model,'nama_kamar',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'nama_kamar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tarif_normal'); ?>
		<?php echo $form->textField($model,'tarif_normal'); ?>
		<?php echo $form->error($model,'tarif_normal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tarif_khusus'); ?>
		<?php echo $form->textField($model,'tarif_khusus'); ?>
		<?php echo $form->error($model,'tarif_khusus'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->