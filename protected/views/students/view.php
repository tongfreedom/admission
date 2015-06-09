<?php
/* @var $this StudentsController */
/* @var $model Students */

$this->breadcrumbs=array(
	'Students'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Students', 'url'=>array('index')),
	array('label'=>'Create Students', 'url'=>array('create')),
	array('label'=>'Update Students', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Students', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Students', 'url'=>array('admin')),
);
?>

<h1>View Students #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'levels_id',
		'fisrt_name',
		'las_name',
		'email',
		'tel',
		'prefix_id',
		'parent_first_name',
		'parent_last_name',
		'parent_tel',
		'parent_email',
		'created',
		'address',
		'tambons_id',
		'status',
	),
)); ?>
