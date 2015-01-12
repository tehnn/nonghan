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
         
         $this->render('test2',array(
             'data'=>$date,
             'id'=>'aaaaaaa'
         ));
         
     }
     
     
     public function actionTest3($no=NULL){
         
         $data = $no;
         
         $this->render('test3',array(
             'data'=>$data
         ));
         
     }
     
     

}

// จบ class 
