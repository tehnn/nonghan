<?php
/* @var $this PatientController */
/* @var $model Patient */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'patient-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>



    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'cid'); ?>
        <?php echo $form->textField($model, 'cid', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'cid'); ?>
    </div>

    <div class="row">
        <?php
        $data = Mprename::model()->findAll();
        $list = CHtml::listData($data, 'id', 'name');
        ?>
        <?php echo $form->labelEx($model, 'prename'); ?>
        <?php
        echo $form->dropDownList($model, 'prename', $list);
        ?>

    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'fname'); ?>
        <?php echo $form->textField($model, 'fname', array('size' => 60, 'maxlength' => 255)); ?>

    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'lname'); ?>
        <?php echo $form->textField($model, 'lname', array('size' => 60, 'maxlength' => 255)); ?>

    </div>

    <div class="row">
         <?php
        $data = Msex::model()->findAll();
        $list = CHtml::listData($data, 'id', 'name');
        ?>
        <?php echo $form->labelEx($model, 'sex'); ?>
        <?php
        echo $form->dropDownList($model, 'sex', $list);
        ?>
        
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'age'); ?>
        <?php echo $form->textField($model, 'age'); ?>

    </div>

    <div class="row">
       
         <?php
        $data = Mdisease::model()->findAll();
        $list = CHtml::listData($data, 'id', 'disease');
        ?>
        <?php echo $form->labelEx($model, 'disease'); ?>
        <?php
        echo $form->dropDownList($model, 'disease', $list);
        ?>

    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'reg_date'); ?>
        <?php echo $form->textField($model, 'reg_date', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'reg_date'); ?>
    </div>

   
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->