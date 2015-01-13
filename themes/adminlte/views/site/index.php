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
                <?php
                /* @var $this SiteController */

                $this->pageTitle = Yii::app()->name;
                ?>

                <h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

                <p>Congratulations! You have successfully created your Yii application.</p>

                <p>You may change the content of this page by modifying the following two files:</p>
                <ul>
                    <li>View file: <code><?php echo __FILE__; ?></code></li>
                    <li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
                </ul>

                <p>For more details on how to further develop this application, please read
                    the <a href="http://www.yiiframework.com/doc/">documentation</a>.
                    Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
                    should you have any questions.</p>
                <!-- จบพื้นที่ content-->
            </div><!-- /.box-body -->
        </div><!-- /.box -->

    </section><!-- /.content -->
</aside><!-- /.right-side -->


