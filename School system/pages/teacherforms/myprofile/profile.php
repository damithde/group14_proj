<?php include_once('myprofilehead.php'); ?>
<?php include_once('myprofileheader.php'); ?>
<?php include_once('myprofilessidebar.php'); ?>
<?php include_once('myprofilescript.php'); ?>

<section class="content-wrapper">
    <section class="content-header">
        <section class="content-header">
            <div class="row">
                <div class="col-md-9">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div >
                                <div class="row">
                                    <!-- ./col -->
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
                                            <a href="../myprofile/profile.php" class="small-box-footer">
                                                My Details <i class="fa fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
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
                                            <a href="../leave/leave.php" class="small-box-footer">
                                                Leave Request <i class="fa fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <!--            left side panel-->
            <div class="col-md-12">
                <!--                student details-->
                <div class="box box-primary">
                
                    <div class="box-header with-border">
                        <h3 class="box-title">Teacher Details</h3>
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
                                                <label class="text-muted" for="exampleInputEmail1">Teacher Name:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Birth Day:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Address:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Phone No:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" >Gender:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" >NIC Number:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Related Subjects:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">First Appoitnment Date:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Current School Appoinment Date:</label>
                                            </div>




                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">A.H.T.Perera</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">1970/03/14</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No.12,Galle Road,Matara.</label>
                                    </div>
                                    <div class="form-group">
                                        <label>071-2541367</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Male</label>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">705236419V</label>

                                    </div>
                                    <div class="form-group">

                                        <label for="exampleInputEmail1">Maths</label>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">1994/02/12</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">2005/06/21</label>
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
<?php include_once('../teachercommon/footer.php'); ?>

