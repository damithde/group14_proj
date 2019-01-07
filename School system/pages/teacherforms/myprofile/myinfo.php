<?php include_once('../teachercommon/head.php'); ?>
<?php include_once('../teachercommon/header.php'); ?>
<?php include_once('../teachercommon/sidebar.php'); ?>
<?php include_once('../teachercommon/script.php'); ?>

<head>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-storage.js"></script>
<script src="../../../firebase models/db.js"></script>
<script src="../../../firebase models/teacher.js"></script>
<script src="../../../firebase models/admin.js"></script>
<script src="../../../firebase models/exam.js"></script>
<script src="../../../firebase models/login.js"></script>
<script src="../../../firebase models/fileupload.js"></script>
</head>

<body>
<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-6">
            
                

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Teacher Details</h3>
                    </div><!-- /.box-header -->
                    <br>
                    

                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                        <!--Lable field-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
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
                                                <label class="text-muted"  >Gender:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Date Of Birth:</label>
                                            </div>

                                            <div class="form-group">
                                                <label class="text-muted" >Email:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >School:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Grade:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Class:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Registration Number:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Contact:</label>
                                            </div>

                                            <div class="form-group">
                                                <label class="text-muted"  >Address:</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label id="studentfNameLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentmNameLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentlNameLbl">-</label>
                                    </div>

                                    <div class="form-group">
                                        <label id="studentGenderLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentBdyLbl">-</label>
                                    </div>

                                    <div class="form-group">
                                        <label id="studentEmailLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentschoolLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentgradeLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentClassLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentregnoLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentPhoneLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentAddressLbl">-</label>
                                    </div>
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


</body>




<script>
    
   var schools ="abc";
    getteachers();
   function getteachers(){
        var output;

        db.collection("teachers")
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                output=doc.data();
                document.getElementById('studentfNameLbl').innerHTML = output.Fname;
                document.getElementById('studentmNameLbl').innerHTML = output.Mname;
                document.getElementById('studentlNameLbl').innerHTML = output.Lname;


                document.getElementById('studentGenderLbl').innerHTML = output.Gender;
                document.getElementById('studentBdyLbl').innerHTML = output.dob;

                document.getElementById('studentEmailLbl').innerHTML = output.email;
                document.getElementById('studentschoolLbl').innerHTML = output.school;


                document.getElementById('studentgradeLbl').innerHTML = output.grade;
                document.getElementById('studentClassLbl').innerHTML = output.class;
                document.getElementById('studentregnoLbl').innerHTML = output.regno;
                document.getElementById('studentPhoneLbl').innerHTML = output.contact;
                document.getElementById('studentAddressLbl').innerHTML = output.address;

            //console.log(doc.id, " => ", doc.data());
            });
        })
        .catch(function(error) {
            console.log("Error getting documents: ", error);
        });
    }
</script>

<?php include_once('../teachercommon/footer.php'); ?>