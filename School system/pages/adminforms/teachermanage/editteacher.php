<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>

<section class="content-wrapper">
    <section class="content-header">
        <!--        main row-->
        <div class="row">
            <!--            left side-->
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <!--                student details-->
                <div class="box box-primary">
                    <!-- .box-header -->
                    <div class="box-header  with-border">
                        <h3 class="box-title">Teacher Details</h3>
                    </div><!-- /.box-header -->

                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <!--                            search bar row-->
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <!-- search form -->
                                        <form action="#" method="get" class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                                                <span class="input-group-btn">
                                                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                        <!-- /.search form -->
                                    </div>
                                </div>
                            </div>
                            <!--                            create space-->
                            <div class="form-group"></div>
                            <!--                            profile pic row-->
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-3">
                                    <!-- Profile picture -->
                                    <div class="small-box bg-blue">
                                        <div class="inner">
                                            <h3>
                                                Pic
                                            </h3>
                                            <p>
                                                Sales
                                                ss
                                            </p>
                                            <p>
                                                Sales
                                                ss
                                            </p>
                                        </div>
                                    </div>
                                    <!--                                    profile pic edit buttons -->
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
                            </div>
                            <div class="form-group">
                                <label >Name:</label>
                                <input type="email" class="form-control" id="teacherNameTxt" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label>Birth Day:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="birthDayTxt"/>
                                </div><!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label >Language Known:</label>
                                <input type="input" class="form-control" id="teacherLanguageTxt" placeholder="Enter Language Known">
                            </div>
                            <div class="form-group">
                                <label >Qualification:</label>
                                <input type="input" class="form-control" id="teacherQualificationTxt" placeholder="Enter Qualification">
                            </div>
                            <div class="form-group">
                                <label >NIC:</label>
                                <input type="input" class="form-control" id="teacherNICTxt" placeholder="Enter NIC">
                            </div>
                            <div class="form-group">
                                <label >Class:</label>
                                <input type="email" class="form-control" id="studentNameTxt" placeholder="Enter Nationality">
                            </div>
                            <div class="form-group">
                                <label >Section:</label>
                                <input type="email" class="form-control" id="studentNameTxt" placeholder="Enter Nationality">
                            </div>
                            <div class="form-group">
                                <label >Address:</label>
                                <textarea class="form-control" id="addressTxt" rows="3" placeholder="Enter Address"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Phone No:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask='"mask": "(999) 9999999"' data-mask/>
                                </div><!-- /.input group -->
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">

                        </div>
                    </form>
                </div><!-- /.box -->
            </div>

            <!--            right side panel-->
            <div class="col-md-6">


            </div>
        </div>
        <div>
        </div>
    </section>
</section>

<?php include_once('../admincommon/footer.php'); ?>
