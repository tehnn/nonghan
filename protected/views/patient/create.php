<?php
/* @var $this PatientController */
/* @var $model Patient */

$this->breadcrumbs=array(
	'Patients'=>array('index'),
	'ลงทะเบียน',
);

$this->menu=array(
	array('label'=>'List Patient', 'url'=>array('index')),
	array('label'=>'Manage Patient', 'url'=>array('admin')),
);
?>

<h1>ลงทะเบียนผู้ป่วยรายใหม่</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>