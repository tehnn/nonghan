<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            หัว
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo $this->createUrl('route'); ?>"> หน้าหลัก </a></li>

            <li class="active">ปัจจุบัน</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-danger">                   
            <div class="box-body">
                <!-- พื้นที่ content-->

                <form method="POST">
                    วันเริ่ม: 
                    <?php
                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'name'=>'d1',
                        'value' => '',
                        'options' => array(
                            'dateFormat' => 'yy-mm-dd',
                            'changeMonth' => true,
                            'changeYear' => true,
                            'yearRange' => '2012:2020',
                            'minDate' => '2012-01-01', // minimum date
                            'maxDate' => '2020-12-31', // maximum date
                           
                            'showButtonPanel' => true,
                            'autoSize' => true,
                        ),
                        'htmlOptions' => array(
                            //'class' => 'form-control',
                        ),
                    ));
                    ?>
                    วันสิ้นสุด: <input type="text" name="d2">
                    <input type="submit" value="ประมวลผล" class="btn btn-flat btn-danger">

                </form>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'rpt-grid',
    'dataProvider' => $model,
));
?>
                <!-- จบพื้นที่ content-->
            </div><!-- /.box-body -->
        </div><!-- /.box -->

    </section><!-- /.content -->
</aside><!-- /.right-side -->

