<?php
/* @var $this StudentsController */
/* @var $model Students */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'levels_id'); ?>
		<?php echo $form->textField($model,'levels_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fisrt_name'); ?>
		<?php echo $form->textField($model,'fisrt_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'las_name'); ?>
		<?php echo $form->textField($model,'las_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel'); ?>
		<?php echo $form->textField($model,'tel',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prefix_id'); ?>
		<?php echo $form->textField($model,'prefix_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parent_first_name'); ?>
		<?php echo $form->textField($model,'parent_first_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parent_last_name'); ?>
		<?php echo $form->textField($model,'parent_last_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parent_tel'); ?>
		<?php echo $form->textField($model,'parent_tel',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parent_email'); ?>
		<?php echo $form->textField($model,'parent_email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tambons_id'); ?>
		<?php echo $form->textField($model,'tambons_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->