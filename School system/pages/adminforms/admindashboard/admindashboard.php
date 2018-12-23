<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>

<body class="skin-blue">
                            <div class="wrapper">
                                <section class="content-wrapper">
                                    <section class="content-header">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="box box-primary">
                                                    <div class="box-header with-border">
                                                        <div >
                                                            <div class="row">
                                                                <div class="col-lg-3 col-xs-6">
                                                                    <div class="small-box bg-green">
                                                                        <div class="inner">
                                                                            <h3>
                                                                                <br>
                                                                            </h3>
                                                                            <p>
                                                                                <br>
                                                                            </p>
                                                                        </div>
                                                                        <div class="icon">
                                                                            <i class="fa fa-group"></i>
                                                                        </div>
                                                                        <a href="../studentmanage/viewstudent.php" class="small-box-footer">
                                                                            Student <i class="fa fa-arrow-circle-right"></i>
                                                                        </a>
                                                                    </div>
                                                                    <!-- small box -->
                                                                </div><!-- ./col -->
                                                                <div class="col-lg-3 col-xs-6">
                                                                    <!-- small box -->
                                                                    <div class="small-box bg-aqua">
                                                                        <div class="inner">
                                                                            <h3>
                                                                                <br>
                                                                            </h3>
                                                                            <p>
                                                                                <br>
                                                                            </p>
                                                                        </div>
                                                                        <div class="icon">
                                                                            <i class="fa fa-user"></i>
                                                                        </div>
                                                                        <a href="../teachermanage/viewteacher.php" class="small-box-footer">
                                                                            Teacher <i class="fa fa-arrow-circle-right"></i>
                                                                        </a>
                                                                    </div>
                                                                </div><!-- ./col -->
                                                                <div class="col-lg-3 col-xs-6">
                                                                    <!-- small box -->
                                                                    <div class="small-box bg-red">
                                                                        <div class="inner">
                                                                            <h3>
                                                                                <br>
                                                                            </h3>
                                                                            <p>
                                                                                <br>
                                                                            </p>
                                                                        </div>
                                                                        <div class="icon">
                                                                            <i class="fa fa-edit"></i>
                                                                        </div>
                                                                        <a href="../attendancemanage/attendance.php" class="small-box-footer">
                                                                            Attendance <i class="fa fa-arrow-circle-right"></i>
                                                                        </a>
                                                                    </div>
                                                                </div><!-- ./col -->
                                                                <div class="col-lg-3 col-xs-6">
                                                                    <!-- small box -->
                                                                    <div class="small-box bg-blue">
                                                                        <div class="inner">
                                                                            <h3>
                                                                                <br>
                                                                            </h3>
                                                                            <p>
                                                                                <br>
                                                                            </p>
                                                                        </div>
                                                                        <div class="icon">
                                                                            <i class="fa fa-check-square-o"></i>
                                                                        </div>
                                                                        <a href="../exammanage/exam.php" class="small-box-footer">
                                                                            Results <i class="fa fa-arrow-circle-right"></i>
                                                                        </a>
                                                                    </div>
                                                                </div><!-- ./col -->
                                                            </div>
                            <div class="row">
                                
                            </div>

                        </div>
                    </div>
                </div>

                <div>
                    <?php include_once('dashboardnotificationPanel.php'); ?>
                </div>

            </div>
            <div class="col-md-3">
                <!-- Calendar -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <?php include_once('dashboardcalendar.php'); ?>
                    </div>
                </div>

                <div >
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Attendance Details</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="progress">
                                <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    Present Students
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                    Present Teachers
                                    <span class="sr-only">70% Complete</span>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>


                <!--                        Notification Panel-->


            </div>
        </div>
    </section>
</section>
</div>
</body>


<?php include_once('../admincommon/footer.php'); ?>

