<?php include_once('../teachercommon/head.php'); ?>
<?php include_once('../teachercommon/header.php'); ?>
<?php include_once('../teachercommon/sidebar.php'); ?>
<?php include_once('../teachercommon/script.php'); ?>

<section class="content-wrapper">
    <section class="content-header">
        <!--        main row-->
        <div class="row">
            <div class="col-md-12">

                <!--                guardian details-->
                <div class="box box-primary">
                    <div class="box-header  with-border">
                        <h3 class="box-title">Message </h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <div>
                                    <label for="exampleInputEmail1">Student Id:</label>
                                    <label style="color:#CCCCCC">(Seperate with commas)</label>
                                    <!-- <input type="email" class="form-control" id="studentIdText" placeholder="Enter Student Id"> -->
                                    <div ng-app='tag-input'>
                                        <tag-input taglist='listone'></tag-input>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Message:</label>
                                <textarea class="form-control" id="messageTxt" rows="3" placeholder="Enter messege here"></textarea>
                            </div>
                            <div class="box-footer">
                                <div class="col-md-10"></div>
                                <button type="button" class="btn btn-primary" style="width:150px">Send</button>
                            </div>
                            <div class="box-footer">




                    </form>
                </div><!-- /.box -->
            </div>
        </div>
        <div>
        </div>
    </section>
</section>

<?php include_once('../admincommon/footer.php'); ?>
