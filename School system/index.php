<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php //include_once('right_panel.php'); ?>

<body class="skin-blue">
<div class="wrapper">
<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <div class="row">
                    <div class="col-md-4">
                        <!--                        event-->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h1> No of Students <sup style="font-size: 80px"></sup></h1>
                                <p><h3>1345</h3></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="small-box bg-blue">
                            <div class="inner">
                                <h1> No of Teachers <sup style="font-size: 80px"></sup></h1>
                                <p><h3>134</h3></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="small-box bg-light-blue">
                            <div class="inner">
                                <h1> No of Teachers <sup style="font-size: 80px"></sup></h1>
                                <p><h3>134</h3></p>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <a class="btn btn-app">
                            <span class="badge bg-purple"></span>
                            <i class="fa fa-users"></i>Students
                        </a>

                        <a class="btn btn-app">
                            <span class="badge bg-purple"></span>
                            <i class="fa fa-users"></i>Teachers
                        </a>

                        <a class="btn btn-app">
                            <i class="fa fa-edit"></i> Edit
                        </a>

                        <a class="btn btn-app">
                            <i class="fa fa-repeat"></i> Repeat
                        </a>

                        <a class="btn btn-app">
                            <i class="fa fa-save"></i> Save
                        </a>

                        <a class="btn btn-app">
                            <span class="badge bg-yellow">3</span>
                            <i class="fa fa-bullhorn"></i> Notifications
                        </a>

                        <a class="btn btn-app">
                            <span class="badge bg-teal">67</span>
                            <i class="fa fa-inbox"></i> Orders
                        </a>

                        <a class="btn btn-app">
                            <span class="badge bg-aqua">12</span>
                            <i class="fa fa-envelope"></i> Inbox
                        </a>


                    </div>
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
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">School Notifications</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <ul class="products-list product-list-in-box">
                            <li class="item">
                                <div class="product-img">
                                    <img src="http://placehold.it/50x50/d2d6de/ffffff" alt="Product Image"/>
                                </div>
                                <div class="product-info">
                                    <a href="javascript::;" class="product-title">Sport day <span class="label label-warning pull-right">Sport club</span></a>
                                    <span class="product-description">
                          Sport event.
                        </span>
                                </div>
                            </li><!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="http://placehold.it/50x50/d2d6de/ffffff" alt="Product Image"/>
                                </div>
                                <div class="product-info">
                                    <a href="javascript::;" class="product-title">Sport day <span class="label label-warning pull-right">Sport club</span></a>
                                    <span class="product-description">
                          Sport event.
                        </span>
                                </div>
                            </li><!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="http://placehold.it/50x50/d2d6de/ffffff" alt="Product Image"/>
                                </div>
                                <div class="product-info">
                                    <a href="javascript::;" class="product-title">Sport day <span class="label label-warning pull-right">Sport club</span></a>
                                    <span class="product-description">
                          Sport event.
                        </span>
                                </div>
                            </li><!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="http://placehold.it/50x50/d2d6de/ffffff" alt="Product Image"/>
                                </div>
                                <div class="product-info">
                                    <a href="javascript::;" class="product-title">Sport day <span class="label label-warning pull-right">Sport club</span></a>
                                    <span class="product-description">
                          Sport event.
                        </span>
                                </div>
                            </li><!-- /.item -->
                        </ul>
                    </div><!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="javascript::;" class="uppercase">View All Products</a>
                    </div><!-- /.box-footer -->
                </div><!-- /.box -->
            </div>
        </div>
    </section>
</section>
</div>
</body>



<?php include_once('script.php'); ?>

