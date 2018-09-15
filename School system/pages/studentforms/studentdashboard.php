<?php include_once('head.php'); ?>
<?php include_once('header2.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php //include_once('right_panel.php'); ?>

<body class="skin-blue">
<div class="wrapper">
<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-9">
<!--                <div class="box box-primary">-->
<!--                    <div class="box-header with-border">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-4">-->
<!--                                <!--                        event-->
<!--                                <div class="small-box bg-aqua">-->
<!--                                    <div class="inner">-->
<!--                                        <h1> No of Students <sup style="font-size: 80px"></sup></h1>-->
<!--                                        <p><h3>1345</h3></p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-4">-->
<!--                                <div class="small-box bg-blue">-->
<!--                                    <div class="inner">-->
<!--                                        <h1> No of Teachers <sup style="font-size: 80px"></sup></h1>-->
<!--                                        <p><h3>134</h3></p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-4">-->
<!--                                <div class="small-box bg-light-blue">-->
<!--                                    <div class="inner">-->
<!--                                        <h1> No of Teachers <sup style="font-size: 80px"></sup></h1>-->
<!--                                        <p><h3>134</h3></p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

                <div class="box box-primary">
                    <div class="box-header with-border">

                        <a class="btn btn-app">
                            <i class="fa fa-check-square-o"></i> Results
                        </a>

                        <a href="pages/adminforms/calendar.php" class="btn btn-app">
                            <i class="fa  fa-calendar"></i> Calendar
                        </a>

                        <a class="btn btn-app">
                            <span class="badge bg-yellow"></span>
                            <i class="fa fa-clock-o"></i> Time Table
                        </a>

                        <a class="btn btn-app">
                            <span class="badge bg-teal"></span>
                            <i class="fa fa-puzzle-piece"></i> Term Test
                        </a>

                        <a class="btn btn-app">
                            <span class="badge bg-aqua"></span>
                            <i class="fa fa-certificate"></i> Certificates
                        </a>

                        <a class="btn btn-app">
                            <span class="badge bg-yellow"></span>
                            <i class="fa fa-clock-o"></i> Profile
                        </a>


                    </div>
                </div>

                <div>
                    <?php include_once('notificationPanel.php'); ?>
                </div>

            </div>
            <div class="col-md-3">
                <!-- Calendar -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <?php include_once('calendar.php'); ?>
                    </div>

                </div>


                <!--                        Notification Panel-->


            </div>
        </div>
    </section>
</section>
</div>
</body>


<?php include_once('footer.php'); ?>
<?php include_once('script2.php'); ?>

