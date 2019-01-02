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
                        <h3 class="box-title">Search Student</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                        <!--Lable field-->
                        <div class="row">
                            <div class="col-md-8">
                                    <form action="#" method="get" class="form-group">
                                        <div class="col-md-4">
                                            <label class="text-muted">Search by Admission No</label>
                                        </div>
                                        <div class="col-md-8">
                                            <!-- search form -->
                                            
                                                <div class="input-group">
                                                    <input id="addmissionSearch" type="text" name="q" class="form-control" placeholder="Search by  Admission No"/>
                                                    <span class="input-group-btn">
                                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                            </span>
                                                </div>
                                            
                                            <!-- /.search form -->
                                        </div>
                                    </form>
                                    <form action="#" method="get" class="form-group">
                                        <div class="col-md-4">
                                        <br>
                                            <label class="text-muted">Search by First Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <!-- search form -->
                                            <br>
                                                <div class="input-group">
                                                    <input id="fNameSearch" type="text" name="q" class="form-control" placeholder="Search by First Name"/>
                                                    <span class="input-group-btn">
                                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                            </span>
                                                </div>
                                            
                                            <!-- /.search form -->
                                        </div>
                                    </form>
                                    <form action="#" method="get" class="form-group">
                                        <div class="col-md-4">
                                        <br>
                                            <label class="text-muted">Search by Last Name:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <!-- search form -->
                                            <br>
                                                <div class="input-group">
                                                    <input id="lNameSearch" type="text" name="q" class="form-control" placeholder="Search by Last Name"/>
                                                    <span class="input-group-btn">
                                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                            </span>
                                                </div>
                                            
                                            <!-- /.search form -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                        </div>
                    </form>
                </div><!-- /.box -->

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
                                        <label class="text-muted"  >Name:</label>
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
                                <label id = "teacherNameTxt">Y.Dinuka Kasun Medis</label>
                            </div>
                            <div class="form-group">
                                <label id = "teacherGenderTxt">Male</label>
                            </div>
                            <div class="form-group">
                                <label id="teacherBDYTxt">1995/09/20</label>
                            </div>
                            <div class="form-group">
                                <label id ="teacherEmailTxt">dinuka.kasunds@gmail.com</label>
                            </div>
                            <div class="form-group">
                                <label id="admissionDateTxt">2015/02/02</label>
                            </div>
                            <div class="form-group">
                                <label id="teacherClassTxt">m1</label>
                            </div>
                            <div class="form-group">
                                <label id="teacherGradeTxt">12</label>
                            </div>
                            <div class="form-group">
                                <label id="teacheraddressTxt">73,Dampe,Madapatha</label>
                            </div>
                            <div class="form-group">
                                <label id="teacherTelTxt">0717275722</label>
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

    var teacherNameTxt
    var teacherGenderTxt
    var teacherBDYTxt
    var teacherEmailTxt
    var admissionDateTxt
    var teacherClassTxt
    var teacherGradeTxt
    var teacheraddressTxt
    var teacherTelTxt 
    
    document.getElementById("teacherNameTxt").innerHTML = teacherNameTxt;
    document.querySelector('teacherGenderTxt').innerHTML = teacherGenderTxt;
    document.querySelector('teacherBDYTxt').innerHTML = teacherBDYTxt;
    document.getElementById("teacherEmailTxt").innerHTML = teacherEmailTxt;
    document.getElementById("admissionDateTxt").innerHTML = admissionDateTxt;
    document.getElementById("teacherClassTxt").innerHTML = teacherClassTxt;
    document.getElementById("teacherGradeTxt").innerHTML = teacherGradeTxt;
    document.getElementById("teacheraddressTxt").innerHTML = teacheraddressTxt;
    document.getElementById("teacherTelTxt").innerHTML = teacherTelTxt;

    
</script>
