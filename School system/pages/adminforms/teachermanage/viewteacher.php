<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>

<body>
<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-12">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Teacher Details</h3>
                    </div><!-- /.box-header -->
                    <form role="form">
                        <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
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
                                </div>
                                <div class="col-md-6">
                                    <!--Lable names-->
                                    <div class="form-group">
                                        <label class="text-muted"  >First Name:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Middle Name:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Last Name:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Name with Initials:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Gender:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Date Of Birth:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted" >Email:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Admission Date:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Grade:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Class:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Address:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Phone:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Current Status:</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label id = "teacherfNameTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id = "teachermNameTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id = "teacherlNameTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id = "teacheriNameTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id = "teacherGenderTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id="teacherBDYTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id ="teacherEmailTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id="admissionDateTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id="teacherClassTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id="teacherGradeTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id="teacheraddressTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id="teacherTelTxt">-</label>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                    </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>
</body>

<?php include_once('../admincommon/footer.php'); ?>



<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>

<script>
    var addmissionSearch
    var fNameSearch
    var lNameSearch

    var teacherfNameTxt
    var teachermNameTxt
    var teacherlNameTxt
    var teacheriNameTxt
    var teacherGenderTxt
    var teacherBDYTxt
    var teacherEmailTxt
    var admissionDateTxt
    var teacherClassTxt
    var teacherGradeTxt
    var teacheraddressTxt
    var teacherTelTxt 
    
    document.getElementById("teacherfNameTxt").innerHTML = teacherfNameTxt;
    document.getElementById("teachermNameTxt").innerHTML = teachermNameTxt;
    document.getElementById("teacherlNameTxt").innerHTML = teacherlNameTxt;
    document.getElementById("teacheriNameTxt").innerHTML = teacheriNameTxt;
    // document.querySelector('teacherGenderTxt').innerHTML = teacherGenderTxt;
    document.querySelector('teacherBDYTxt').innerHTML = teacherBDYTxt;
    document.getElementById("teacherEmailTxt").innerHTML = teacherEmailTxt;
    document.getElementById("admissionDateTxt").innerHTML = admissionDateTxt;
    document.getElementById("teacherClassTxt").innerHTML = teacherClassTxt;
    document.getElementById("teacherGradeTxt").innerHTML = teacherGradeTxt;
    document.getElementById("teacheraddressTxt").innerHTML = teacheraddressTxt;
    document.getElementById("teacherTelTxt").innerHTML = teacherTelTxt;

    
</script>
