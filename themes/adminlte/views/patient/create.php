<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          เพิ่ม
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo $this->createUrl('index'); ?>"> หน้าหลัก </a></li>

            <li class="active">ปัจจุบัน</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

                <div class="box box-danger">                   
                    <div class="box-body">
                    <!-- พื้นที่ content-->
                    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
                    <!-- จบพื้นที่ content-->
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

    </section><!-- /.content -->
</aside><!-- /.right-side -->


