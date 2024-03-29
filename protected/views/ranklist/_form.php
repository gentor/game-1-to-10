<?php
/* @var $this RanklistController */
/* @var $model Ranklist */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ranklist-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'games'); ?>
		<?php echo $form->textField($model,'games'); ?>
		<?php echo $form->error($model,'games'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trys'); ?>
		<?php echo $form->textField($model,'trys'); ?>
		<?php echo $form->error($model,'trys'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->