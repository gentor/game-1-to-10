<?php
/* @var $this RanklistController */
/* @var $model Ranklist */

$this->breadcrumbs=array(
	'Ranklists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ranklist', 'url'=>array('index')),
	array('label'=>'Manage Ranklist', 'url'=>array('admin')),
);
?>

<h1>Create Ranklist</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>