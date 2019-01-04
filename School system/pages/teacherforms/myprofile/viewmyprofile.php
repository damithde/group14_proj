<?php include_once('../teachercommon/head.php'); ?>
<?php include_once('../teachercommon/header.php'); ?>
<?php include_once('../teachercommon/sidebar.php'); ?>
<?php include_once('../teachercommon/script.php'); ?>



<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>


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



                                    <!--            left side panel-->

                <!--                student details-->

                
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

                                                <!--Lable names-->

                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Teacher ID:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">First name:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Middle name:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Last name:</label>
                                            </div>

                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">Gender:</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">Date Of Birth:</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-muted" >Email:</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">Admission Date:</label>
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
                                        <label id="teacherIDLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="teacherFirstNameLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="teacherMiddleNameLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="teacherLastNameLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="teacherGenderLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="teacherBdyLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="teacherEmailLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="teacherAdmissionLbl">-</label>
                                    </div>


                                    <div class="form-group">
                                        <label id="teacherAddressLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="teacherPhoneLbl">-</label>
                                    </div>

                                </div>


                            </div>
                        </div><!-- /.box-body -->

                    </div>
                            </div>
                        </div>
                    </div>




                                <div class="col-md-12">
                                </div>
                                    <!--                guardian details-->
                                    <div class="box box-primary">
                                        <div class="box-header  with-border">
                                            <h3 class="box-title">Application For Leave </h3>
                                        </div><!-- /.box-header -->
                                        <!-- form start -->
                                        <form role="form">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">School ID:1101</label>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name:</label>
                                                    <input type="text" class="form-control" id="parentNameTxt" placeholder="Enter Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Teacher ID:</label>
                                                    <input type="text" class="form-control" id="parentNameTxt" placeholder="Enter Teacher ID">
                                                </div>


                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Number Of Leave days:</label>
                                                    <input type="text" class="form-control" id="parentNameTxt" placeholder="Enter No Of days">
                                                </div>
                                                <div class="form-group">
                                                    <label>Date Of Commencing leave:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="date" class="form-control pull-right" id="date"/>
                                                    </div><!-- /.input group -->
                                                </div>

                                                <div class="form-group">
                                                    <label>Date Of Assuming duties:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="date" class="form-control pull-right" id="date"/>
                                                    </div><!-- /.input group -->
                                                </div>
                                                <div class="form-group">

                                                    <div id="studentMediumTxt" class="form-group">
                                                        <label  >Leave Type:</label>
                                                        <select class="form-control">
                                                            <option value="1">Sick</option>
                                                            <option value="2">Casual</option>
                                                            <option value="3">Other</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Reasons For Leave:</label>
                                                    <input type="text" class="form-control" id="parentNameTxt" placeholder="Enter Reason">
                                                </div>
                                                <div class="box-footer">
                                                    <button type="submit" class="btn btn-primary">Send</button>
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
            var teacherIDLbl
            var teacherFirstNameLbl
            var teacherMiddleNameLbl
            var teacherLastNameLbl
            var teacherGenderLbl
            var teacherBdyLbl
            var teacherEmailLbl
            var teacherAdmissionLbl
            var teacherAddressLbl
            var teacherPhoneLbl

            document.getElementById('teacherIDLbl').innerHTML = teacherIDLbl;
            document.getElementById('teacherFirstNameLbl').innerHTML = teacherFirstNameLbl;
            document.getElementById('teacherMiddleNameLbl').innerHTML = teacherMiddleNameLbl;

            document.getElementById('teacherLastNameLbl').innerHTML = teacherLastNameLbl;
            document.getElementById('teacherGenderLbl').innerHTML = teacherGenderLbl;
            document.getElementById('teacherBdyLbl').innerHTML = teacherBdyLbl;
            document.getElementById('teacherEmailLbl').innerHTML = teacherEmailLbl;
            document.getElementById('teacherAdmissionLbl').innerHTML = teacherAdmissionLbl;
            document.getElementById('teacherAddressLbl').innerHTML = teacherAddressLbl;
            document.getElementById('teacherPhoneLbl').innerHTML = teacherPhoneLbl;




    </script>
<?php include_once('../teachercommon/footer.php'); ?>

