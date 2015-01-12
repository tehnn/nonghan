<?php
/* @var $this PatientController */
/* @var $model Patient */

$this->breadcrumbs = array(
    'Patients' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Patient', 'url' => array('index')),
    array('label' => 'Create Patient', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#patient-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'patient-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'cid',
        array(
            'name' => 'prename',
            'value' => function($data, $row) {
                echo $data->mprename->name;
            }
        ),
        'fname',
        'lname',
       array(
            'name' => 'sex',
            'value' => function ($data) {
                echo $data->msex->name;
            }
        ),
        array(
            'name'=>'age',
            'value'=>  function ($data){
                echo $data->age." ปี";
            }
        ),
        array(
            'name' => 'disease',
            'value' => function ($data) {
                echo $data->mdisease->disease;
            }
        ),
        'reg_date',
        /*
          'user',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
