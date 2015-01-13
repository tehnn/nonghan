<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">                
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Blank page
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        
      
        <?php
        /* @var $this PatientController */
        /* @var $model Patient */

        $this->breadcrumbs = array(
            'Patients' => array('index'),
            'Manage',
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
        <a class="btn btn-primary btn-flat" href="<?=$this->createUrl('create')?>"><i class="glyphicon glyphicon-plus"></i> เพิ่มข้อมูล</a>
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'patient-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                array(
                    'header' => '#',
                    'value' => function($data, $row) {
                        echo $row + 1;
                    },
                    'htmlOptions' => array('style' => 'width: 100px;'),
                ),
                'id',
                'cid',
                array(
                    'name' => 'prename',
                    'value' => function($data, $row) {
                        echo $data->mprename->name;
                    },
                    'filter' => CHtml::listData(Mprename::model()->findAll(), 'id', 'name')
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
                    'name' => 'age',
                    'value' => function ($data) {
                        echo $data->age . " ปี";
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

              

    </section><!-- /.content -->
</aside><!-- /.right-side -->

