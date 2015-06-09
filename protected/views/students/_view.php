<?php
/* @var $this StudentsController */
/* @var $data Students */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('levels_id')); ?>:</b>
	<?php echo CHtml::encode($data->levels_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fisrt_name')); ?>:</b>
	<?php echo CHtml::encode($data->fisrt_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('las_name')); ?>:</b>
	<?php echo CHtml::encode($data->las_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel')); ?>:</b>
	<?php echo CHtml::encode($data->tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prefix_id')); ?>:</b>
	<?php echo CHtml::encode($data->prefix_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_first_name')); ?>:</b>
	<?php echo CHtml::encode($data->parent_first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_last_name')); ?>:</b>
	<?php echo CHtml::encode($data->parent_last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_tel')); ?>:</b>
	<?php echo CHtml::encode($data->parent_tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_email')); ?>:</b>
	<?php echo CHtml::encode($data->parent_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tambons_id')); ?>:</b>
	<?php echo CHtml::encode($data->tambons_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>