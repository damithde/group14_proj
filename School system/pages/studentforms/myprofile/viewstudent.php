<?php include_once('../studentcommon/head.php'); ?>
<?php include_once('../studentcommon/header.php'); ?>
<?php include_once('../studentcommon/sidebar.php'); ?>
<?php include_once('../studentcommon/script.php'); ?>

<head>
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-storage.js"></script>
    <script src="../../../firebase models/db.js"></script>
    <script src="../../../firebase models/student.js"></script>
    <script src="../../../firebase models/admin.js"></script>
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
                        <h3 class="box-title">Student Details</h3>
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
                                                <label class="text-muted"  >Name Initials:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Gender:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Date Of Birth:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Religion:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" >Email:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Admission Date:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Medium:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Class:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Section:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Address:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Phone:</label>
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
                                        <label id="studentiNameLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentGenderLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentBdyLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentReligionLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentEmailLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentAdtLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentMediumLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentClassLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentSectionLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentAddressLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentPhoneLbl">-</label>
                                    </div>
                                    
                                </div>

                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                        </div>
                    </form>
                </div><!-- /.box -->



                
                

                </div>

                <div class="col-md-6 ">
                    <div>
                        <div class="box box-primary">
                            <div class="box-header  with-border">
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
                                                <label class="text-muted"  >Name:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Occupation:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Email:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Phone:</label>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  id="parentNameLbl">-</label>
                                                </div>
                                                <div class="form-group">
                                                    <label id="parentOccupationLbl">-</label>
                                                </div>
                                                <div class="form-group">
                                                    <label id="parentEmailLbl">-</label>
                                                </div>
                                                <div class="form-group">
                                                    <label id="parentPhoneLbl">-</label>
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
    getschool("stuschool");
    var studentRegNo 



    var studentfNameLbl
    var studentmNameLbl
    var studentlNameLbl
    var studentiNameLbl
    var studentGenderLbl
    var studentBdyLbl
    var studentReligionLbl
    var studentEmailLbl
    var studentAdtLbl
    var studentMediumLbl
    var studentClassLbl
    var studentSectionLbl
    var studentAddressLbl
    var studentPhoneLbl
    var parentNameLbl
    var parentOccupationLbl
    var parentEmailLbl
    var parentPhoneLbl

    function getstudentsfromreg("1111111"){
        var output;
        db.collection("students").where("schoolid","==",school).where("regno","==",reg)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                output=doc.data();

                document.getElementById('studentfNameLbl').innerHTML = output.Fname;
                document.getElementById('studentmNameLbl').innerHTML = output.Mname;
                document.getElementById('studentlNameLbl').innerHTML = output.Lname;
                // document.getElementById('studentiNameLbl').innerHTML = output.Iname;
                // document.getElementById('studentGenderLbl').innerHTML = output.fname;
                document.getElementById('studentBdyLbl').innerHTML = output.dob;
                document.getElementById('studentReligionLbl').innerHTML = output.religion;
                document.getElementById('studentEmailLbl').innerHTML = output.email;
                document.getElementById('studentAdtLbl').innerHTML = output.fname;
                document.getElementById('studentMediumLbl').innerHTML = output.fname;
                document.getElementById('studentClassLbl').innerHTML = output.fname;
                document.getElementById('studentSectionLbl').innerHTML = output.grade;
                document.getElementById('studentAddressLbl').innerHTML = output.address;
                document.getElementById('studentPhoneLbl').innerHTML = output.contact;

                // document.getElementById('parentNameLbl').innerHTML = output.fname;
                // document.getElementById('parentOccupationLbl').innerHTML = output.fname;
                // document.getElementById('parentEmailLbl').innerHTML = output.fname;
                // document.getElementById('parentPhoneLbl').innerHTML = output.fname;

            //console.log(doc.id, " => ", doc.data());
            });
        })
        .catch(function(error) {
            console.log("Error getting documents: ", error);
        });
    }
    
</script>

<?php include_once('../studentcommon/footer.php'); ?>