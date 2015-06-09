<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>ฟอร์มสมัครเรียน</h1>


<?php
/* @var $this StudentsController */
/* @var $model Students */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'students-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>



	<div class="row">
		<?php echo $form->labelEx($model,'levels'); ?>
		<?php echo $form->dropDownList($model,'levels_id',CHtml::listData(Levels::model()->findAll(),'id','level')); ?>
		<?php echo $form->error($model,'levels_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'prefix_id'); ?>
		<?php echo $form->dropDownList($model,'prefix_id',CHtml::listData(Prefixs::model()->findAll(),'id','prefix')); ?>
		<?php echo $form->error($model,'prefix_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'fisrt_name'); ?>
		<?php echo $form->textField($model,'fisrt_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fisrt_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'las_name'); ?>
		<?php echo $form->textField($model,'las_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'las_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel'); ?>
		<?php echo $form->textField($model,'tel',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prefix_id'); ?>
		<?php echo $form->dropDownList($model,'parent_prefix_id',CHtml::listData(Prefixs::model()->findAll(),'id','prefix')); ?>
		<?php echo $form->error($model,'prefix_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_first_name'); ?>
		<?php echo $form->textField($model,'parent_first_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'parent_first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_last_name'); ?>
		<?php echo $form->textField($model,'parent_last_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'parent_last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_tel'); ?>
		<?php echo $form->textField($model,'parent_tel',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'parent_tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_email'); ?>
		<?php echo $form->textField($model,'parent_email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'parent_email'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
		<?php echo $form->error($model,'created'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tambons_id'); ?>
		<?php echo $form->textField($model,'tambons_id'); ?>
		<?php echo $form->error($model,'tambons_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'สมัครเรียน' : 'Save',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->