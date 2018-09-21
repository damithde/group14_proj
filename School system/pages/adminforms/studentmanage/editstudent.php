<?php include_once('studenthead.php'); ?>
<?php include_once('studentheader.php'); ?>
<?php include_once('studentsidebar.php'); ?>
<?php //include_once('right_panel.php'); ?>

    <section class="content-wrapper">
        <section class="content-header">
            <div class="box box-primary">
                <div class="row">
                    <form class="form-group">

                    </form>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-5">
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
            <div class="row">
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Student Details</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name:</label>
                                    <input type="email" class="form-control" id="studentNameTxt" placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name:</label>
                                    <input type="email" class="form-control" id="studentNameTxt" placeholder="Enter Last Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Admission No:</label>
                                    <input type="email" class="form-control" id="addmissionNoTxt" placeholder="Enter Admission No">
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
                                    <label for="exampleInputEmail1">Nationality:</label>
                                    <input type="email" class="form-control" id="studentNameTxt" placeholder="Enter Nationality">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Religion:</label>
                                    <input type="email" class="form-control" id="studentNameTxt" placeholder="Enter Religion">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address:</label>
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
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email:</label>
                                    <input type="email" class="form-control" id="emailTxt" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Select Photo</label>
                                    <input type="file" id="exampleInputFile">
                                </div>
                            </div><!-- /.box-body -->

                            <div class="box-footer">

                            </div>
                        </form>
                    </div><!-- /.box -->
                </div>
                <!--        parent details-->
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Guardian's Details</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="box-body">
                                <div class="form-group">
                                    <label >Guardian type:</label>
                                </div>
                                <div class="form-group">
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
                                    <label for="exampleInputEmail1">First Name:</label>
                                    <input type="email" class="form-control" id="parentNameTxt" placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name:</label>
                                    <input type="email" class="form-control" id="parentNameTxt" placeholder="Enter Last Name">
                                </div>
                                <div class="form-group">
                                    <label for="InputOccupation">Occupation:</label>
                                    <input type="text" class="form-control" id="parentOcupationTxt" placeholder="Enter Occupation">
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail1">Email:</label>
                                    <input type="Email" class="form-control" id="email" placeholder="Enter Email">
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
                                    <textarea class="form-control" id="motherAddressTxt" rows="3" placeholder="Enter Address"></textarea>
                                </div>


                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </form>
                    </div><!-- /.box -->
                </div>
            </div>
        </section>
    </section>


<?php include_once('studentscript.php'); ?>