<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>

<section class="content-wrapper">
    <section class="content-header">
<!--        main row-->
        <div class="row">
<!--            left side-->
            <div class="col-md-6">
<!--                student details-->
                <div class="box box-primary">
                    <!-- .box-header -->
                    <div class="box-header  with-border">
                        <h3 class="box-title">Student Details</h3>
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
                                <label for="exampleInputEmail1">Name:</label>
                                <input type="email" class="form-control" id="studentNameTxt" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label >Gender:</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="radio"  name="parent"  id="father" class="form-check-input" value="Father" > Male
                                    </div>
                                    <div class="col-md-4">
                                        <input type="radio"  name="parent" id="mother" class="form-check-input" value="Mother">  Female
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Birth Day:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="date"/>
                                </div><!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Religion:</label>
                                <input type="email" class="form-control" id="studentReligionTxt" placeholder="Enter Religion">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email:</label>
                                <input type="email" class="form-control" id="studentEmailTxt" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Admission No:</label>
                                <input type="input" class="form-control" id="studentAdmissionNoTxt" placeholder="Enter Admission No">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Class:</label>
                                <input type="input" class="form-control" id="studentNameTxt" placeholder="Enter Nationality">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Section:</label>
                                <input type="input" class="form-control" id="studentNameTxt" placeholder="Enter Nationality">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address:</label>
                                <textarea class="form-control" id="studentAddressTxt" rows="3" placeholder="Enter Address"></textarea>
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

<!--            left side panel-->
            <div class="col-md-6">

<!--                guardian details-->
                <div class="box box-primary">
                    <div class="box-header  with-border">
                        <h3 class="box-title">Guardian's Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label >Guardian type:</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="radio"  name="parent"  id="father" class="form-check-input" value="Father" > Father
                                    </div>
                                    <div class="col-md-4">
                                        <input type="radio"  name="parent" id="mother" class="form-check-input" value="Mother">  Mother
                                    </div>
                                    <div class="col-md-4">
                                        <input type="radio"  name="parent" id="guardian" class="form-check-input" value="Guardian">  Guardian
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name:</label>
                                <input type="email" class="form-control" id="parentNameTxt" placeholder="Enter Full Name">
                            </div>
                            <div class="form-group">
                                <label for="InputOccupation">Occupation:</label>
                                <input type="text" class="form-control" id="parentOcupationTxt" placeholder="Enter Occupation">
                            </div>
                            <div class="form-group">
                                <label for="InputEmail1">Email:</label>
                                <input type="Email" class="form-control" id="parentEmail" placeholder="Enter Email">
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
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address:</label>
                                <textarea class="form-control" id="parentAddressTxt" rows="3" placeholder="Enter Address"></textarea>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                    </form>
                </div><!-- /.box -->
            </div>
        </div>
        <div>
        </div>
    </section>
</section>

<script>
    var studentNameTxt='';
    var studentReligionTxt
    var studentEmailTxt
    var studentAdmissionNoTxt
    var studentClassTxt
    var studentSectionTxt
    var studentAddressTxt
    var parentNameTxt
    var parentOcupationTxt
    var parentEmail
    var parentAddressTxt



</script>

<?php include_once('../admincommon/footer.php'); ?>