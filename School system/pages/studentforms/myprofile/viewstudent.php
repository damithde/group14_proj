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
                                                    <img id= "profilepic" style="width:100px; height:128px;" src="../../../dist/img/user_100x128.png" alt="User Image">
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
                                            <!-- <div class="form-group">
                                                <label class="text-muted"  >Name Initials:</label>
                                            </div> -->
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
                                            <!-- <div class="form-group">
                                                <label class="text-muted"  >Admission Date:</label>
                                            </div> -->
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
                                    <!-- <div class="form-group">
                                        <label id="studentiNameLbl">-</label>
                                    </div> -->
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
                                    <!-- <div class="form-group">
                                        <label id="studentAdtLbl">-</label>
                                    </div> -->
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
                                   
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="text-muted"  >Guardian :</label>
                                            </div>
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
                                                    <label  id="parentTypeLbl">-</label>
                                                </div>
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
                                                <div class="form-group">
                                            <div class="col-md-8">
                                                <!-- <div id="studentMediumTxt" class="form-group">
                                                <button style="width:150px" onclick="getstudentsfromreg('1')" type="button" class="btn btn-primary">Load Student List</button>
                                                </div> -->
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
    
    var school ="abc";
    getstudentsfromreg('213');
    function getstudentsfromreg(reg){
        var output;
        db.collection("students").where("school","==",school).where("regno","==",reg)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                output=doc.data();
                document.getElementById('studentfNameLbl').innerHTML = output.Fname;
                document.getElementById('studentmNameLbl').innerHTML = output.Mname;
                document.getElementById('studentlNameLbl').innerHTML = output.Lname;

                // document.getElementById('studentiNameLbl').innerHTML = "D.D.Silva";//output.Iname;
                document.getElementById('studentGenderLbl').innerHTML = "Male";//output.gender;
                document.getElementById('studentBdyLbl').innerHTML = output.dob;
                document.getElementById('studentReligionLbl').innerHTML = output.religion;
                document.getElementById('studentEmailLbl').innerHTML = output.email;
                // document.getElementById('studentAdtLbl').innerHTML = output.fname;
                document.getElementById('studentMediumLbl').innerHTML = output.medium;
                document.getElementById('studentClassLbl').innerHTML = output.class;
                document.getElementById('studentSectionLbl').innerHTML = output.grade;
                document.getElementById('studentAddressLbl').innerHTML = output.address;
                document.getElementById('studentPhoneLbl').innerHTML = output.contact;
                document.getElementById('parentTypeLbl').innerHTML = output.parent.parent;
                document.getElementById('parentNameLbl').innerHTML = output.parent.name;
                document.getElementById('parentOccupationLbl').innerHTML = output.parent.occupation;
                document.getElementById('parentEmailLbl').innerHTML = output.parent.email;
                document.getElementById('parentPhoneLbl').innerHTML = output.parent.Econtact;
                document.getElementById('profilepic').src = output.profileimg;
                
            //console.log(doc.id, " => ", doc.data());
            });
        })
        .catch(function(error) {
            console.log("Error getting documents: ", error);
        });
    }
</script>

<?php include_once('../studentcommon/footer.php'); ?>