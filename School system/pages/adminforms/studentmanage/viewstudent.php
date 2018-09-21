<?php include_once('studenthead.php'); ?>
<?php include_once('studentheader.php'); ?>
<?php include_once('studentsidebar.php'); ?>
<?php include_once('studentscript.php'); ?>

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
                        <!--Lable field-->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First Name:</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Last Name:</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Admission No:</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Birth Day:</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nationality:</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Religion:</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address:</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone No:</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email:</label>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Dinuka </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kasun</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">2016cs089</label>
                                        </div>
                                        <div class="form-group">
                                            <label>1995 Sep 20</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Srilankan</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Buddhist</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">73, dampe, madapatha</label>
                                        </div>
                                        <div class="form-group">
                                            <label>0717275722</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">dinuka.kasunds@gmail.com</label>
                                        </div>
                                    </div>
                                </div>
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
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First Name:</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Last Name:</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Occupation:</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Birth Day:</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email:</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone:</label>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Dinuka </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kasun</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">2016cs089</label>
                                        </div>
                                        <div class="form-group">
                                            <label>1995 Sep 20</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Srilankan</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Buddhist</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div><!-- /.box -->
            </div>
        </div>
    </section>
</section>
