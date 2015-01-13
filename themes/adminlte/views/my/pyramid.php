<div class="well">
    <?php
    // import highchart libray
    $cs = Yii::app()->getClientScript();
    //$cs->registerScriptFile('http://code.highcharts.com/highcharts.js');
    //$cs->registerScriptFile('http://code.highcharts.com/highcharts-more.js');
    //end import
    // dynamic data template
    $agegroup = array('0-1ปี', '2-5ปี', '5-10ปี', '10ป๊+', 'aaa');
    $male = array(-40, -20, -10, -6, -8);
    $female = array(60, 20, 10, 6, 8);
    //คำนวณค่า max , min 
    $max_female = max($female);
    $max_male = abs(min($male));
    $max = $max_female > $max_male ? $max_female : $max_male;
    //end data
    $this->widget('ext.highcharts.HighchartsWidget', array(
        'options' => array(
            'title' => array('text' => 'กราฟแสดงจำนวนประชากรในเขตรับผิดชอบตามกลุ่มอายุ'),
            'chart' => array(
                'type' => 'bar'
            ),
            'xAxis' => array(
                array(
                    'categories' => $agegroup,
                    'reversed' => false,
                    'labels' => array('step' => 0),
                ),
                array(
                    'opposite' => true,
                    'reversed' => false,
                    'categories' => $agegroup,
                    'linkedTo' => 0,
                    'labels' => array(
                        'step' => 0
                    ),
                ),
            ),
            'yAxis' => array(
                'title' => array(
                    'text' => 'จำนวน'
                ),
                'min' => -1 * ($max) - 10,
                'max' => $max + 10
            ),
            'series' => array(array(
                    'name' => 'เพศชาย',
                    'data' => $male,
                ),
                array(
                    'name' => 'เพศหญิง',
                    'data' => $female,
                ),
            ),
            'plotOptions' => array(
                'series' => array(
                    'stacking' => 'normal'
                ),
            )
        )
    ));
    ?>
</div>
