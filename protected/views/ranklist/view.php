<?php
/* @var $this RanklistController */
/* @var $model Ranklist */

$this->breadcrumbs=array(
	'Ranklists'=>array('index'),
	$model->user_id,
);

$this->menu=array(
	array('label'=>'List Ranklist', 'url'=>array('index')),
	array('label'=>'Create Ranklist', 'url'=>array('create')),
	array('label'=>'Update Ranklist', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete Ranklist', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ranklist', 'url'=>array('admin')),
);
?>

<h1>View Ranklist #<?php echo $model->user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'games',
		'trys',
	),
)); ?>
