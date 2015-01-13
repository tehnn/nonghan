<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            รายงาน
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo Yii::app()->createUrl('Site/Index'); ?>"> หน้าหลัก</a></li>

            <li class="active">รายงาน</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-6">
                <!-- AREA CHART -->
                <div class="box box-primary">

                    <div class="box-body chart-responsive">
                        <div class="chart" id="revenue-chart" style="height: 400px;">
                            <?php                         

                            $this->Widget('ext.highcharts.HighchartsWidget', array(
                                'options' => array(
                                    'title' => array('text' => 'จำนวนผู้มารับบริการ'),
                                    //'subtitle' => array('text' => 'kkkkkkkkkkk'),
                                    'credits' => array('enabled' => false),
                                    'series' => array(array(
                                            'type' => 'pie',
                                            'name' => 'จำนวน',
                                            'data' => $piedata
                                        )),
                                )
                            ));
                            ?>

                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col (LEFT) -->

            <div class="col-md-6">
                <!-- LINE CHART -->
                <div class="box box-info">

                    <div class="box-body chart-responsive">
                        <div class="chart" id="line-chart" style="height: 400px;">
                            <?php
                            $this->Widget('ext.highcharts.HighchartsWidget', array(
                                'options' => '{
      "title": { "text": "Tobacco Consumption" },
      "credits":{"enabled":"false"}
      "xAxis": {
         "categories": ["บริษัท A", "บริษัท B", "บริษัท C"]
      },
      "yAxis": {
         "title": { "text": "mm" }
      },
      "series": [
         { "name": "Jane", "data": [1, 0, 4] },
         { "name": "John", "data": [5, 7,3] }
      ]
   }'
                            ));
                            ?>

                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->



            </div><!-- /.col (RIGHT) -->
        </div><!-- /.row -->

    </section><!-- /.content -->

</aside><!-- /.right-side -->