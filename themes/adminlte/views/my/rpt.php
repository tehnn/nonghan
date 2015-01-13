<h1>ผล Query </h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'rpt-grid',
    'dataProvider' => $model,
));
?>
