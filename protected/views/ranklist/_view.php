<?php
/* @var $this RanklistController */
/* @var $data Ranklist */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('games')); ?>:</b>
	<?php echo CHtml::encode($data->games); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trys')); ?>:</b>
	<?php echo CHtml::encode($data->trys); ?>
	<br />


</div>