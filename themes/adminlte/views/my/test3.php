<h1> Test3 </h1>
<?php
$date = date('H:i:s');
echo $date;

?>
<hr>
<a href="<?php echo $this->createUrl('test3');  ?>">link ไปที่ action ไม่ส่งค่าไปด้วย</a> <br>
<a href="<?php echo $this->createUrl('test3',array('no'=>'999999'));  ?>">link ไปที่ action ส่งค่าไปด้วย</a><br>

<a href="<?php echo Yii::app()->createUrl('my/test3',array('no'=>'sdddddd'));  ?>">link ไปที่ action ไม่ส่งค่าไปด้วย</a> <br>
<br>
<?php

   echo CHtml::link('ลิ้งอีกแบบ',array('my/test3',
       'no'=>'aaaaaa',
       'no1'=>'ssddsd'
   ));
    
?>

<hr>
<?php
    echo $data;

?>

