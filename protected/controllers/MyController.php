<?php

class MyController extends Controller {

    public function actionTest1() {

        $arr1 = array(1, 2, 3, 5, 'a', 'b');
        echo "<pre>";
        print_r($arr1);

        echo "<hr>";
        $arr2 = array(
            'a' => 'อุเทน',
            'b' => 'sssss',
            'c' => 'xxxx'
        );

        echo $arr2['b'];
        print_r($arr2);

        echo "<hr>";

        $mycar = new Car();
        echo $mycar->color;
        $mycar->gear = "M";
        echo $mycar->gear;
    }

    public function actionTest2() {

        $date = date('Y-m-d H:i:s');

        $this->render('test2', array(
            'data' => $date,
            'id' => 'aaaaaaa'
        ));
    }

    public function actionTest3($no = NULL, $d = null) {

        $data = $no;

        $this->render('test3', array(
            'data' => $data
        ));
    }

    public function actionRpt() {

        $sql = "select * from patient";
        $d1 = '';
        $d2 = '';

        if (!empty($_POST['d1']) and ! empty($_POST['d2'])) {
            $d1 = $_POST['d1'];
            $d2 = $_POST['d2'];
            $sql = "select * from patient where reg_date between '$d1' and '$d2'";
        }

        $rawData = Yii::app()->db->createCommand($sql)->queryAll();

        $dataProvider = new CArrayDataProvider($rawData, array(
            'sort' => array(
                'attributes' => count($rawData) > 0 ? array_keys($rawData[0]) : ''
            ),
            'pagination' => array(
                'pageSize' => 2
            )
        ));

        $this->render('rpt', array(
            'model' => $dataProvider,
            'd1' => $d1,
            'd2' => $d2,
            'sql' => $sql
        ));
    }

    public function actionChart() {
        $a = 20;
        $piedata = array();
        array_push($piedata, array('รพ.สต. a', $a));
        array_push($piedata, array('รพ.สต. b', 10));
        array_push($piedata, array('รพ.สต. c', 20));

        $this->render('chart', array(
            'piedata' => $piedata
        ));
    }

    public function actionPyramid() {
        $this->render('pyramid');
    }

}

// จบ class 
