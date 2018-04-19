<?php
/* @var $this OrangController */
/* @var $model Orang */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orang-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_orang'); ?>
		<?php echo $form->textField($model,'nama_orang',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'nama_orang'); ?>
	</div>

	<!-- <div class="row">
		<?php //echo $form->labelEx($model,'jenis_kelamin'); ?>
		<?php //echo $form->textField($model,'jenis_kelamin',array('size'=>15,'maxlength'=>15)); ?>
		<?php //echo $form->dropDownList($model, 'jenis_kelamin', CHtml::listData(Agama::model()->findAll(),'id_agama','agama'));?>
	</div> -->
	<div class="row">
        <?php echo $form->labelEx($model,'jenis_kelamin'); ?>

      <label for="jk_1">  <input name="Orang[jenis_kelamin]" type="radio" id="jenis_kelamin_laki_laki" class="radio-col-blue" value="Laki-laki" <?= $model->jenis_kelamin=="Laki-laki"||$model->isNewRecord?'checked':''?> > Laki-laki</label>


      <label for="jk_2">  <input name="Orang[jenis_kelamin]" type="radio" id="jenis_kelamin_perempuan" class="radio-col-pink" value="Perempuan" <?= $model->jenis_kelamin=="Perempuan"?'checked':'' ?>  > Perempuan</label>


    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
