<?php
/* @var $this RanklistController */
/* @var $model Ranklist */

$this->breadcrumbs=array(
	'Ranklists'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ranklist', 'url'=>array('index')),
	array('label'=>'Create Ranklist', 'url'=>array('create')),
	array('label'=>'View Ranklist', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage Ranklist', 'url'=>array('admin')),
);
?>

<h1>Update Ranklist <?php echo $model->user_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>