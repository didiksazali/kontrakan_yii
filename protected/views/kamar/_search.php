<?php
/* @var $this KamarController */
/* @var $model Kamar */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kode_kamar'); ?>
		<?php echo $form->textField($model,'kode_kamar',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_kamar'); ?>
		<?php echo $form->textField($model,'nama_kamar',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarif_normal'); ?>
		<?php echo $form->textField($model,'tarif_normal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarif_khusus'); ?>
		<?php echo $form->textField($model,'tarif_khusus'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->