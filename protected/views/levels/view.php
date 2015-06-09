<?php
/* @var $this LevelsController */
/* @var $model Levels */

$this->breadcrumbs=array(
	'Levels'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Levels', 'url'=>array('index')),
	array('label'=>'Create Levels', 'url'=>array('create')),
	array('label'=>'Update Levels', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Levels', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Levels', 'url'=>array('admin')),
);
?>

<h1>View Levels #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'level',
	),
)); ?>
