
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
                                                <label class="text-muted" for="exampleInputEmail1">Name With Initials :</label>
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
                                                <label class="text-muted" for="exampleInputEmail1">Grade:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Class:</label>
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
                                        <label id="teacherIniNameLbl">-</label>
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
                                        <label id="teacherGradeLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="teacherClassLbl">-</label>
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
        </section>
    </section>
    <script>
        var teacherIDLbl
        var teacherFirstNameLbl
        var teacherMiddleNameLbl
        var teacherLastNameLbl
        var teacherIniNameLbl
        var teacherGenderLbl
        var teacherBdyLbl
        var teacherEmailLbl
        var teacherAdmissionLbl
        var teacherGradeLbl
        var teacherClassLbl
        var teacherAddressLbl
        var teacherPhoneLbl

        document.getElementById('teacherIDLbl').innerHTML = teacherIDLbl;
        document.getElementById('teacherFirstNameLbl').innerHTML = teacherFirstNameLbl;
        document.getElementById('teacherMiddleNameLbl').innerHTML = teacherMiddleNameLbl;
        document.getElementById('teacherLastNameLbl').innerHTML = teacherLastNameLbl;
        document.getElementById('teacherIniNameLbl').innerHTML = teacherIniNameLbl;
        document.getElementById('teacherGenderLbl').innerHTML = teacherGenderLbl;
        document.getElementById('teacherBdyLbl').innerHTML = teacherBdyLbl;
        document.getElementById('teacherEmailLbl').innerHTML = teacherEmailLbl;
        document.getElementById('teacherAdmissionLbl').innerHTML = teacherAdmissionLbl;
        document.getElementById('teacherGradeLbl').innerHTML = teacherGradeLbl;
        document.getElementById('teacherClassLbl').innerHTML = teacherClassLbl;
        document.getElementById('teacherAddressLbl').innerHTML = teacherAddressLbl;
        document.getElementById('teacherPhoneLbl').innerHTML = teacherPhoneLbl;




    </script>
<?php include_once('../teachercommon/footer.php'); ?>