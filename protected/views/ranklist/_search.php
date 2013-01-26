<?php
/* @var $this RanklistController */
/* @var $model Ranklist */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'games'); ?>
		<?php echo $form->textField($model,'games'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trys'); ?>
		<?php echo $form->textField($model,'trys'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->