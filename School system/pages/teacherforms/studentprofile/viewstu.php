<?php include_once('stuprofilehead.php'); ?>
<?php include_once('stuprofileheader.php'); ?>
<?php include_once('stuprofilessidebar.php'); ?>
<?php include_once('stuprofilescript.php'); ?>

<section class="content-wrapper">
    <section class="content-header">
        <div class="row">

            <!--            left side panel-->
            <div class="col-md-12">
                <!--                student details-->
                <div class="box box-primary">
                
                    <div class="box-header with-border">
                        <h3 class="box-title">Student Profile</h3>
                    </div><!-- /.box-header -->

                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                        <!--Lable field-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-4">
                                        <!-- Profile picture -->
                                            <div >
                                                <img src="../../../dist/img/user_100x128.png" alt="User Image">
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label><a href="../teachermanage/registerteacher.php"><i class="fa fa-edit"></i></a></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label><a href="../teachermanage/registerteacher.php"><i class="fa  fa-print"></i></a></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label><a href="../teachermanage/registerteacher.php"><i class="fa fa-download"></i></a></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <!--Lable names-->
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Name:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Gender:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Date Of Birth:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Religion:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" >Email:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Admission Date:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Class:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Section:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Address:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Phone:</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Y.Dinuka Kasun Medis</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Male</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">1995/09/20</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Srilankan</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">dinuka.kasunds@gmail.com</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">2015/02/02</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">m1</label>
                                    </div>
                                    <div class="form-group">
                                        <label>12</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">73,Dampe,Madapatha</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">0717275722</label>
                                    </div>
                                </div>

                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>
        </div>
    </section>
</section>
<?php include_once('../studentcommon/footer.php'); ?>

