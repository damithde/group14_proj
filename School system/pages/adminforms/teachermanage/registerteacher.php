<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>

<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>

<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Teacher Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
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
                                <input type="email" class="form-control" id="studentNameTxt" placeholder="Enter Religion">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email:</label>
                                <input type="email" class="form-control" id="addmissionNoTxt" placeholder="Enter Admission No">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Admission No:</label>
                                <input type="email" class="form-control" id="studentNameTxt" placeholder="Enter Nationality">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Class:</label>
                                <input type="email" class="form-control" id="studentNameTxt" placeholder="Enter Nationality">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Section:</label>
                                <input type="email" class="form-control" id="studentNameTxt" placeholder="Enter Nationality">
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
                                <label for="exampleInputFile">Select Photo</label>
                                <input type="file" id="exampleInputFile">
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">

                        </div>
                    </form>
                </div><!-- /.box -->
            </div>

            <div class="col-md-6">
<!--                right panel-->
            </div>
        </div>
        <div>
        </div>
    </section>
</section>
<?php include_once('../admincommon/footer.php'); ?>