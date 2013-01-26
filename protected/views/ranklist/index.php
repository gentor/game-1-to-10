<?php
/* @var $this RanklistController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ranklists',
);

//$this->menu=array(
//	array('label'=>'Create Ranklist', 'url'=>array('create')),
//	array('label'=>'Manage Ranklist', 'url'=>array('admin')),
//);
?>

<h1>Ranklists</h1>

<?php 
//$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); 
?>
<?php 
    $pos = 0;
    $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        array(
            'name' => '№',
            'value' => '$row+1',
        ),
        array(
            'name' => 'user',
            'type'=>'raw',
            'value' => 'CHtml::encode($data->user->username)',
        ),
        'games',
        'trys',
    ),
)); ?>
